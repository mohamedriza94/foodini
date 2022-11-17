<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class orderPlacementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderNumber;
    public $orderPrice;
    public $orderQuantity;
    public $orderTotal;
    public $recipe_No;

    public function __construct($orderNumber,$orderTotal,$orderQuantity,$orderPrice,$recipe_No)
    {
        $this->orderNumber = $orderNumber;
        $this->orderTotal = $orderTotal;
        $this->orderQuantity = $orderQuantity;
        $this->orderPrice = $orderPrice;
        $this->recipe_No = $recipe_No;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Order Placement',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.orderPlacementMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
