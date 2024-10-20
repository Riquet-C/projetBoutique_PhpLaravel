<?php

namespace App\Http\Controllers;
use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();

        $product = Products::find($request->input('id'));

        if ($cart->products()->where('products_id', $request->input('id'))->exists()) {
            $currentQuantity = $cart->products()->where('products_id', $product->id)->first()->pivot->quantity;
            $newQuantity = $currentQuantity + $request->input('quantity');
            $cart->products()->updateExistingPivot($product->id, ['quantity' => $newQuantity]);
        } else {
            $cart->products()->attach($request->input('id'), ['quantity' => $request->input('quantity')]);
        }
        $cart->calculateTotal();

        return redirect()->route('cart')->with('add', 'Produit ajouté au panier!');

    }

    public function show()
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();
        return view('cart', compact('cart'));
    }


    public function removeFromCart(Request $request, $id)
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();
        $cart->products()->detach($id, ['quantity' => $request->input('quantity')]);

        return redirect()->route('cart')->with('delete', 'Produit supprimer du panier!');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = Cart::with('products')->where('user_id', '=', 1)->first();
        $cart->products()->updateExistingPivot($id, ['quantity' => $request->input('quantity')]);
        return redirect()->route('cart')->with('update', 'Quantité du produit modifée!');
    }

}
