<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() : string {
        $data = ['message' => 'cart'];
        return view('cart', $data);
    }
}
