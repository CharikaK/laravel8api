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

        
        // Compact ()
        // return view('products.view',compact('title','createdBy'));

        //with() - best when passing one variable
        //return view('products.view')->with('title',$title)->with('createdBy',$createdBy);

        // with() - an array
        // return view('products.view')->with('data',$data);

        // directly to view
        return view('products.view', [
            'data'=>$data
        ]);
    }

    public function about(){
        return 'About the product';
    }

    // better to use the same parameter name everywhere for convenience
    public function showId($id){
        echo "reached";
        return $id;
    }

    public function showName($name){ 
    // public function showName($name,$id){     // this is also valid
          echo "marai";
        $data=[
            'iPhone' => 'iPhone',
            'Samsung' => 'Samsung'
        ];
        // return $data; // worked - display JSON array
        
        // return the value of the key. Key is passed by reqest GET data
        return view('products.view',
                    ['products'=>$data[$name] ?? 'Product ' .$name. ' does not exist']
                );
    }
}
