<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    protected $table = 'product_size';

    public function size() {
        return $this->belongsTo(Size::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
