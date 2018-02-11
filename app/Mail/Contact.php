<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject_info;
    public $message_info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject_info, $message_info)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject_info = $subject_info;
        $this->message_info = $message_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info-no-reply@geneticsoftware.net')
               ->subject('Mensaje de información')
               ->view('emails.contact');
    }
}
