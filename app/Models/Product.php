<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'image', 'category', 'size'];

    public $timestamps = false; // Indica a Eloquent que no gestione las columnas timestamps

    public function carts()
    {
        return $this->belongsToMany(CartModel::class, 'cart_product');
    }
}
