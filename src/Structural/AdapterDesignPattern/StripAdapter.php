<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;

class StripAdapter implements PaymentGateway{

    private $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }
    public function processPayment($amount)
    {
        return $this->stripe->charge($amount);
    }
}