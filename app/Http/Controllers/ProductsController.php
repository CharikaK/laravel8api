<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products.view');
    }

    public function about(){
        return 'About the product';
    }
}
