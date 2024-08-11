<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalPrice'
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

    public function calculateQuantity()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->pivot->quantity;

        }
        return $total;
    }
}
