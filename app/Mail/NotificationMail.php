<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class NotificationMail extends Mailable
{
    public function __construct(
        public string $subjectLine,
        public string $heading,
        public string $body,
        public ?string $actionLabel = null,
        public ?string $actionUrl = null,
        public ?string $code = null,
    ) {
    }

    public function build()
    {
        return $this->subject($this->subjectLine)
            ->view('emails.notification');
    }
}
