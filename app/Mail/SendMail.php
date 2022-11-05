<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('notifs.name');   
        return $this->from('noreply@akasidigipro.com', 'PNUD OnLine DigiPro Plateforme') // L'expéditeur : DigiPro OnLine
                    ->subject($this->data['subject']) // Le sujet ->subject($this->data['subject']) 
                    ->attach($this->data['attach'])
                  
                    ->bcc("amzath.bouraima@gmail.com")  // 
                    ->view('emails.notifs'); // La vue 
    }
}
