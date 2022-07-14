<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $emailFrom;
    public $msg;
    public $subject;
    public $phone;

    /**
     * ContactUs constructor.
     * @param $name
     * @param $email
     * @param $msg
     */
    public function __construct($name, $subject, $phone, $emailFrom, $msg)
    {
        $this->name = $name;
        $this->emailFrom = $emailFrom;
        $this->msg = $msg;
        $this->subject = $subject;
        $this->phone = $phone;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact-us')
            ->subject('Contact Us');
    }
}
