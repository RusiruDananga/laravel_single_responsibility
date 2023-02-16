<?php

namespace App\Solid;

use App\Solid\PaymentMethodInterface;

class StripePaymentMethod implements PaymentMethodInterface
{
    public function makePayment()
    {
        return "Stripe Payment";
    }
}