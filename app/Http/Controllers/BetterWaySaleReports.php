<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BetterWaySaleReports extends Controller
{
    public function between(salesReportValidation $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $sales = DB::table('users')->whereBetween('created_at', [$start_date, $end_date])->latest()->get();
    }
}
