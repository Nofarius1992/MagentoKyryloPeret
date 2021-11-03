<?php

namespace Zombie\Homework\Model\TestParams;

class PluginAround
{
    public function aroundGetParams($subject, $proceed)
    {
        $result = $proceed();
        $result[] = 'My first around plugin';
        return $result;
    }
}
