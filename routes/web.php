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

//Dashboard
Route::get('/dashboard/blog/create', 'DashboardController@blogCreate')->name('dashboard.blog.create');
Route::post('/dashboard/blog/store', 'DashboardController@blogStore')->name('dashboard.blog.store');

Route::get('/dashboard/product/create', 'DashboardController@productCreate')->name('dashboard.product.create');

Route::get('/dashboard/brand/create', 'DashboardController@brandCreate')->name('dashboard.brand.create');
Route::post('/dashboard/brand/store', 'DashboardController@brandStore')->name('dashboard.brand.store');
//Dashboard


//Resources
Route::resources([
    'product' => 'ProductController',
    'brand' => 'BrandController',
    'subcategory' => 'SubcategoryController',
    'blog' => 'BlogController',
]);
//End resources

Route::get('/products', 'Api\ProductController@index')->name('product.all');
Route::get('/products', 'Api\ProductController@index')->name('product.selectSubcategory');


Route::post('/image-upload', 'BlogController@upload');


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

Route::get('/figuration',function (){
    return view('figuration');
})->name('figuration');
