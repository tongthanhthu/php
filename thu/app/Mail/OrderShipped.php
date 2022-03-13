<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $subject;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     * @param string  $subject
     * @return void
     */
    public function __construct(Order $order, string $subject)
    {
        $this->order = $order;
        $this->subject =  $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject($this->subject)
            ->view('welcome')
            ->with(['price' => $this->order->price]);
    }
}