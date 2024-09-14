<?php 
namespace Rajashekar\Designpatterns\Behavioral\CoffeeMachineState;

$coffeeMachine = new CoffeeMachine();
$coffeeMachine->selectCoffee('Latte');
$coffeeMachine->dispense();

?>