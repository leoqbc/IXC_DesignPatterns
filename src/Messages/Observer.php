<?php

// Observer, Strategy com Iterator
namespace Message\Messages;

use Message\Interfaces\CustomerMessage;

class Observer
{
    // array poderia ser um concrete Iterator
    // não precisamos neste momento
    public function __construct(
        protected array $messengers = []
    ) {
        # code...
    }

    // Strategy padroniza a interface CustomerMessage
    public function addMessenger(CustomerMessage $messenger)
    {
        $this->messengers[] = $messenger;
    }

    // Função de Observer, dispara o método para todos
    // os subs(objetos colocados em messengers)

    // Template Method de SendMessage
    public function sendMessage(string $message)
    {
        foreach ($this->messengers as $messenger) {
            $messenger->setMessage($message);
            $messenger->sendMessage();
        }
    }
}
