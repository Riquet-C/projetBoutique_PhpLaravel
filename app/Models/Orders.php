<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalPrice',
        'user_id',
    ];

    public function products()
    {
        return $this->belongsToMany(Products::class)->withPivot('quantity');
    }

    public function calculateTotal()
    {
        $total = $this->products->sum(function($product) {
            return $product->price /100 * $product->pivot->quantity;
        });

        $this->totalPrice = $total;
        $this->save();
        return $total;
    }
}
