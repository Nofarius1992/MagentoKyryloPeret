<?php

namespace Zombie\Homework\Model;

use Magento\Framework\DataObjectFactory;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use Test\Homework\Model\ManagerInterface;

class TestParams
{
    private ManagerInterface $manager;
    private array $array;
    private string $string;
    private $init_parameter;
    private EventManagerInterface $eventManager;
    private DataObjectFactory $dataObjectFactory;

    public function __construct(
        ManagerInterface $manager,
        array            $array,
        string           $string,
        EventManagerInterface $eventManager,
        DataObjectFactory $dataObjectFactory,
        $init_parameter = null
    ) {
        $this->manager = $manager;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->array = $array;
        $this->string = $string;
        $this->init_parameter = $init_parameter;
        $this->eventManager = $eventManager;
    }

    public function getParams(string $configParam): array
    {

        $this->manager->setMessage('Сообщение измененное из ' . get_class($this));

        $params = [
            $this->manager,
            $this->array,
            $this->string,
            $this->init_parameter,
            'Config parameter' => $configParam
        ];

        $paramsObj = $this->dataObjectFactory->create([
            'data' => $params
        ]);

        $this->eventManager->dispatch('testparams_getparams_after', ['params' => $paramsObj]);

        return $paramsObj->getData();
    }

    public function getManager(): object
    {
        return $this->manager;
    }
}
