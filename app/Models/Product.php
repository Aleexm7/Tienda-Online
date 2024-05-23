<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;


    /* protected $table = 'products'; */
    protected $fillable = ['name', 'price', 'image', 'category', 'stock_total','section'];

    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
    /* public function tallas()
    {
        return $this->belongsToMany(Size::class, 'product_sizes', 'product_id', 'size_id')->withTimestamps();
    } */

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_products');
    }
    
}
