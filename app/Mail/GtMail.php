<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GtMail extends Mailable
{
    use Queueable, SerializesModels;
	public $total = 30;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
	{
		$adress = 'j.ngomnze@gabontelecom.ga';
		$name = 'Ignore Me';
		$subject = 'Kryptonit found';

		return $this->view('emails.gt-mail')
			->from($adress, $name)
			->cc($adress, $name)
			->bcc($adress, $name)
			->replyTo($adress, $name)
			->subject($subject)
			->attach('/var/www/gtdevautotasks/html/public/' . 'filetoattach.txt')
			;
	}
}
