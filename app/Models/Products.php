<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'pictureUrl',
        'descProducts',
        'price',
        'weight',
        'discount',
        'categoryId'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
    function formatPrice($price): float|int
    {
        return $price / 100;
    }
    function priceExcludingVAT($price): float|int
    {
        $TVA = 20;
        return (100 * $price/100) / (100 + $TVA);
    }
    function discountedPrice($price, $discount): float|int
    {
        return (($price / 100) * (100 - $discount)) / 100;
    }
}
