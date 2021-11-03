<?php

namespace Zombie\Homework\Model\TestParams;

use Mageplaza\HelloWorld\Helper\Data as ConfigParam;

class PluginAfter
{

    private ConfigParam $configParam;

    public function __construct(ConfigParam $configParam)
    {
        $this->configParam = $configParam;
    }

    public function afterGetParams($subject, $result): array
    {
        $result[] = 'Hi!@';
        $result['Config parameter1'] = $this->configParam->getGeneralConfig('enable');
        $result['Config parameter2'] = $this->configParam->getGeneralConfig('display_text');
        return $result;
    }
}
