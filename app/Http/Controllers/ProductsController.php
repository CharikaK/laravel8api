<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel 8';
        $createdBy = 'Charika';
        
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        return view('products.view')->with('data',$data);
        // Compact ()
        // return view('products.view',compact('title','createdBy'));

        //with() - best when passing one variable
        //return view('products.view')->with('title',$title)->with('createdBy',$createdBy);
    }

    public function about(){
        return 'About the product';
    }
}
