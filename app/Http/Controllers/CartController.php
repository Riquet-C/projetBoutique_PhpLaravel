<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $product = ['message' => 'panier'];
        return view('cart', $date);
    }
}
