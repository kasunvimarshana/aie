<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        /*
        return $this->view('email.email')->with([
            'remember_token' => $this->user->remember_token
        ]);
        */
        
        return $this->from('kasunvmail@gmail.com')
            ->view('email.email')
            //->text('email.email')
            ->with(['remember_token' => $this->user->remember_token]);
            /*
            ->attach(public_path('/images').'/demo.jpg', [
                'as' => 'demo.jpg',
                'mime' => 'image/jpeg',
            ])
            */
    }
}
