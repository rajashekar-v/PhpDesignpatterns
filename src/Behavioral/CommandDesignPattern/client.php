<?php 
namespace Rajashekar\Designpatterns\Behavioral\CommandDesignPattern;

$light = new Light();

$turnOnCommand = new TurnOnLightCommand($light);
$turnOffCommand = new TurnOffLightCommand($light);

$remoteController = new RemoteControl();

$remoteController->setCommand($turnOnCommand);
$remoteController->pressButton();

$remoteController->setCommand($turnOffCommand);
$remoteController->pressButton();


