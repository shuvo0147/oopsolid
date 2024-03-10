<?php
// liskob substitution principle

class Vehicle
{
    public function start()
    {
        return 'Engine is Started';
    }

    public function accelerate()
    {
        return 'Start accelerating';
    }
}

class Car extends Vehicle
{

    public function openThunk()
    {
        return "Trunk opened";
    }
}


class ByCycle extends Vehicle
{
    public function ringBell()
    {
        return 'Bell ringing';
    }
}


function travel(Vehicle $vehicle)
{
    return $vehicle->accelerate();
}

$car = new Car();
echo travel($car);
echo '<br>';
$bycycle = new ByCycle();
echo travel($bycycle);


// interface segregation principle

// dependency inversion principle

interface PaymentGatewayInterface
{
    public function pay($amount);
}

class PaypalPayment implements PaymentGatewayInterface
{
    public function pay($amount)
    {
        echo 'Processing paypal payment of ' . $amount . ' amount';
    }
}

class StripePayment implements PaymentGatewayInterface
{
    public function pay($amount)
    {
        echo 'Procesing stripe payment of ' . $amount . ' amount';
    }
}


class PaymentProcessor
{
    public $payment;
    public function __construct(PaymentGatewayInterface $paymentGatewayInterface)
    {
        $this->payment = $paymentGatewayInterface;
    }

    public function processPayment($amount)
    {
        $this->payment->pay($amount);
    }
}


$paypalGateway = new PaypalPayment();
$stripeGareway = new StripePayment();

$paymentProcessPaypal = new PaymentProcessor($paypalGateway);
$paymentProcessStripe = new PaymentProcessor($stripeGareway);

$paymentProcessPaypal->processPayment(100);
$paymentProcessStripe->processPayment(150);