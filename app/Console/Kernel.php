<?php

namespace App\Console;

use App\Console\Commands\everyMinute;
use Carbon\Carbon;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        // $schedule->call(function () {
        //     DB::table('test')->delete();
        // })->daily();

        $schedule->command('daily:message')
            ->everyMinute()
            ->appendOutputTo('scheduler.log')
            ->emailOutputTo('info@dan.com');



            // ->onSuccess(function () {
            //     $email = new DemoEmail();
            //     Mail::to('youremail@example.com')->send($email);
            // });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
