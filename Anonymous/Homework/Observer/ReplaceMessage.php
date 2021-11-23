<?php

namespace Anonymous\Homework\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ReplaceMessage implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        $resultParams = $observer->getData('command_message');

        $resultParams->setData('new_message', 'This new my message!!!');
    }
}
