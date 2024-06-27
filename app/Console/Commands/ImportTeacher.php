<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class ImportTeacher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importTeacher';

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
        $org = $this->choice('Which organization?', ['RMSA', "Directorate"], false);
dd('asd');
        Model::unguard();
        
        if($org){
            $file = public_path() . '//old_data//' . $org . '.csv';

            $teachers = [];
            $teacher = [];
            $cols = [];
            
            $i = 0;

            /**
             * Read the csv file
             */
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
                        $teachers[] = $teacher;
                    }
                }

                \DB::table('teachers_from_' . strtolower($org))->insert($teachers);
                fclose($handle);
            }
            // DB::table('users')->insert([
            //     'name' => str_random(10),
            //     'email' => str_random(10).'@gmail.com',
            //     'password' => bcrypt('secret'),
            // ]);
        }

        Model::reguard();
    }
}
