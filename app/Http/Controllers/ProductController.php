<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function product()
    {
        $products = products::all();
        return view('product.product-list', ['products' => $products]);
    }
    public function productByName()
    {
        $products = products::orderby('name', 'asc')->get();
        return view('product.product-list', ['products' => $products]);
    }

    public function productByPrice()
    {
        $products = products::orderby('price', 'asc')->get();
        return view('product.product-list', ['products' => $products]);
    }

    public function productId($id)
    {
        $products = products::findOrFail($id);
        if ($products){
        return view('product.product-details', ['products' => $products]);}

    }

    public function productByCategories()
    {
        $categories = Category::with('products')->get();
        return view('product.product-listCategory', compact('categories'));
    }
}
