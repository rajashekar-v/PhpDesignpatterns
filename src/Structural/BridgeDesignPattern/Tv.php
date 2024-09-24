<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


class Tv implements Device{

    public function powerOn()
    {
        return "Tv is Now On";
    }

    public function powerOff()
    {
        return "Tv is Now Off";
    }

    public function setVolume($volume)
    {
        return "Tv volume set to $volume";
    }
}