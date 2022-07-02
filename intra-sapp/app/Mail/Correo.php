<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;
    protected $contactName;
    protected $contactEmail;
    protected $contactMessage;
    protected $correocuenta;
    protected $nombre;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($correocuenta, $nombre)
    {
        //
        $this->correocuenta = $correocuenta;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layouts.mail.contact')->with([
            'correocuenta' => $this->correocuenta,
            'nombre' => $this->nombre,
        ]);
        //        return $this->view('emails/contact')->with(['contactName' =>$this->contactName,
        //                                                    'contactEmail' => $this->contactEmail,
        //                                                    'contactMessage' => $this->contactMessage]);

    }
}
