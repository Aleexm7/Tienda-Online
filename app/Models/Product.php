<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'stock', 'imagen', 'categoria'];

    public function tallas()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }

    public $timestamps = false; // Indica a Eloquent que no gestione las columnas timestamps

    public function carts()
    {
        return $this->belongsToMany(CartModel::class, 'cart_product');
    }

    
}
