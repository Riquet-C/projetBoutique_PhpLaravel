<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $date = ['message' => 'panier'];
        return view('cart', $date);
    }
}
