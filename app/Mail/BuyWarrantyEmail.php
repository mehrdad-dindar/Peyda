<?php

namespace App\Mail;

use App\Models\Mobile_warranty;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuyWarrantyEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $warranty, $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mobile_warranty $mobile_warranty,User $user)
    {
        $this->warranty=$mobile_warranty;
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.warrantyEmail',
            [
                'warranty'=>$this->warranty,
                'user'=>$this->user
            ]);
    }
}
