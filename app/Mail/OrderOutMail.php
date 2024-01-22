<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class OrderOutMail extends Mailable
{
    use Queueable, SerializesModels;
    public $orderOut;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderOut)
    {
        $this->orderOut = $orderOut;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('web.Mail.orderOut', $this->orderOut);
    }
}
