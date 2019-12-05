<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;
use PhpParser\Node\Expr\List_;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', [
           'brands' => $brands,
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $products = Product::Where('brand_id', $brand->id)->get();

        $subCategories = [];
        foreach ($products as $product) {
            $subCategories[] = $product->subcategory;
        }
        $subCategories = array_unique($subCategories, SORT_REGULAR);

        $categories = [];
        foreach ($subCategories as $subCategory)
        {
            $categories[] = $subCategory->category;
        }
        $categories = array_unique($categories, 0);

//        dd($categories, $subCategories, $products);

        return view('product.index', [
            'categories' => $categories,
            'brand' => $brand,
            'subCategories' => $subCategories,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
