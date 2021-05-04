<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routet that returns a view - GET
Route::get('/', function () {
    return view('welcome');
});

// Route returns message = echo - GET
Route::get('/users',function(){
    return 'Welcome to users GET';
});

// Route returns an ARRAY - GET
Route::get('/users',function(){
    return ['PHP','HTML','LARAVEL'];
});

// Route returns an JSON - GET
Route::get('/users',function(){
    return response()->json([
        'name'=>'Dary',
        'course' =>'Laravel Biginners to Advanced'
    ]);
});

// Route redirect to home - GET
Route::get('/users',function(){
    return redirect('/');
});
// Routet that returns a wrong view - GET - generate error
Route::get('/', function () {
    return view('home');
});