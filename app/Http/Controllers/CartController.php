<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $date = ['message' => 'panier'];
        return view('cart', $date);
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $quantityCart = $request->quantity;
        $cart = DB::select("select * from products where id = '$id'");
        return view('cart', ['cart' => $cart]);
    }
}
