<?php

namespace Zalluq\Contactus\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->data = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contactus::contactus.email')->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'type' => $this->data['type'],
            'message' => $this->data['message']
        ]);
    }
}
