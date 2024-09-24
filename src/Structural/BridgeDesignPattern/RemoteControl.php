<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


abstract class RemoteControl {
    
    protected $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    abstract public function togglePower();

    abstract public function setVolume($volume);
}