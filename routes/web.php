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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/parser', 'MyParserController@parser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome',function (){
    return view('welcome');
})->name('welcome');

Route::get('/warranty',function (){
    return view('warranty');
})->name('warranty');

Route::get('/contact_faq',function (){
    return view('contact_faq');
})->name('contact_faq');

Route::get('/subcategories',function (){
    return view('subcategories');
})->name('subcategories');

Route::get('/empty_basket',function (){
    return view('empty_basket');
})->name('empty_basket');

Route::get('/delivery_and_installation',function (){
    return view('delivery_and_installation');
})->name('delivery_and_installation');
