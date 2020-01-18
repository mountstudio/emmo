<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name', 'image',
    ];
    public function products() {
        return $this->hasMany(Product::class);
    }
}
