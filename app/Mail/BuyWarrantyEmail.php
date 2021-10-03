<?php

namespace App\Mail;

use App\Models\Mobile_warranty;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuyWarrantyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $warranty;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mobile_warranty $mobile_warranty)
    {
        $this->warranty=$mobile_warranty;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.warrantyEmail',['warranty'=>$this->warranty]);
    }
}
