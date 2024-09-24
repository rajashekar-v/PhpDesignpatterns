<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;

class Stripe {
    public function charge($amount)
    {
        return "Paid $$amount using Stripe.";
    }
}