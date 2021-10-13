<?php

namespace Message\Messages;

use Message\Interfaces\CustomerMessage;

class Email implements CustomerMessage
{
    // PHP 8 - Property constructor promotion
    public function __construct(
        protected string $from,
        protected string $to
    ) {
        // ...
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    // Implementação de email
    public function sendMessage(): bool
    {
        echo "Send email message: '$this->message' to: $this->to" . PHP_EOL;
        return true;
    }
}