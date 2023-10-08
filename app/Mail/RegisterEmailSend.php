<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmailSend extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->details['subject'] = config('constants.email.register.subject');
        return $this->subject($this->details['subject'])
            ->view('emails.account_registration')
            ->from(getCustomEnv('MAIL_FROM_ADDRESS'));
    }
}
