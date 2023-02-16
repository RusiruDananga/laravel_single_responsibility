<?php

namespace App\Solid;

use App\Models\User;

class SaleReports
{
    public function between($start_date, $end_date)
    {
        // return User::whereBetween('created_at', [$start_date, $end_date])->latest()->get();
    }
}