<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product');
    }
}
