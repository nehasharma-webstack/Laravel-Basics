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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
    //return "Contact";
    //return ["name"=>"laptop","price"=>10000];
});

Route::get('/aboutus',function(){
    return view('aboutus');
});

Route::get('/products',function(){
    $product = ["name"=> "Laptop", "brand"=>"Dell", "price"=>20000];
    return view('products',$product);
});

Route::get('/signup',function(){
    return view('signup');
});


