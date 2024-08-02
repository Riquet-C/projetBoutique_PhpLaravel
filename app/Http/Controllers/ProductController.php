<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function product()
    {
//        $products = DB::select('select * from products');
        $products = product::all();
        return view('product-list', ['products' => $products]);
    }
    public function productByName()
    {
//        $products = DB::select('select * from products');
        $products = product::orderby('name', 'asc')->get();
        return view('product-list', ['products' => $products]);
    }

    public function productByPrice()
    {
        $products = product::orderby('price', 'asc')->get();
        return view('product-list', ['products' => $products]);
    }

    public function productId($id)
    {
//        $product = DB::select("select * from products where id = $id");
//        $product = product::where('id', $id)->get();
        $product = product::find($id);
        return view('product-details', ['product' => $product]);
    }
}
