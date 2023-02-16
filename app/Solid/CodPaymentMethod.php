<?php

namespace App\Solid;

use App\Solid\PaymentMethodInterface;

class CodPaymentMethod implements PaymentMethodInterface
{
    public function makePayment()
    {
        return "Cash on Delivery mehtod";
    }
}