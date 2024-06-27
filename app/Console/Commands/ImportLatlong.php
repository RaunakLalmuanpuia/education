<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use TIST\Models\School;
use TIST\Models\Import;
use Log;
class ImportLatlong extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:latlong {location} {importId=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports location of schools from a csv.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        ini_set('auto_detect_line_endings', 1);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $wrongCode = 0;
        $updated = 0;

        $this->info('#############################################');
        $this->comment('###########Importing Location information#############');
        $this->info('#############################################');

        $q = file($this->argument('location'));
        $importId = $this->argument('importId');
        $currentRow = 0;
        $this->output->progressStart( count($q) - 1 ); //minus header row
        $handle = fopen($this->argument('location'), 'r');

        $total = count($q);
        $fields = array();
        if ($handle) {
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
                $lat = 0;
                $long = 0;
                $school = null;
                foreach ($row as $k=>$value) {
                    if(!isset($fields[$k])){
                        dd($row);
                    }
                    if($fields[$k] == 'Remarks' && $value != 'Completed')
                        continue;

                    if($fields[$k] == 'lat' || $fields[$k] == 'Latitude'){
                        $lat = $value;
                    }

                    if($fields[$k] == 'long' || $fields[$k] == 'Longitude' ){
                        $long = $value;
                    }
                    if($fields[$k] == 'code' || $fields[$k] == 'schcd' ){
                        $school = School::where('code', '=', $value )->first();
                    }
                }
                // dd($fields);

                if($school){
                    $school->latitude = $lat;
                    $school->longitude =  $long;
                    $school->save();
                    $updated++;

                    if($importId){
                        $import->done = ++$currentRow;
                        $import->save();
                    }
                }else{
                    $wrongCode++;
                    continue;
                }
                $this->output->progressAdvance();

            }
            if($importId){
                $import->end = date('Y-m-d h-j-s');
                $import->save();
            }

            $this->output->progressFinish();

            $this->comment("Updated - " . $updated);
            $this->comment("Wrong school code (school not found) - " . $wrongCode);
        }
    }
}
