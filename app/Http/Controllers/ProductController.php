<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
        $products = Product::all();
        return view('product-list', ['product' => $products]);
    }
    public function productNameSort(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
          $products = Product::all()
              ->sortBy('name');
          return view('product-list', ['product' => $products]);
    }

    public function productPriceSort(){
//        $products = DB::select('select * from products');
//        return view('product-list', ['product' => $products]);
        $products = Product::all()
            ->sortBy('price');
        return view('product-list', ['product' => $products]);
    }

    public function productId($id){
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product[0]]);
    }
}
