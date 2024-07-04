<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datafield;

    /**
     * Create a new message instance.
     */
    public function __construct($datafield)
    {
        $this->datafield = $datafield;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from : new Address('bookings@store-name.ch', 'Restaurant Mialwali'),
            subject: 'New Reservation Mail',
        );
    }


    /**
     * Get the message content definition.
     */

    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
            with: [
                'datafield' => $this->datafield
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
