<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Category;
use App\Product;
use App\Product_size;
use App\Size;
use App\Subcategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function searchProduct(Request $request)
    {
        $full_size = $request->width.'/'.$request->profile.$request->diameter;
//        $full_size = '255/55ZR17';
//        $full_size = 'P275/35ZR18';
        $size =  Size::where('full_size', $full_size)->get()->first();
        $products = collect();
        if (!empty($size))
        {
//            dd($size);
            $product_sizes = Product_size::where('size_id', $size->id)->get();
            if ($priceFrom = $request->priceFrom) {
                $product_sizes = $product_sizes->where('price', '>', $priceFrom);
            }
            if ($priceTo = $request->priceTo) {
                $product_sizes = $product_sizes->where('price', '<', $priceTo);
            }
            foreach ($product_sizes as $key => $product_size)
            {
                if ($request->brand_id == 'Choose option') {
                    if (!empty(Product::where('id', $product_size->product_id)->get())) {
                        $products = $products->merge(Product::where('id', $product_size->product_id)->get());
                    }
                } else {
                    if (!empty(Product::with('product_sizes')->where('id', $product_size->product_id)->where('brand_id', $request->brand_id)->get()->first()))
                    {
                        $products = $products->merge(Product::where('id', $product_size->product_id)->where('brand_id', $request->brand_id)->get());
                    }
                }
            }
        }
        $brand = '';
        if ($request->brand_id == 'Choose option')
        {
            $brand = $request->brand_id;
        }
        else
        {
            $brand = Brand::find($request->brand_id);
            $brand = $brand->name;
        }
        return view('search.search_result', [
            'products' => $products,
            'brand' => $brand,
            'size' => $size,
        ]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product', ['product' => $product,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->brand == null ||
            $request->name == null ||
            $request->sizeR == null ||
            $request->full_size == null ||
            $request->serv_desc == null ||
            $request->description == null ||
            $request->category == null ||
            $request->subcategory == null ||
            empty($request->product_image))
        {
            $this->validate($request, [
                'brand' => 'required',
                'name' => 'required',
                'sizeR' => 'required',
                'full_size' => 'required',
                'serv_desc' => 'required',
                'description' => 'required',
                'category' => 'required',
                'subcategory' => 'required',
                'product_image' => 'required',
            ]);
        }
        else
        {
            //сохранение продукта
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->brand_id = $request->brand_id;
            $product->subcategory_id = $request->subcategory_id;
            $productImageName = uniqid().'.jpg';
            Image::make($request->product_image)->save(public_path('img/'. $productImageName ), 40);
            $product->product_image = $productImageName;
            $product->save();
            $product = Product::all()->where('name', $request->name)
                                        ->where('description', $request->description)
                                        ->where('brand_id', $request->brand_id)
                                        ->where('subcategory_id', $request->subcategory_id)
                                        ->where('product_image', $productImageName);
            //сохранение продукта

            //сохранение размеров
            $size = Size::all()->where('number_size', $request->sizeR)
                                ->where('full_size', $request->full_size)
                                ->where('serv_desc', $request->serv_desc);
            if (empty($size))
            {
                $size->number_size = $request->sizeR;
                $size->full_size = $request->full_size;
                $size->serv_desc = $request->serv_desc;
                $size->save();
                $size = Size::all()->where('number_size', $request->sizeR)
                    ->where('full_size', $request->full_size)
                    ->where('serv_desc', $request->serv_desc);
            }
            $product_size = new Product_size();
            $product_size->product_id = $product->id;
            $product_size->size_id = $size->id;
            $product_size->save();
            //сохранение размеров

            return redirect()->back();
        }
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $brand = Brand::find($product->brand_id);

        $productSizes = [];
        foreach ($product->product_sizes as $product_size) {
            $productSizes[] = $product_size;
        }

        $sizes = [];
        foreach ($productSizes as $productSize)
        {
            $sizes[] = $productSize->size;
        }

        $products = Product::all()->random(8);

        return view('product.show', [
            'brand' => $brand,
            'product' => $product,
            'sizes' => $sizes,
            'sames' => $products,
        ]);
    }

    public function selectSize(Size $size)
    {
        return response()->json($size);
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

    public function datatable(Request $request)
    {
        return view('admin.products.index', [
            'products' => Product::all(),
        ]);
    }

    public function datatableData(Request $request)
    {
        $products = Product::with('sizes');
        return DataTables::of($products)->addColumn('sizes', function ($model) {
            return $model->sizes->map(function($size) {
                return str_limit($size->full_size, 30, '...');
            })->implode(", ");
        })
            ->toJson();
    }
}
