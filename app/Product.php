<?php

namespace App;

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

    public function product_sizes() {
        return $this->hasMany(Product_size::class);
    }

    public function cart_products()
    {
        return $this->hasMany(Cart_product::class);
    }
}
