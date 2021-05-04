<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel 8';
        $createdBy = 'Charika';
        
        
        // Compact ()
        // return view('products.view',compact('title','createdBy'));

        //with() - best when passing one variable
        return view('products.view')->with('title',$title)->with('createdBy',$createdBy);
    }

    public function about(){
        return 'About the product';
    }
}
