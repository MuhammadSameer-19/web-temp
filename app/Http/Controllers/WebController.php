<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home()
    {
        return view('web.home');
    }

    public function shop()
    {
        return view('web.product');
    }

    public function contact()
    {
        return view('web.contact');
    }
    public function order()
    {
        return view('web.order');
    }
    public function detail()
    {
        return view('web.product-detail');
    }
}

