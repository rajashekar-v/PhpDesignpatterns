<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


interface Device{
    public function powerOn();

    public function powerOff();

    public function setVolume($volume);
}