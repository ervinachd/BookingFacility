<?php

namespace App\Mail;

use App\Mail\SendEmailController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     
        return $this->greeting('Hello, '.Auth::user()->name)
        ->view('emailku')
        ->with(
         [
             'Book Status' => $this->booking->status,
         ]);
    }
}
