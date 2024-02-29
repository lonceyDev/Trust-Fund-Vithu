<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    // public function __construct()
    // {
    //     $this->user = $data;
    // }
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Message',
            from:new Address('admin@test.com','VTF')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view:'emails.contact_message',
            markdown: 'emails.contact_message',
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
    public function build()
    {
        return $this->from('noreply@domain.com')
                ->markdown('emails.contact_message')
                ->with([
                        'subject' => $this->data['subject'],
                        'message' => $this->data['message'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'],
                        'name' => $this->data['name'],
                    ]);
        return $this->view('emails.contact_message');
    }

}
