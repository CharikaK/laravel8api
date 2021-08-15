<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $id =7;
        $post = DB::table('posts')
            ->where('id',$id)
            ->get();
        dd($post);
        // return view('posts/index');
        // return view('posts.index'); Before Laravel 8
    }
}
