<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SplSubject;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;
     
    public $subject="Informacion de Contacto";
  
   
    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->view('mails.contacto');
    }
}
