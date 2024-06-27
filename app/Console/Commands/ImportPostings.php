<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use TIST\Models\Posting;
use TIST\Models\Teacher;
use TIST\Models\School;
use TIST\Models\Teacher\NatureOfAppointment;
use TIST\Models\Teacher\TypeOfTeacher;
use DB;

class ImportPostings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:postings {location}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posting from pre made csvs.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->NatureOfAppointmentMapping = $this->getAppointmentType();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('#############################################');
        $this->comment('###########Importing postings#############');
        $this->info('#############################################');

        $unfilled_designations = [];
        $unfilled_appointments = [];
        $no_school_or_teacher_found = [];
        $natures_of_appointment = NatureOfAppointment::lists('name','id');
        $types_of_teacher = TypeOfTeacher::lists('name','id');

        $school_codes = getSchoolCodes();
        $location = $this->argument('location');
        $q = file($location);
        $this->output->progressStart( count($q) - 1 ); //minus header row
        $handle = fopen($location, 'r');

        $total = count($q);
        $fields = array();

        $teacher_key = null;
        $school_key = null;
        $school_name_key = null;
        $school_id_key = null;
        $place_of_post_key = null;
        $imported_teachers = [];

        if ($handle) {
            while (($row = fgetcsv($handle, 6096)) !== false) {
                if (empty($fields)) {
                    $fields = $row;
                    foreach($row as $k=>$value){
                        if($value == 'tid'){
                            $teacher_key = $k;
                        }
                        if($value == 'schid'){
                            $school_id_key = $k;
                        }
                        if($value == 'schname'){
                            $school_name_key = $k;
                        }
                        
                        if($value == 'appointmentype'){
                            $appointment_type_key = $k;
                        }
                        
                        if($value == 'desig'){
                            $types_of_teacher_key = $k;
                        }

                        if($value == 'frmy'){
                            $date_key = $k;
                        }

                        if($value == 'placepost'){
                            $place_of_post_key = $k;
                        }
                    }
                    continue;
                }
                if($row[$school_id_key]){
                    $school_code = $row[$school_id_key];
                }else{
                    $school_code = array_search($row[$school_name_key], $school_codes);
                }
                if($school_code !== false){
                    $teacher_id = $row[$teacher_key];
                    $teacher = Teacher::where('directorate_teacher_id','=',$teacher_id)->first();

                    $school = School::where('code','=', $school_code)->first();


                    if($teacher && $school){
                        $is_current_post = 1;
                        if(array_key_exists($teacher->id, $imported_teachers)){
                            if(strtotime($imported_teachers[$teacher->id]) > strtotime($row[$date_key])) {

                                $is_current_post = 0;
                            }else{
                                $is_current_post = 1;
                                DB::table('postings')->where('teacher_id', '=', $teacher->id)->update(array('current_post' => 0));
                                $imported_teachers[$teacher->id] = $row[$date_key];
                            }
                        }else{
                            $imported_teachers[$teacher->id] = $row[$date_key];
                            $is_current_post = 1;
                        }

                        $posting = new Posting;
                        $posting->teacher_id = $teacher->id;
                        $posting->school_id = $school->id;
                        $posting->current_post = $is_current_post;
                        $posting->status = 1;

                        /**
                         * Import nature of appointment according to Directorate records
                         */
                        $nature_of_appointment_string = $row[$appointment_type_key];

                        $appointment_id = array_search($nature_of_appointment_string, $natures_of_appointment->toArray());

                        if($appointment_id){
                            $posting->nature_of_appointment_id = $appointment_id;
                        }else{
                            if(array_key_exists($nature_of_appointment_string, $this->NatureOfAppointmentMapping)){
                                $nature_of_appointment_string = $this->NatureOfAppointmentMapping[$nature_of_appointment_string];
                                $appointment_id = array_search($nature_of_appointment_string, $natures_of_appointment->toArray());

                                if($appointment_id)
                                    $posting->nature_of_appointment_id = $appointment_id;
                                else
                                    $unfilled_appointments[] = ['teacher_id'=>$teacher->id, 'appointment'=>$nature_of_appointment_string];
                            }
                            else
                                $unfilled_appointments[] = ['teacher_id'=>$teacher->id, 'appointment'=>$nature_of_appointment_string];
                        }

                        $posting->date = date('Y-m-d', strtotime($row[$date_key]));

                        if($this->simplify($row[$school_name_key]) != $this->simplify($row[$place_of_post_key]))
                            $posting->place_of_post = $row[$place_of_post_key];
                        
                        /**
                         * IMPORT designation as on directorate records
                         */
                        $types_of_teacher_string = $row[$types_of_teacher_key];
                        $type_of_teacher_id = $this->getTeacherType($types_of_teacher_string, $types_of_teacher);

                        if($type_of_teacher_id)
                            $posting->type_of_teacher_id = $type_of_teacher_id;
                        else
                            $unfilled_designations[$types_of_teacher_string] = 1;

                        $posting->save();
                    }else{
                        $no_school_or_teacher_found[] = $row[$teacher_key] . ' - ' . $row[2] . ' - ' . $row[$school_name_key] . "\n";
                    }
                }
                $this->output->progressAdvance();
            }
        }
        $this->output->progressFinish();
        // $this->comment('no teacher or school found');
        // d($no_school_or_teacher_found);
        // $this->comment('Unfilled designations');
        // d($unfilled_designations);
        // $this->comment('Unfilled appointments');
        // d($unfilled_appointments);
    }

    private function simplify($string)
    {
        return str_replace("\n",'', str_replace('.','', str_replace(' ', '', strtolower($string))));
    }

    public function getAppointmentType()
    {
        return [
            'Private Aided'   => 'Private',
            'Private Unaided' => 'Private',
            'SSA'             => 'SSA',
            'Defecit'         => 'Deficit',
            'Local Body'      => 'Local Body',
            'O.B'             => 'Contract',
            'Temporary'       => 'Government',
            'Substitute'      => 'Officiating',
            'Fixed Pay'       => 'Fixed Pay',
            'G.I.A'           => 'Lumpsum Aided',
            'Lumpsum GIA'     => 'Lumpsum Aided',
            'Lumpsum'         => 'Lumpsum Aided',
            'Teacher'         => 'Government',
            'OB'              => 'Contract',
            'Fixed'           => 'Fixed Pay',
            'Dificit'         => 'Deficit',
            'Direct'          => 'Government',
            'Deficti'         => 'Deficit',
            'Govt.'           => 'Government',
            'deficit'         => 'Deficit',
            'Contract (CSS)'  => 'CSS',
            'Govt.'           => 'Government',
            'i'               => 'Government',
            'Govement'        => 'Government',
            'DEFICIT'         => 'Deficit',
            'LumP/Sum'        => 'Lumpsum Aided',
            'Deficit Mission' => 'Deficit',
            'Adhoc'           => 'Adhoc Aided',
            'Ahdoc-Aided'     => 'Adhoc Aided',
            "Substitute"      => 'Officiating'
        ];
    }

    /**
     * Designation
     */
    public function getTeacherType($string, $types_of_teacher)
    {
        $type_array = $types_of_teacher->toArray();
        foreach($type_array as $id => $typeName){
            if( $this->simplify($string) == $this->simplify($typeName)) {
                return $id;
            }
        }

        foreach($type_array as $id => $typeName){
            if($correction = $this->getTypeCorrections($string)){
                if($this->simplify($typeName) == $correction)
                    return $id;
            }
        }

        return false;
    }


    public function getTypeCorrections($string)
    {
        $corrections = [
            'SSA Teacher'         => 'Teacher',
            'Headmistress'        => 'Headmaster',
            'MST'                 => 'Teacher',
            'Aided Teacher'       => "Teacher",
            'Physical Instructor' => "H&P Instructor",
            'UPS Teacher'         => "Teacher",
            'Non-Formal Teacher'  => "Teacher",
            'OB.Teacher'          => "Teacher",
            'OB. Teacher'         => "Teacher",
            'OB Teacher'          => "Teacher",
            'EV.Teacher'          => "Teacher",
            'Officiating'         => "Teacher",
            'Contract Teacher'    => "Teacher",
            'Fixed Pay Teacher'   => "Teacher",
            'CSS Hindi Teacher'   => "Hindi Teacher",
            'Lecturere'           => 'Lecturer',
            'Voc.Teacher'         => 'Lecturer',
        ];
        if(array_key_exists($string, $corrections))
            return $this->simplify($corrections[$string]);
    }
}
/*
  "PS.to Deputy Chief Whip" => 1       
  "Voc.Teacher" => 1                   
  "Lecturere" => 1                     
  "Co-ordinator" => 1                  
  "Grade IV" => 1                      
  "Deficit" => 1                       
  "Hindi Teacher CSS" => 1             
  "H&P Instuctor" => 1                 
  "Health Educational Instructor" => 1 
  "Teachetr" => 1                      
  "Head Teacher" => 1                  
  "Headteacher" => 1                   
  "P.A" => 1                           
  "WE Teacher(Music Instructor)" => 1  
  "Project Assistant" => 1             
  "Music Instructor" => 1              
  "Attached" => 1                      
  "CRCC" => 1                          
  "Computer Operator" => 1             
  "Dy.SPD" => 1                        
  "Subst. Teacher" => 1                
  "Subst.Teacher" => 1                 
  "LDC" => 1                           
  "BRC.Co-ordinator" => 1              
  "PA" => 1                            
  "HeadTeacherer" => 1                 
  "Dy State Project Director" => 1     
  "Addl.SPD(SSA)" => 1                 
  "SPO(SSA)" => 1                      
  "CRC.Co-ordinator" => 1              
  "Cl-VIII Teacher" => 1               
  "Model Teache" => 1                  
  "Headmsater" => 1                    
  "Teacher(UPS)" => 1                  
  "H&P Teacher" => 1                   
  "CRC Co-ordinator" => 1              
  "Pre-Teacher" => 1                   
  "Co-Ordinator" => 1                  
  "MID-DAY MEAL ACCOUNTANT" => 1       
  "Goverment" => 1                     
  "Non Formal Teacher" => 1            
  "Photographer" => 1                  

  */