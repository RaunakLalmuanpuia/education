<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;

class Compare extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'compare';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';
    protected $progress;
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
        // $model = new \TIST\Models\School;
        // $allTeachers = $model->all();
        // $count = $allTeachers->count();
        // $this->progress = $this->getHelperSet()->get('progress');
        
        // $this->progress->start($this->getOutput(), $count);
        // foreach ($allTeachers as $key => $value) {
        //     $value->dateofbirth = date('Y-m-d' , strtotime($value->dob));
        //     $value->save();
        //     $this->progress->advance();
        // }
        // $this->progress->finish();

        // exit;
        $this->comment('Making arrays from csv.');
        $this->comment('=========================================');

        $rmsa = $this->makeArrayFromFile('RMSA');
        $this->info('RMSA has ' . count($rmsa) . ' rows');
        
        $directorate = $this->makeArrayFromFile('Directorate');
        $this->info('RMSA has ' . count($directorate) . ' rows');

        $this->comment('Made arrays for RMSA and Directorate');
        $this->comment('=========================================');
        $this->comment('Comparing RMSA rows with Directorate rows');
        $this->comment('=========================================');

        $matches = [];
        $directorate_non_match = [];

        $csvFileName = $this->getFilename('teacher', true, 'csv');
        $csvFile = fopen($csvFileName, 'w');

        $this->progress = $this->getHelperSet()->get('progress');
        
        $this->progress->start($this->getOutput(), count($rmsa));
        
        foreach($rmsa as $key => $row){

            $match = array_first($directorate, function($key, $value) use ($row)
            {
                return ($this->minifyName($value['teachername']) == $this->minifyName($row['tchname']))
                    && (strtotime($value['dob']) == strtotime($row['dob']));
            });


            if($match){
                $matches[] = $match;
                fputcsv($csvFile, array_values($match));
            }else{
                $non_matches = $row;
            }

            $this->progress->advance();
        }

        $this->progress->finish();

        \File::put( $this->getFilename('teacher', true, 'json'), json_encode($matches));
        \File::put( $this->getFilename('teacher', false, 'json'), json_encode($non_matches));

        exit;
    }

    public function makeArrayFromFile($type)
    {
        $file = public_path() . '//old_data//'.$type.'.csv';
        $arr = [];
        $i = 0;
        $cols = [];

        if (($handle = fopen($file, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle)) !== FALSE)
            {
                if($i++ == 0){
                    foreach($row as $columnName){
                        $cols[] = $columnName;
                    }
                }else{

                    foreach($cols as $key => $columnName){
                        if( ( $columnName == 'tchname' || $columnName == 'teachername') || $columnName == 'dob' || $columnName == 'tid')
                            $teacher[$columnName] = $row[$key];
                        else
                            continue;
                    }
                    $arr[] = $teacher;
                }
            }

            fclose($handle);
        }
        return $arr;
    }

    private function minifyName($name)
    {
        return str_replace(' ', '.', trim(strtolower($name)));
    }

    public function getFilename($type, $isMatch, $fileType)
    {
        if($type == 'teacher')
            return (public_path() . '/' . $type . '_' . ($isMatch ? '' : 'non_') . 'matches.' . $fileType);
    }
}
