<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $name;
    protected $messages;
    public function __construct($name, $messages)
    {
        $this->name = $name;
        $this->messages= $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM', ''))
        ->subject("From Contact us")
        ->view('emails.contactus')
        ->with([
            'name' =>  $this->name,
            'messages'=> $this->messages
        ]);
    }
}
