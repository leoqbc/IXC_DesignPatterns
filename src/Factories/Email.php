<?php

namespace Message\Factories;

use Message\Messages\Email as MessagesEmail;

// Factory Method
class Email
{
    public static function make(
        string $from, 
        string $to, 
        string $title
    ): MessagesEmail {
        $email = new MessagesEmail($from, $to);
        $email->setTitle($title);
        return $email;
    }
}