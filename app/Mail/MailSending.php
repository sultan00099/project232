<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSending extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var 
     */
    public $send;
     /** 
     *ч
     * @return void
     */
    public function __construct($send)
    {
        $this->send = $send;
    }

    /**
     * Build the message.
     *
     *  @return $this
     */
    public function build()
    {
        return $this->from('abdualievs47@gmail.com')->view('mail.sending')->text('mail.sending')->with(
            [
            'testVarOne' => '1',
            'testVarTwo' => '2'
        ]);
    }
}
