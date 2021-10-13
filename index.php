<?php

require __DIR__ . '/vendor/autoload.php';

// Usando nossa LIB
use Message\Factories\Email;
use Message\Messages\Observer;
use Message\Messages\SMS;

$observer = new Observer();

// Factory Method
$emailMessage = Email::make(
    from:       'tumadjian@gmail.com', 
    to:         'leonardo@differdev.com',
    title:      'IXC Soft Rocks!'
);

$smsMessage = new SMS(
    from:       '+55 (11) 94444-4444', 
    to:         '+55 (49) 3199-2580'
);

// Live code! - implementar message de WhatsApp

// Strategy de Messengers | interface CustomerMessage
$observer->addMessenger($emailMessage);
$observer->addMessenger($smsMessage);

$observer->sendMessage('Um texto aqui e talz e tudo mais');