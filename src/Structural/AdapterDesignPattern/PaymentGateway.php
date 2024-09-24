<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;

interface PaymentGateway{
    public function processPayment($amount);
}