<?php
namespace Anonymous\Homework\Model;

use Test\Homework\Model\ManagerInterface;

class Manager implements ManagerInterface
{
    private $message;
    public function __construct()
    {
        $this->setMessage('Я сообщение по умолчанию');
    }
    public function getMessage(): string
    {
        return 'Сообщение из класса Anonymous\Homework\Model\Manager. Оно подставлено в VirtualType';
    }

    public function setMessage(string $message): string
    {
        return $this->message = $message;
    }
}
