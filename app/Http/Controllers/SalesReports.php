<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesReports extends Controller
{
    public function export($start_date, $end_date, $format = 'csv')
    {
        $sales = DB::table('users')->whereBetween('created_at', [$start_date, $end_date])->latest()->get();

        if($format === 'pdf')
        {
            return 'pdf';
        }
        else if($format === 'json')
        {
            return 'json';
        }
        else
        {
            return 'csv';
        }
    }
}
