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
//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/add/book', 'CartController@add')->name('cart.add');
Route::get('/cart/delete/book', 'CartController@delete')->name('cart.delete');
Route::get('/cart/remove/book', 'CartController@remove')->name('cart.remove');
//End Cart


//Resources
Route::resources([
    'product' => 'ProductController',
    'brand' => 'BrandController',
]);
//End resources

Route::get('/products', 'Api\ProductController@index')->name('product.all');



