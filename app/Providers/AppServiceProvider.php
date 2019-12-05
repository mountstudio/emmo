<?php

namespace App\Providers;

use App\Category;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use mysql_xdevapi\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        View::composer('blocks.header', function ($view) {
//            $cartCount = new CartController();
//            $cartCount = $cartCount->count( \Illuminate\Support\Facades\Session::get('token') );
//            $view->with(['count' => $cartCount]);
//        });
    }
}
