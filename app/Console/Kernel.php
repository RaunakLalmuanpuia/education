<?php

namespace TIST\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // \TIST\Console\Commands\Inspire::class,
        // \TIST\Console\Commands\Import::class,
        // \TIST\Console\Commands\ImportTeacher::class,
        // \TIST\Console\Commands\ImportFromExisting::class,
        // \TIST\Console\Commands\Compare::class,
        // \TIST\Console\Commands\CompareDb::class,
        // \TIST\Console\Commands\ExportCsv::class,
        \TIST\Console\Commands\Install::class,
        \TIST\Console\Commands\ImportTeacherFinal::class,
        \TIST\Console\Commands\ImportSchools::class,
        \TIST\Console\Commands\ImportEnrollment::class,
        \TIST\Console\Commands\ImportLatlong::class,
        \TIST\Console\Commands\ImportPostings::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
    }
}
