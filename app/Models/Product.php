<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_image',
        "product_quantity",
    ]

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function Carts()
    {
        return $this->hasMany(Cart::class);
    }
}
