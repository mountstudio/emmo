<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all()->random(8);
        return view('welcome', [
            'products' => $products,
        ]);
    }
}
