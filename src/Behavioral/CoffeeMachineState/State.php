<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

interface State{
   
    public function selectCoffee($coffeeType);

    public function dispense();

    
}






?>