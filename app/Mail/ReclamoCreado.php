<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReclamoCreado extends Mailable
{
    use Queueable, SerializesModels;

    public $reclamo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reclamo)
    {
        $this->reclamo = $reclamo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('Nuevo Reclamo Registrado')
                      ->view('reclamaciones.vistacorreo')
                      ->with('reclamo', $this->reclamo);

        if (!empty($this->reclamo['adjuntar_documento'])) {
            $email->attach($this->reclamo['adjuntar_documento'], [
                'as' => 'documento.' . pathinfo($this->reclamo['adjuntar_documento'], PATHINFO_EXTENSION),
                'mime' => mime_content_type($this->reclamo['adjuntar_documento']),
            ]);
        }
        

        return $email;
    }
}
