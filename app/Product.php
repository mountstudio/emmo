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
    public function sizes() {
        return $this->belongsToMany(Size::class);
    }

    public function category()
    {
        return $this->hasOneThrough(Category::class, Subcategory::class);
    }
}
