<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Routet that returns a wrong view - GET - generate error
Route::get('/products',[ProductsController::class,'index']);

Route::get('/products/about',[ProductsController::class,'about']);


// Before Laravel 8 - this will not work on 8
//Route::get('/products', 'ProductsController@index');