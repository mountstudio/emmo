<?php

namespace App\Http\Controllers;

use App\BestsellerProduct;
use App\Cart_product;
use App\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BestsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_products = Cart_product::all()->where('created_at', '>', Carbon::now()->subDays(30));
        $cart_products = $cart_products->groupBy('product_id')->map(function ($row) {
            return $row->sum('quantity');
        });

        $productBestsellers = [];
        foreach ($cart_products as $product_id => $cart_product) {
            $productBestsellers[$product_id] = $cart_product;
        }
        //сортируем массив по наибольшму количеству продаж то есть от большего к меньшему
        arsort($productBestsellers);

        $products = [];
        foreach ($productBestsellers as $key => $productBestseller) {
            $prod = Product::find($key);
            $products[$productBestseller] = $prod;
        }
        $allProducts = Product::limit(16 - count($products))->get();

        return view('bestsellers', [
            'products' => $products,
            'allProducts' => $allProducts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
