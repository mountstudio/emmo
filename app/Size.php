<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'number_size', 'full_size', 'serv_desc',
    ];
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
