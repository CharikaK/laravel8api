<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;


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

// Databases and migrations
Route::get('/posts',[PostController::class,'index']);

// branch - views
Route::get('/', [PagesController::class,'index'] );
Route::get('/about', [PagesController::class,'about']);
// -----------

// Route that returns a wrong view - GET - generate error
// to get all the products
Route::get('/products',
    [ProductsController::class,'index'])->name('procuts');

Route::get('/products/about',[ProductsController::class,'about']);
// Before Laravel 8 - this will not work on 8
//Route::get('/products', 'ProductsController@index');

// GET - get the details of the id. Eg: prodcuts/1
// Route::get('products/{id}', [ProductsController::class, 'showId']);

// GET - check for a valid id 
// [0-9]+ - more than one number
//Route::get('products/{id}', [ProductsController::class, 'showId'])->where('id','[0-9]+');

// GET - check for a valid string id 
// [a-zA-Z]+ - more than one character
//Route::get('products/{id}', [ProductsController::class, 'showId'])->where('id','[a-zA-Z]+');

// GET - check for a valid integer/string id 
Route::get('products/{id}', 
            [ProductsController::class, 'showId'])->where(
                [
                    'id'   =>'[a-zA-Z]+',
                    'id'   =>'[0-9]+'
                ]
);

// GET - check for a valid multiple parameters
// ** there MUST be both parameters inputted within the URL
// Otherwise it displays 404

Route::get('products/showName/{name}/{id}', 
            [ProductsController::class, 'showName'])->where(
                   [
                       'name'   =>'[a-zA-Z]+',
                       'id'     =>'[0-9]+'
                   ] 
                );

// ** GET - to use either {id} or {name} as parameters, then better to have two functions


