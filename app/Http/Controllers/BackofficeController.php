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
    public function delete()
    {

    }
    public function modifier()
    {

    }
    public function ajouter()
    {
        return view('backoffice_ajouter');
    }
    public function valider(request $request)
    {
        $productajouter= product::create([
            'nom'=>$request->input('nom'),
            'prix'=>$request->input('prix'),
            'quantite'=>$request->input('quantite'),
            'image'=>$request->input('image'),
            'poids'=>$request->input('poids'),
            'discount'=>$request->input('discount'),

        ]);
        return view('backoffice_valider',['products' => $productajouter]);
    }

}
