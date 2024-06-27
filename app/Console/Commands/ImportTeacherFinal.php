<?php

namespace TIST\Console\Commands;

use Log;
use Illuminate\Console\Command;
use TIST\Models\Teacher;
use TIST\Models\Teacher\ServiceInformation;
use TIST\Models\Teacher\NatureOfAppointment;
use DateTime;

class ImportTeacherFinal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:teacher {location}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports teachers from csv.';

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
        // dd(date('Y-m-d', strtotime('2/13/1982')));
        $this->comment('Importing teachers..');
        $q = file($this->argument('location'));
        // $this->comment(count($q));
        $handle = fopen($this->argument('location'), "r");
        $fields = array();

        $this->output->progressStart(count($q));

        
        if ($handle) {
            while (($row = fgetcsv($handle, 4096)) !== false) {
                if (empty($fields)) {
                    $fields = $row;
                    continue;
                }
                $teacher = [];
                foreach ($row as $k=>$value) {
                    $teacher[$fields[$k]] = $value;
                }

                $this->importRow($teacher);
                $this->output->progressAdvance();
                
            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);

            // ensure that the progress bar is at 100%
            $this->output->progressFinish();
        }
        // $teacherObject = new Teacher;
        $newTeachers = [];
// dd($teacherArray);
        // Teacher::create($newTeachers);
        // d($newTeachers);
        $this->comment('Done');
    }

    private function getValid($first, $second = null, $third = null)
    {
        if($second == null){
            return ( $first == 'NULL' || $first == '' ) ? '' : $first;
        }
        if($third != null){
            return ($first != 'NULL' && $first != '') ? $first : (($second != 'NULL' && $second != '') ? $second : ($third != 'NULL' && $third != '') ? $third : '');
        }
        return ( isset($first) && ($first != 'NULL' && $first != '') ) ? $first : $second;
    }

    private function getGender($teacher){
        return ( isset($teacher['sex']) && ($teacher['sex'] != 'NULL' && $teacher['sex'] != '' ) ) ? ( $teacher['sex'] == 'M' ? 1 : 2 ) : (int)$teacher['sex_rmsa'];
    }

    private function getMaritalStatus($teacher)
    {
        if($teacher['havespause'] == 'NULL' || $teacher['havespause'] == '')
            return 1;

        return $teacher['havespause'] == 1 ? 2 : 1;
    }

    private function appointmentType($teacher)
    {
        // if(isset($teacher['appointmentype_rmsa']) && $teacher['appointmentype_rmsa'])
        //     return $teacher['appointmentype_rmsa'];


        /**
         * use $this->natures_of_appointment ... too many query
         * @var [type]
         */
        $natures_of_appointment = NatureOfAppointment::lists('name','id');
        $nature_of_appointment_string = $teacher['appointmentype'];

        $appointment_id = array_search($nature_of_appointment_string, $natures_of_appointment->toArray());

        if($appointment_id){
            return $appointment_id;
        }else{
            if(array_key_exists($nature_of_appointment_string, $this->NatureOfAppointmentMapping)){
                $nature_of_appointment_string = $this->NatureOfAppointmentMapping[$nature_of_appointment_string];
                $appointment_id = array_search($nature_of_appointment_string, $natures_of_appointment->toArray());

                if($appointment_id)
                    return $appointment_id;
                else
                    Log::info('Teacher directorate_teacher_id: '.$teacher['tid'] . ' --- ' . $nature_of_appointment_string);
            }
            else
                Log::info('Teacher directorate_teacher_id: '.$teacher['tid'] . ' --- ' . $nature_of_appointment_string);
        }
    }

    private function getDate($teacher, $type)
    {
        return DateTime::createFromFormat('d-M-y', strtolower($teacher[$type]))?:null;
    }

    private function getPensionTypeId($teacher)
    {
        $t = $teacher['PensionType'];
        return $t == 'No Pension' ? 1 : ($t == 'Pension' ? 3 : 2);
    }

    private function getGpfPrefixId($teacher)
    {
        if(! isset($teacher['gpaccfname']))
            return null;

        switch ($teacher['gpaccfname']) {
            case 'MZ(EDN)':
                return 1;
                break;
            case 'PME(MZ)':
                return 2;
                break;
            case 'MST(MZ)':
                return 3;
                break;
            case 'HSE(MZ)':
                return 4;
                break;
            default:
                break;
        }
    }

    private function importRow($teacher)
    {
        // dd($teacher);
        $t = new Teacher;
        $t->directorate_teacher_id = $teacher['tid'];
        $t->name = $this->getValid( $teacher['teachername'], $teacher['directorate_tname'], $teacher['rmsa_tname'] );
        $t->gender_id = $this->getGender( $teacher);
        $t->father_name = $teacher['fname'];
        $t->mother_name = $teacher['mname'];
        $t->marital_status_id = $this->getMaritalStatus($teacher);
        $t->spouse_name = $teacher['spausename'] == 'NULL' ? NULL : $teacher['spausename'];
        $t->phone_number = $this->getValid($teacher['phone']);
        $t->mobile_number = $this->getValid($teacher['mobile']);
        $t->email = $this->getValid($teacher['email']);
        $t->present_address = $this->getValid($teacher['Presentadd']);
        $t->permanent_address = $this->getValid($teacher['Permanentadd']);
        $t->epic_number = $this->getValid($teacher['epicno']);
        $t->blood_group = $this->getValid($teacher['bloodgroup']);
        $t->date_of_birth = date('Y-m-d', strtotime($this->getDob($teacher['dob'], $teacher['dob_rmsa'])));

        $t->social_category_id = $this->getValid($teacher['caste']);
        $t->disability_id = $this->getValid($teacher['disability_type']);
        $t->qualification_id = $this->getValid($teacher['qual_acad']);
        $t->math_science_upto_id = $this->getValid($teacher['math_upto']);
        $t->english_language_upto_id = $this->getValid($teacher['eng_upto']);
        // $t->social_upto_id = $this->getValid($teacher['science_upto']); //NEEDS REVIEW
        $t->professional_qualification_id = strlen($teacher['qual_prof']) ? : 1;
        $t->professional_qualification_year = $this->getValid($teacher['yroftraining']);
        $t->trained_for_cwsn = $this->getValid($teacher['cwsntrained_yn']);
        $t->current_nature_of_appointment_id = $this->appointmentType($teacher);
        $t->status = 'active';
        
        if($t->save() && $t->current_nature_of_appointment_id == 1){
            $service = new ServiceInformation;
            $service->teacher_id =  $t->id;
            $service->date_of_appointment =  $this->getDate($teacher, 'doappt');
            $service->date_of_joining =  $this->getDate($teacher, 'dojoining');
            $service->date_of_confirmation =  $this->getDate($teacher, 'doc');

            $service->pension_type_id =  $this->getPensionTypeId($teacher);
            $service->gpf_prefix_id = $this->getGpfPrefixId($teacher['gpaccfname']);
            $service->gpf_suffix = $this->getValid($teacher['gpfno']);
            $service->new_pension_scheme_number = $this->getValid($teacher['npsaccno']);
            $service->appointing_authority_id = NULL;
            $service->rank_in_recruitment = NULL;
            $service->grade = $this->getValid($teacher['teachergrade'], 'None');
            $service->save();
        }
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

    public function getDob($directorate_dob, $rmsa_dob)
    {
        if($directorate_dob == "NULL" && $rmsa_dob == "NULL")
            return '0000-00-00';

        // if(strtotime($directorate_dob)){
        //     return $directorate_dob;
        // }
        
        if($directorate_dob != 'NULL'){
            $isHyphenSeparated = strpos($directorate_dob, '-') !== false;
            $dob_array = $isHyphenSeparated ? explode('-', $directorate_dob) : explode('/', $directorate_dob) ;
            // if(count($dob_array) < 3)
                // dd($dob_array);
            $date_string = $dob_array[0] . '-' . $dob_array[1] . '-19' . $dob_array[2];
            $validDate = $isHyphenSeparated ? 
                date_create_from_format('d-M-Y', $date_string) : 
                date_create_from_format('d-m-Y', $date_string);
            
            if($validDate)
                return $date_string;
        }
        $dob_array =  explode('/', $rmsa_dob);
        if(count($dob_array) < 3){
            return '0000-00-00';
            // continue;
        }
        
        return $dob_array[2] . '-' . $dob_array[0] . '-' . $dob_array[1];
    }
}
