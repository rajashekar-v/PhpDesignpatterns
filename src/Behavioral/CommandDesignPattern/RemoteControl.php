<?php 
namespace Rajashekar\Designpatterns\Behavioral\CommandDesignPattern;

class RemoteControl
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton() {
        if ($this->command) {
            $this->command->execute();
        }
    }

}