<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\GtMail;
use Mail;

class SendGtMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gtmail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoie de mail via GT exchange';

    /**
     * Objet GtMail
     * @var GtMail
     */
    protected $mail;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(GtMail $mail)
    {
        parent::__construct();

        $this->mail = $mail;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Mail::to($this->argument('user'))->send(new GtMail);
        Mail::to('j.ngomnze@gabontelecom.ga')->send(new GtMail);
    }
}
