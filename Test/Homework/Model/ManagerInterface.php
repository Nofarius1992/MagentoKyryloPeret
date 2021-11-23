<?php

namespace Test\Homework\Model;

interface ManagerInterface
{
    public function __construct();

    public function getMessage(): string;

    public function setMessage(string $message);
}
