<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserEmailConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    protected $listen = [
        'Illuminate\Mail\Events\MessageSending' => [
            'App\Listeners\LogSendingMessage',
        ],
        'Illuminate\Mail\Events\MessageSent' => [
            'App\Listeners\LogSentMessage',
        ],
    ];
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@epicschool.io','NO REPLY')
                    ->subject('Email Confirmation')
                    ->view('emails.UserEmailConfirmation')
                    ->with(['first_name' => $this->data['first_name'],
                            'email' => $this->data['email'],
                            'email_confirmation_token' => $this->data['email_confirmation_token'],
                        ]);
    }
}
