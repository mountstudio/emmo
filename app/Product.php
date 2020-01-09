<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'description_image', 'specs','brand_id', 'subcategory_id',];

    protected $casts = [
        'sizes' => 'array',
    ];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function product_sizes() {
        return $this->hasMany(Product_size::class);
    }

    public function cart_products()
    {
        return $this->hasMany(Cart_product::class);
    }

    public static function bestsellers($limit = null)
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

        if ($limit) {
            $products = array_slice($products, 0, 5);
        }

        return $products;
    }
}
