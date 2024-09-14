<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

class CoffeeMachine{
    private $state;
    private $coffeeType;

    public function __construct()
    {
        $this->state = new IdealState($this);
    }

    public function setState(State $State)
    {
        $this->state = $State;
    }

    public function selectCoffee($coffeeType)
    {
        $this->coffeeType = $coffeeType;
        $this->state->selectCoffee($coffeeType);
    }

    public function dispense()
    {
        $this->state->dispense();
    }

}






?>