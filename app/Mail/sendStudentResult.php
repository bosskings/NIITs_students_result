<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendStudentResult extends Mailable
{
    use Queueable, SerializesModels;

    public $studentData;

    /**
     * Create a new message instance.
     */
    public function __construct($studentData)
    {
        $this->studentData = $studentData;
    }


    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Student Result')
                    ->view('components.emails')
                    ->with([ 'student'=> $this->studentData ]); // point to your Blade view

    }
}
