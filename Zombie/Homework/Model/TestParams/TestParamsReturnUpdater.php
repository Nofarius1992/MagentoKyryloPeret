<?php

namespace Zombie\Homework\Model\TestParams;

use Mageplaza\HelloWorld\Helper\Data as ConfigParam;
use Zombie\Homework\Model\TestParams;

class TestParamsReturnUpdater
{

    private ConfigParam $configParam;

    public function __construct(ConfigParam $configParam)
    {
        $this->configParam = $configParam;
    }

    public function afterGetParams(\Zombie\Homework\Model\TestParams $subject, array $result): array
    {
        $result[] = 'Hi!@';
        $result['Config parameter1'] = $this->configParam->getGeneralConfig('enable');
        $result['Config parameter2'] = $this->configParam->getGeneralConfig('display_text');
        return $result;
    }

    public function beforeGetParams(TestParams $subject, string $configParam)
    {
        $configParam = 'Go';
        return [$configParam];
    }

    public function aroundGetParams(\Zombie\Homework\Model\TestParams $subject, callable $proceed)
    {
        return $proceed('AroundPlugin');
    }
}
