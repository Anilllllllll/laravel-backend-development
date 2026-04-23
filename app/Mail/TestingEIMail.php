<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestingEIMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Testing E I Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emailei',
            with: [
                'data' => $this->data   // pass full data
            ]
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('example1.pdf'))
                ->as('exam.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
