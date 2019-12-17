<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
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
        $diametr = [];

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
//                    $diametr[$d] = str_replace('R', '', $d);
                    $diametr[$d] = $d;
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
//                    $diametr[$d] = str_replace('D', '', $d);
                    $diametr[$d] = $d;
                }
            }
        }

        asort($width);
        asort($profile);
        asort($diametr);

//        dd($sizes, $width, $profile, $diametr, $brands);
        $bestsellers = Product::bestsellers();
        $products = Product::all()->random(8);
        return view('welcome', [
            'products' => $products,
            'bestsellers' => $bestsellers,
            'brands' => $brands,
            'width' => $width,
            'profile' => $profile,
            'diametr' => $diametr,
        ]);
    }
}
