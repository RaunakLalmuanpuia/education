<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;

class ExportCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exportCsv {type} {--match}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

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
        $filename = $this->getFilename('json');
        $file = file_get_contents($filename);

        $csvFileName = $this->getFilename('csv');
        $csvFile = fopen($csvFileName, 'w');
        foreach(json_decode($file) as $row){
            // var_dump($row);
            fputcsv($csvFile, array_values((array)$row));
            dd(array_values((array)$row));
        }
    }

    public function getFilename($fileType)
    {
        $type = $this->argument('type');
        $isMatch = $this->option('match');

        if($type == 'teacher')
            return (public_path() . '/' . $type . '_' . ($isMatch ? '' : 'non_') . 'matches.' . $fileType);
    }

    public function getCsvPath()
    {
        $type = $this->argument('type');
        $isMatch = $this->option('match');

        if($type == 'teacher')
            return (public_path() . '/' . $type . '_' . ($isMatch ? '' : 'non_') . 'matches.csv');        
    }
}
