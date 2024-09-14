<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

class IdealState implements State{

    private $coffeeMachine;

    public function __construct(CoffeeMachine $coffeeMachine)
    {
        $this->coffeeMachine = $coffeeMachine;
    }

    public function selectCoffee($coffeeType)
    {
        echo "Coffee type '$coffeeType' selected. Preparing to brew.\n";
        $this->coffeeMachine->setState(new SelectState($this->coffeeMachine, $coffeeType));
    }

    public function dispense()
    {
        echo "Please select an Item before dispensing \n";
    }
    
}






?>