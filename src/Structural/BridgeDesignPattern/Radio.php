<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


class Radio implements Device{

    public function powerOn()
    {
        return "Radio is Now On";
    }

    public function powerOff()
    {
        return "Radio is Now Off";
    }

    public function setVolume($volume)
    {
        return "Radio volume set to $volume";
    }
}