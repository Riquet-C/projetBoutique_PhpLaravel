<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function backoffice()
    {
        $products = Product::all();
        return view('backoffice', ['products' => $products]);
    }
}
