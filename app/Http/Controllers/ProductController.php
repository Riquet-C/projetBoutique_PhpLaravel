<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function product()
    {
//        $products = DB::select('select * from products');
        $products = products::all();
        return view('product-list', ['products' => $products]);
    }
    public function productByName()
    {
//        $products = DB::select('select * from products');
        $products = products::orderby('name', 'asc')->get();
        return view('product-list', ['products' => $products]);
    }

    public function productByPrice()
    {
        $products = products::orderby('price', 'asc')->get();
        return view('product-list', ['products' => $products]);
    }

    public function productId($id)
    {
//        $products = DB::select("select * from products where id = $id");
//        $products = products::where('id', $id)->get();
        $products = products::find($id);
        return view('product-details', ['products' => $products]);
    }
}
