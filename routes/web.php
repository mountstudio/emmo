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

Route::get('/', 'HomeController@index')->name('welcome');
//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/add/book', 'CartController@add')->name('cart.add');
Route::get('/cart/delete/book', 'CartController@delete')->name('cart.delete');
Route::get('/cart/remove/book', 'CartController@remove')->name('cart.remove');
//End Cart


// Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('product', 'ProductController')->except(['index', 'show']);
    Route::get('/products', 'ProductController@datatable')->name('product.datatable');
    Route::get('/products/datatable', 'ProductController@datatableData')->name('product.datatable.data');
    Route::resource('order', 'CartController')->except('index', 'show');
    Route::get('/order', 'CartController@datatable')->name('order.datatable');
    Route::get('/order/datatable', 'CartController@datatableData')->name('order.datatable.data');
    Route::resource('size', 'SizeController')->except(['index', 'show']);
    Route::resource('brand', 'BrandController')->except(['index', 'show']);
    Route::resource('bid', 'BidController')->except(['index', 'show']);
    Route::resource('subcategory', 'SubcategoryController')->except(['index', 'show']);
    Route::resource('blog', 'BlogController')->except(['index', 'show']);
    Route::resource('bestsellers', 'BestsellerController')->except(['index', 'show']);
    Route::get('/blog', 'BlogController@datatable')->name('blog.datatable');
    Route::get('/blog/datatable', 'BlogController@datatableData')->name('blog.datatable.data');
    Route::get('/bid', 'BidController@datatable')->name('bid.datatable');
    Route::get('/bid/datatable', 'BidController@datatableData')->name('bid.datatable.data');
//Dashboard
    Route::get('/dashboard/blog/create', 'DashboardController@blogCreate')->name('dashboard.blog.create');
    Route::post('/dashboard/blog/store', 'DashboardController@blogStore')->name('dashboard.blog.store');
});
// End Admin Routes




Route::get('/dashboard/product/create', 'DashboardController@productCreate')->name('dashboard.product.create');

Route::get('/dashboard/brand/create', 'DashboardController@brandCreate')->name('dashboard.brand.create');
Route::post('/dashboard/brand/store', 'DashboardController@brandStore')->name('dashboard.brand.store');
//Dashboard

//Resources
Route::resource('product', 'ProductController')->only(['index', 'show']);
Route::resource('brand', 'BrandController')->only(['index', 'show']);
Route::resource('subcategory', 'SubcategoryController')->only(['index', 'show']);
Route::resource('blog', 'BlogController')->only(['index', 'show']);
Route::resource('bestsellers', 'BestsellerController')->only(['index', 'show']);
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



Route::get('/about',function (){
    return view('about');
})->name('about');


Route::get('/serach/product', 'ProductController@searchProduct')->name('search.product');
Route::get('/bid/store', 'BidController@store')->name('bid.store');

Route::get('/post/{id}', 'BlogController@post_show')->name('blog.post');

