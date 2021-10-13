<?php

namespace Message\Messages;

use Message\Interfaces\CustomerMessage;

class SMS implements CustomerMessage
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

    // Implementação de SMS
    public function sendMessage(): bool
    {
        echo "Send SMS message: '$this->message' to: $this->to" . PHP_EOL;
        return true;
    }
}