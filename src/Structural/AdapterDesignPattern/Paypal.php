<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;

class Paypal {
    public function pay($amount)
    {
        return "Paid $$amount using PayPal.";
    }
}