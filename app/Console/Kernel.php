<?php

namespace App\Console;

use App\Mail\GtMail;
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
        Commands\SendGtMails::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        /*$schedule->command(GtMail::class, ['--force'])
            ->everyMinute()
            ->appendOutputTo('outputMailSend.txt');*/
        /*$schedule->call(
            function(){
                Mail::to('j.ngomnze@gabontelecom.ga')->send(new GtMail);
            })
        ->everyMinute()
        ->appendOutputTo('outputMailSend.txt');*/
         $schedule->command('gtmail:send')
                  ->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
