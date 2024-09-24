<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;

class BasicRemote extends RemoteControl{

    public function togglePower()
    {
        return $this->device->powerOn();
    }

    public function setVolume($volume)
    {
        return $this->device->setVolume($volume);
    }
}