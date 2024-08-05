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

    public function delete($id)
    {
        $productDelete = Product::where('id', $id)->delete();
        return view('backoffice_supprimer', ['productDelete' => $productDelete]);
    }


    public function pagemodif(Request $request,$id)
    {
        $products = product::find($id);

        return view('backoffice_pagemodif', ['products' => $products]);
    }
    public function modifier($id)
    {

        return view('backoffice_modifier', ['products' => $id]);
    }

    public function ajouter()
    {
        return view('backoffice_ajouter');
    }
    public function valider(request $request)
    {
        $productAjouter= product::create([
            'nom'=>$request->input('nom'),
            'prix'=>$request->input('prix'),
            //'quantite'=>$request->input('quantite'),
            'poids'=>$request->input('poids'),
            'image'=>$request->input('image'),
            'discount'=>$request->input('discount'),
            'description'=>$request->input('description'),
            'auteur'=>$request->input('auteur'),

        ]);
        return view('backoffice_valider',['products' => $productAjouter]);
    }

}
