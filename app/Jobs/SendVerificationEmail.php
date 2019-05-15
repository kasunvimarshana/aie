<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Mail;
use App\Mail\EmailVerification;

class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $user = $this->user;
        $email = new EmailVerification($this->user);
        //Mail::to($this->user->email)->send($email);
        Mail::to('kasunvmail@gmail.com')->send(new EmailVerification($user));
        
        /*Mail::send($email, function ($m) use ($user) {
            $m->from('kasunvmail@gmail.com', 'Your Application');
            $m->to('kasunvmail@gmail.com', 'Kasun')->subject('Your Reminder!');
        });*/
    }
}
