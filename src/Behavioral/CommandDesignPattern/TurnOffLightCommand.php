<?php

namespace Rajashekar\Designpatterns\Behavioral\CommandDesignPattern;

use Rajashekar\Designpatterns\Behavioral\CommandDesignPattern\Command;

class TurnOffLightCommand implements Command
{
    private $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function execute()
    {
        $this->light->turnOff();
    }
}