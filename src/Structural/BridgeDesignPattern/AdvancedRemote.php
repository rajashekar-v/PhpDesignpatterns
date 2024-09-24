<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


class AdvancedRemote extends RemoteControl {

    public function togglePower()
    {
        return $this->device->powerOn();
    }

    public function setVolume($volume)
    {
        return $this->device->setVolume($volume);
    }

    public function mute() {
        return "Device muted.";
    }
}