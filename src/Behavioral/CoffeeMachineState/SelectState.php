<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

class SelectState implements State{

    private $coffeeMachine;
    private $coffeeType;

    public function __construct(CoffeeMachine $coffeeMachine,$coffeeType)
    {
        $this->coffeeMachine = $coffeeMachine;
        $this->coffeeType = $coffeeType;
        echo "Coffee type '$coffeeType' is being prepared.\n";
    }

    public function selectCoffee($coffeeType)
    {
        echo "Coffee type '$coffeeType' already selected. Please dispense the current coffee.\n";
        
    }

    public function dispense()
    {
        echo "Dispensing $this->coffeeType. Enjoy your coffee!\n";
        // Transition to IdealState after dispensing the coffee
        $this->coffeeMachine->setState(new DispenseState($this->coffeeMachine,$this->coffeeType));
    }
}






?>