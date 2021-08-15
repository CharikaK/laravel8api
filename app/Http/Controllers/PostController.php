<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $post=DB::select('SELECT * FROM posts');
        dd($post);
        // return view('posts/index');
        // return view('posts.index'); Before Laravel 8
    }
}
