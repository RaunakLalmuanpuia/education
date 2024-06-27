<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use TIST\Models\School\ConsolidatedEnrollment;
use TIST\Models\School;

use TIST\Models\Import;
use TIST\Models\Locations\District;
use TIST\Models\School\Statistics\Statistic;
use TIST\Models\School\Statistics\ConsolidatedDistrictInfo;

class ImportEnrollment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:enrollment {year} {location} {importId=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports consolidated enrollment data.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        $this->year = $this->argument('year');
        $this->existing_stat = 0;
        $this->new_stat = 0;

        $this->info('#############################################');
        $this->comment('###########Importing enrollment data#############');
        $this->info('#############################################');

        $q = file($this->argument('location'));
        $this->output->progressStart( count($q) - 1 ); //minus header row
        $handle = fopen($this->argument('location'), 'r');

        $total = count($q);

        // $importProgress = new Progress();
        // $importProgress->type = 'enrollment';
        // $importProgress->total = $total;
        // $importProgress->save();
        $fields = array();
        $totals = [];



        if ($handle) {
            $importId = $this->argument('importId');
            $currentRow = 0;
            if($importId){
                $import = Import::find($importId);
                $import->start = date('Y-m-d h:j:s');
                $import->total = $total;
                $import->done = $currentRow;
                $import->save();
            }
            while (($row = fgetcsv($handle, 6096)) !== false) {
                if (empty($fields)) {
                    $fields = $row;
                    continue;
                }
                
                $enrollmentCols = ConsolidatedEnrollment::propertiesFromUdice();
                $enrollment = null;
                
                $schoolCodeKey = array_search('schcd', $fields);
                $districtCode = substr($row[$schoolCodeKey], 0, 4);
                $districtName = District::whereCode($districtCode)->first()->name;
                $totals[$districtCode]['name'] = $districtName;
                $totals[$districtCode]['code'] = $districtCode;
                foreach ($row as $k=>$value) {

                    if(in_array($fields[$k],['cpp_b','cpp_g','c1_b','c1_g','c2_b','c2_g','c3_b','c3_g','c4_b','c4_g','c5_b','c5_g','c6_b','c6_g','c7_b','c7_g','c8_b','c8_g','c9_b','c9_g','c10_b','c10_g','c11_b','c11_g','c12_b','c12_g','tch_m','tch_f','tch_t','tchpri','tchupr','tchsec','tchhsec','tchpart'])){
                        if(!isset($totals[$districtCode]['data'][$fields[$k]])){
                            $totals[$districtCode]['data'][$fields[$k]] = 0;
                        }
                        $totals[$districtCode]['data'][$fields[$k]] += $value;
                    }

                    if($fields[$k] == 'schcd'){
                        $school = School::where('code', '=', $value)->first(); 
                        // dd($school);                       
                        $enrollment = ConsolidatedEnrollment::firstOrNew([
                                'school_id' => $school->id,
                                'year' => $this->year
                            ]
                        );
                        $enrollment->school_id = $school->id;
                    }

                    try{
                        if(in_array($fields[$k], $enrollmentCols)){
                            $enrollment->$fields[$k] = $value;
                        }
                    }catch(\Exception $e){
                        continue;
                    }

                }

                $enrollment->year = $this->year;
                $enrollment->save();
                if($importId){
                    $import->done = ++$currentRow;
                    $import->save();
                }
                $this->output->progressAdvance();
            }
            if($importId){
                $import->end = date('Y-m-d h-j-s');
                $import->save();
            }
        }

        $this->output->progressFinish();

        // $handle = fopen('public/data/2015-enrollments.json', 'w');
        
        $districtReport = new ConsolidatedDistrictInfo;
        $districtReport->type = 'enrollment';
        $districtReport->year = $this->year;
        $districtReport->info = json_encode($totals);
        $districtReport->save();


        $this->comment("Existing Statistic - " . $this->existing_stat);
        $this->comment("New Statistic - " . $this->new_stat);
    }
}
