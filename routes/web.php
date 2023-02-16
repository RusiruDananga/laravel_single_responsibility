<?php

use Illuminate\Support\Facades\Route;
use App\Solid\SaleReports;
use App\Solid\PDFExport;
use App\Solid\CsvExport;


use App\Solid\AreaCalculator;
use App\Solid\Rectangle;
use App\Solid\Circle;
use App\Solid\Triangle;

use App\Solid\PaymentService;
use App\Solid\StripePaymentMethod;
use App\Solid\PaypalPaymentMethod;
use App\Solid\CodPaymentMethod;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $saleReports = new SaleReports;

    $pdfExport = new PDFExport;

    $csvExport = new CsvExport;

    return $csvExport->export(
        $saleReports->between('1 jan 2022', '31 jan 2022')
    );

    // return view('welcome');
});

Route::get('/calculatearea', function() {

    $areaCalculator = new AreaCalculator;

    return $areaCalculator->totalArea(
        new Rectangle(10,20),
        new Rectangle(15,20),
        new Circle(15),
        new Triangle(15, 10),
    );
});

Route::get('/payment', function() {

    $paymentService = new PaymentService;

    return $paymentService->pay(
        // new StripePaymentMethod(),
        // new PaypalPaymentMethod(),
        new CodPaymentMethod(),
    );
});
