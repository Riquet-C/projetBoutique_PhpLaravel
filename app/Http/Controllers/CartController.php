<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {

    }

    public function addToCart(Request $request)
    {
        /* potentiellement ajouter une validation en fonction de la quantité disponible */
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();

        $product = Products::find($request->input('id'));

        $cart->products()->attach($product->id, ['quantity' => $request->input('quantity')]);

        $cart->calculateTotal();

        return redirect()->route('cart')->with('success', 'Produit ajouté au panier!');

    }

    public function show()
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();

        return view('cart', compact('cart'));
    }


    public
    function removeFromCart($id)
    {


    }


}
