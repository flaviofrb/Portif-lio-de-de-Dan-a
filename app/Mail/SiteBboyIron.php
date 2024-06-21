<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SiteBboyIron extends Mailable
{
    use Queueable, SerializesModels;

   
    public $dadosFormulario;

    public function __construct($dadosFormulario)
    {
        $this->dadosFormulario = $dadosFormulario;
    }

    public function build()
    {
        return $this->markdown('emails.mensagem-envio');
    }
}
