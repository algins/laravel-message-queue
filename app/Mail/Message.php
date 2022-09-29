<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public string $text
    ) {
    }

    public function build(): self
    {
        return $this->text('mail');
    }
}
