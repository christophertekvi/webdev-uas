<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('/checkout',[
            "title" => "Checkout"
        ]);
    }

    // public function
}
