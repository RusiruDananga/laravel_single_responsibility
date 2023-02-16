<?php

namespace App\Solid;

use App\Solid\PaymentMethodInterface;

class PaypalPaymentMethod implements PaymentMethodInterface
{
    public function makePayment()
    {
        return "Paypal Payment";
    }
}