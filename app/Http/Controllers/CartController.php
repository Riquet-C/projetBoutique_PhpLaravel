<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', ['cart' => $cart]);
    }

    public function addFromCart(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "picture" => $product->pictureUrl,
                "description" => $product->descProducts,
                "quantity" => 1,
                "price" => $product->price
            ];
        }
        session()->put('cart', $cart);

        return view('cart', ['cart' => $cart]);
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return view('cart', ['cart' => $cart])->with('success', 'Produit retiré du panier !');
    }

}
