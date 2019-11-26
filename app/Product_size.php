<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    protected $fillable = [
        'product_id', 'size_id',
    ];

    public function products() {
        return $this->belongsTo(Product::class);
    }
    public function sizes() {
        return $this->belongsTo(Size::class);
    }
}
