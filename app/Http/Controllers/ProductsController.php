<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product(){
        return view('product');
    }
    public function webDev(){
        return view('product.web-dev');
    }

    public function appDev(){
        return view('product.app-dev');
    }
}
