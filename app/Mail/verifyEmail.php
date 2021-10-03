<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verifyEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $hash;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$hash)
    {
        $this->user = $user;
        $this->hash=$hash;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verifyEmail',['hash'=>$this->hash]);
    }
}
