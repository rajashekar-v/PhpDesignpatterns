<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;

class PaypalAdapter implements PaymentGateway{

    private $paypal;

    public function __construct(Paypal $paypal)
    {
        $this->paypal = $paypal;
    }
    public function processPayment($amount)
    {
        return $this->paypal->pay($amount);
    }
}