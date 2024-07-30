<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() : string {
        $data = ['message' => 'Product'];
        return view('product-list', $data);
    }

    public function productId($id) : string {
        $data = ['message' => 'Product n° ' . $id];
        return view('product-details', $data);
    }
}
