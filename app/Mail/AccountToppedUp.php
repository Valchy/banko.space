<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountToppedUp extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->from('example@example.com', 'Example')
                ->view('emails.orders.shipped');
    }
}
