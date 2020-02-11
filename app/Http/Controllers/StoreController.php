<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index() {
        return view('frontend.home');
    }

    public function shop() {
        return view('frontend.shop');
    }
}
