<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
     public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_products');
    }

    
}
