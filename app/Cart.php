<?php

namespace App;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ='carts';

    protected $casts = [
        'cart' =>'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function add(Product $product, $count = 1, $token, $options = []) {
        if (CartFacade::session($token)->get($options['product_id'])){
            return CartFacade::session($token)->update($options['product_id'], [
                'quantity' => $count,
            ]);
        } else {
            $product_size = Product_size::find($product->id);
            return CartFacade::session($token)->add($options['product_id'], $product->name, $product_size->price, $count ? $count : 1, ['size'=> $options['size']]);
        }
    }

    public static function remove(Product $product, $count, $token, $options = []){
        if (!CartFacade::session($token)->get($options['product_id'])){
            return null;
        }

        if (CartFacade::session($token)->get($options['product_id'])->quantity == $count){
            return CartFacade::session($token)->remove($options['product_id']);
        } else {
            return CartFacade::session($token)->update($options['product_id'], [
                'quantity' => -$count
            ]);
        }
    }

    public static function deleteProduct(Product $product, $token, $options = []){
        if (!CartFacade::session($token)->get($options['product_id'])){
            return null;
        }
        return CartFacade::session($token)->remove($options['product_id']);
    }
}