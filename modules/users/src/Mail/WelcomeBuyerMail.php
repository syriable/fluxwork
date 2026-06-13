<?php

declare(strict_types=1);

namespace Modules\Users\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Modules\Users\Models\Buyer;

class WelcomeBuyerMail extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public function __construct(public Buyer $buyer) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Welcome to :app', ['app' => config('app.name')]),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'users::mail.welcome-buyer',
            with: ['model' => $this->buyer],
        );
    }
}
