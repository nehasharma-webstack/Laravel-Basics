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

    $name = request('n');
    $code = request('c','ZERO');
    return view('aboutus',[
        'name'=>$name,
        'code'=>$code
    ]);
});

Route::get('/products/{name?}/{brand}',function($name='jj',$brand='dummy'){
    $product = [
    ["name"=> "Laptop", "brand"=>"Dell", "price"=>50000],
    ["name"=> "Mobile", "brand"=>"Mi", "price"=>40000],
    ["name"=> "Tablet", "brand"=>"Apple", "price"=>70000]
];
    return view('products',[
        'products'=>$product,
        'n'=>$name,
        'b'=>$brand
    ]);
});

Route::get('/signup',function(){
    return view('signup');
});


