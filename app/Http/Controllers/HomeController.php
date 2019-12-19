<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Product_size;
use App\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::all();
        $sizes = Size::all();
        $width = [];
        $profile = [];
        $diameter = [];

        foreach ($sizes as $key => $size)
        {
            if ( strpos($size->full_size, '/') != false)
            {
                if (strpos($size->full_size, 'R') != false)
                {
                    $w = strstr($size->full_size, '/', $size->full_size);
                    $width[$w] = $w;
                    $d = strstr($size->full_size, 'R');
                    $repWidth = str_replace($w, '', $size->full_size);
                    $repWidth = str_replace('/', '', $repWidth);
                    $p = str_replace($d, '', $repWidth);
                    $profile[$p] = $p;
//                    $diameter[$d] = str_replace('R', '', $d);
                    $diameter[$d] = $d;
                }
                else if (strpos($size->full_size, 'D') != false)
                {
                    $w = strstr($size->full_size, '/', $size->full_size);
                    $width[$w] = $w;
                    $d = strstr($size->full_size, 'D');
                    $repWidth = str_replace($w, '', $size->full_size);
                    $repWidth = str_replace('/', '', $repWidth);
                    $p = str_replace($d, '', $repWidth);
                    $profile[$p] = $p;
//                    $diameter[$d] = str_replace('D', '', $d);
                    $diameter[$d] = $d;
                }
            }
        }

        asort($width);
        asort($profile);
        asort($diameter);

//        dd($sizes, $width, $profile, $diametr, $brands);
        $bestsellers = Product::bestsellers();
//        $products = Product::all()->random(8);
        $product_sizes = Product_size::all()->random(8);
        $products = [];
        foreach ($product_sizes as $ps)
        {
            $products[] = Product::find($ps->product_id);
        }
//        dd($products, $product_sizes, $prod);
        return view('welcome', [
            'products' => $products,
            'bestsellers' => $bestsellers,
            'brands' => $brands,
            'width' => $width,
            'profile' => $profile,
            'diameter' => $diameter,
        ]);
    }
}
