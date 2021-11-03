<?php

namespace Anonymous\Homework\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ReplaceTextParams implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $resultParams = $observer->getData('params');

        $resultParams->setData('new_param', 'param from observer');
//        $resultParams['new_param'] = 'param_from_observer';
    }
}
