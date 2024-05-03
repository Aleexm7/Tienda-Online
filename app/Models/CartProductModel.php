<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class CartProductModel extends Model
{
    use HasFactory;

    protected $table = 'cart_product';

    // Define la relación con el modelo Cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Define la relación con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
