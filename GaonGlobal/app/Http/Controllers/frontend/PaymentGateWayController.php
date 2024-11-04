<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentGateWayController extends Controller
{
    public function paymentPage(){
        return view('frontend.paymentgateway.index');
    }
}
