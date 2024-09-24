<?php
namespace Rajashekar\Designpatterns\Structural\AdapterDesignPattern;


$paypal = new Paypal();
$stripe = new Stripe();

$paypalAdapter = new PaypalAdapter($paypal);
$stripeAdapter = new StripAdapter($stripe);

function makePayment(PaymentGateway $gateway, $amount) {
    echo $gateway->processPayment($amount) . PHP_EOL;
}

makePayment($paypalAdapter, 200);
makePayment($stripeAdapter, 300);