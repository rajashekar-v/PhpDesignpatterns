<?php

namespace Rajashekar\Designpatterns\Structural\BridgeDesignPattern;


$tv = new Tv();
$radio = new Radio();

$basicRemote = new BasicRemote($tv);
$advancedRemote = new AdvancedRemote($radio);


function controlDevice(RemoteControl $remoteControl)
{
    echo $remoteControl->togglePower(). PHP_EOL;
    echo $remoteControl->setVolume(5). PHP_EOL;
}

controlDevice($basicRemote); 
controlDevice($advancedRemote);