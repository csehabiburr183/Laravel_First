<?php

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

//Route::get('/home', function(){
////    return view('hello')->with('hi','this is some hi text');
//    return view('hello')->withemail('hello@habibur.xyz');
//});

Route::get('/home', function(){
//    return view('hello')->with('hi','this is some hi text');
    return view('hello');
});

Route::get('/contact', function(){
    return view('contact');
});