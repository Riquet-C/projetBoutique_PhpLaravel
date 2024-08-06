<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('product-list', ['products' => $products]);
    }

    public function productsID($id)
    {
        $product = Product::findOrFail($id);

        return view('product-details', ['product' => $product]);
    }
    public function productsNom()
    {
        $products = Product::orderBy('nom')->get();
        return view('product-listNom', ['products' => $products]);

    }
    public function productsPrix()
    {
        $products = Product::orderBy('prix', 'asc')->get();
        return view('product-listPrix', ['products' => $products]);
    }
}
