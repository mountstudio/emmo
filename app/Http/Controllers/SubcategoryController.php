<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Subcategory $subcategory
     * @return Response
     */
    public function show(Subcategory $subcategory)
    {
        $products = Product::Where('subcategory_id', $subcategory->id)->get();

        $brands = [];
        foreach ($products as $product) {
            $brands[] = Brand::find($product->brand_id);
        }
        $brands = array_unique($brands, SORT_REGULAR);

        $subCategory = $products[0]->subcategory;
        $category = $products[0]->subcategory->category;

        return view('subcategory.index', [
            'category' => $category,
            'brands' => $brands,
            'subCategory' => $subCategory,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
