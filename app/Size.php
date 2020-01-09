<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'number_size', 'full_size', 'serv_desc',
    ];
    public function product_sizes() {
        return $this->hasMany(Product_size::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
