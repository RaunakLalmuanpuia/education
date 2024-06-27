<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use TIST\Models\School;
use TIST\Models\School\Statistics\Statistic;
use TIST\Models\Import;

class ImportSchools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:school {location} {importId=0}';

    protected $year;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import school information from RMSA csv dump';

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
    public function handle()
    {
        // $this->year = $this->argument('year');
        $this->imported = 0;
        $this->existing = 0;
        $this->existingUpdated = 0;
        $this->error = 0;

        $this->info('#############################################');
        $this->comment('###########Importing school data#############');
        $this->info('#############################################');

        $q = file($this->argument('location'));
        $importId = $this->argument('importId');
        $this->output->progressStart( count($q) - 1 ); //minus header row
        $handle = fopen($this->argument('location'), 'r');

        $total = count($q) - 1;
        $fields = array();
        $currentRow = 0;

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

                $school = [];
                foreach ($row as $k=>$value) {
                    $school[$fields[$k]] = $value;
                }
                $this->importRow($school);
                $this->output->progressAdvance();
                if($importId){
                    $import->done = ++$currentRow;
                    $import->save();
                }
            }
            if($importId){
                $import->end = date('Y-m-d h-j-s');
                $import->save();
            }
        }
        $this->output->progressFinish();
        $this->comment('imported - ' . $this->imported);
        $this->comment('existing - ' . $this->existing);
        $this->comment('existingUpdated - ' . $this->existingUpdated);
        $this->comment('error - ' . $this->error);
    }

    private function importRow($schoolProperties)
    {
        $school = School::firstOrNew(['code' => $schoolProperties['schcd']]);
        if($school->exists){
            $this->existing++;
        }
        foreach($school->propertiesFromUdise() as $key=>$val){
            if(isset($schoolProperties[$val]) && $schoolProperties[$val]){
                $school->$key = $schoolProperties[$val];
            }
        }
        $school->save();
    }
}
