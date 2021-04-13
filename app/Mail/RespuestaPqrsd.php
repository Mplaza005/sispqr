<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class RespuestaPqrsd extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Mensaje recibido";
    public $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $correo = $request->all(); 
        
        return $this->view('pqrsd.answer', compact('correo'));
    }
}
