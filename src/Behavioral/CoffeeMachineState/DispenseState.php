<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

class DispenseState implements State{

    private $coffeeMachine;
    private $coffeeType;

    public function __construct(CoffeeMachine $coffeeMachine,$coffeeType)
    {
        $this->coffeeMachine = $coffeeMachine;
        $this->coffeeType = $coffeeType;
        // This state is not directly used in the flow but could be included if needed
    }

    public function selectCoffee($coffeeType)
    {
        echo "Brewing in progress. Please wait until your coffee is dispensed.\n";
    }

    public function dispense()
    {
        echo "Dispensing $this->coffeeType. Enjoy your coffee!\n";
        // Transition to IdealState after dispensing the coffee
        $this->coffeeMachine->setState(new IdealState($this->coffeeMachine));
    }
    
}






?>