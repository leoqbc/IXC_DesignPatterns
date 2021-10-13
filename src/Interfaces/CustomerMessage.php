<?php

namespace Message\Interfaces;

// Template Method
interface CustomerMessage
{
    // Setup
    public function __construct(
        string $from,
        string $to
    );

    // Action
    public function sendMessage(): bool;
}