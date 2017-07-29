<?php

namespace App\Mail;

use App\OmiseAddress;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OmisePayment extends Mailable
{
    use Queueable, SerializesModels;

    public $mailuser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(OmiseAddress $mailuser)
    {
        $this->mailuser = $mailuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.omise.omisepayment');
    }
}
