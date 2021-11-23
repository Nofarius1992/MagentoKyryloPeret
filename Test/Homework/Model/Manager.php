<?php

namespace Test\Homework\Model;

class Manager implements ManagerInterface
{
    private $message;
    public function __construct()
    {
        $this->setMessage('Я сообщение по умолчанию');
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): string
    {
        return $this->message = $message;
    }
}
