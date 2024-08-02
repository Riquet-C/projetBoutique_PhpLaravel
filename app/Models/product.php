<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    function formatPrice($price)
    {
        return $price = $price / 100;
    }
    function priceExcludingVAT($price)
    {
        $TVA = 20;
        $prixHT = (100 * $price/100) / (100 + $TVA);
        return $prixHT;
    }
    function discountedPrice($prix, $remise)
    {
        $prixDiscount = (($prix / 100) * (100 - $remise)) / 100;
        return $prixDiscount;
    }
}
