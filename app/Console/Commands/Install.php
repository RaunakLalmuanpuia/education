<?php

namespace TIST\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs the app. Performs migration, seeds and import data.';

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
        if(!$this->confirm('Do you wish to continue? This will erase all existing records [y|N]')){
            return;
        }
        $this->comment('Installing');
        $this->comment('=========================================');
        $this->comment('Migrating and Seeding');
        $this->comment('=========================================');
        Artisan::call('migrate:reset');
        Artisan::call('migrate', [
            '--seed' => true
            ]);
        $this->comment('=========================================');
        $this->comment('Importing Schools for each year');
        $this->comment('=========================================');
        $this->comment('2013');
        Artisan::call('import:school',[
            'location' => 'importData/school2012-13.csv'
            ]);
        $this->comment('2014');
        Artisan::call('import:school',[
            'location' => 'importData/school2013-14.csv'
            ]);
        $this->comment('2015');
        Artisan::call('import:school',[
            'location' => 'importData/school2014-15.csv'
            ]);
        $this->comment('2016');
        Artisan::call('import:school',[
            'location' => 'importData/school2015-16.csv'
            ]);
        $this->comment('=========================================');
        $this->comment('Importing Latlong after schools');
        $this->comment('=========================================');
        Artisan::call('import:latlong',[
            'location' => 'importData/latlong.csv'
            ]);
        $this->comment('=========================================');
        $this->comment('Importing enrollments.');
        $this->comment('=========================================');
        $this->comment('2013');
        Artisan::call('import:enrollment',[
            'year' => 2013,
            'location' => 'importData/13.csv'
            ]);
        $this->comment('2014');
        Artisan::call('import:enrollment',[
            'year' => 2014,
            'location' => 'importData/14.csv'
            ]);
        $this->comment('2015');
        Artisan::call('import:enrollment',[
            'year' => 2015,
            'location' => 'importData/15.csv'
            ]);
        $this->comment('2016');
        Artisan::call('import:enrollment',[
            'year' => 2016,
            'location' => 'importData/16.csv'
            ]);
        $this->comment('=========================================');
        $this->comment('Importing teachers data');
        $this->comment('=========================================');
        $this->comment('1st part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_1.csv'
            ]);
        $this->comment('2nd part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_2.csv'
            ]);
        $this->comment('3rd part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_3.csv'
            ]);
        $this->comment('4th part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_4.csv'
            ]);
        $this->comment('5th part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_5.csv'
            ]);
        $this->comment('6th part');
        Artisan::call('import:teacher',[
            'location' => 'importData/teacher_6.csv'
            ]);
        // $this->comment('7th part');
        // Artisan::call('import:teacher',[
        //     'location' => 'importData/teacher_7.csv'
        //     ]);
        // $this->comment('8th part');
        // Artisan::call('import:teacher',[
        //     'location' => 'importData/teacher_8.csv'
        //     ]);
        // $this->comment('9th part');
        // Artisan::call('import:teacher',[
        //     'location' => 'importData/teacher_9.csv'
        //     ]);
        // $this->comment('10th part');
        // Artisan::call('import:teacher',[
        //     'location' => 'importData/teacher_10.csv'
        //     ]);
        $this->comment('=========================================');
        $this->comment('Importing postings');
        $this->comment('=========================================');
        $this->comment('1st part');
        Artisan::call('import:posting',[
            'location' => 'importData/posting_1.csv'
            ]);
        $this->comment('2nd part');
        Artisan::call('import:posting',[
            'location' => 'importData/posting_2.csv'
            ]);
        $this->comment('3rd part');
        Artisan::call('import:posting',[
            'location' => 'importData/posting_3.csv'
            ]);
    }
}
