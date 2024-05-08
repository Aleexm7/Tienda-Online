<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'order_date',
        'total',
        'iva',
        'status',
    ];

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }
    
      public function calculateTotalIVA()
    {
       
        return $this->total * 1.21;
    }
}
