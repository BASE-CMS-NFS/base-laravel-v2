<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerifikasi extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$url)
    {
        $this->email    = $email;
        $this->url      = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject('Verifikasi Account')
                    ->markdown('template_email.email_confirmasi', 
                        [
                            'email'       => $this->email, 
                            'link'        => $this->url 
                         ]);
    }
}
