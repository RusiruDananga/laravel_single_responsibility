<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BetterWayCsvExport extends Controller
{
    public function export($data)
    {
        return 'csv';
    }
}
