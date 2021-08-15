<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $post=DB::select('select * from posts where id=7');
        $post=DB::select('select * from posts where id= ?', [7]);
        $post=DB::select('select * from posts where id= :id', ['id'=> 7]);
        dd($post);
        // return view('posts/index');
        // return view('posts.index'); Before Laravel 8
    }
}
