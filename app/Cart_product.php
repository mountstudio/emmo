<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart_product extends Model
{
    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
