<?php

namespace App\Http\Controllers;

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
        Product::where('id', $id)->delete();
        return redirect()->route('backoffice')->with('success', 'Produit supprimé avec succès');
    }

    public function pagemodif($id)
    {
        $product = Product::find($id);
        return view('backoffice_pagemodif', ['product' => $product]);
    }

    public function modifier(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix'),
            'poids' => $request->input('poids'),
            'image' => $request->input('image'),
            'discount' => $request->input('discount'),
            'description' => $request->input('description'),
            'auteur' => $request->input('auteur'),
        ]);

        return redirect()->route('backoffice')->with('success', 'Produit modifié avec succès');
    }

    public function ajouter()
    {
        return view('backoffice_ajouter');
    }

    public function valider(Request $request)
    {
        Product::create([
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix'),
            'poids' => $request->input('poids'),
            'image' => $request->input('image'),
            'discount' => $request->input('discount'),
            'description' => $request->input('description'),
            'auteur' => $request->input('auteur'),
        ]);

        return redirect()->route('backoffice')->with('success', 'Produit ajouté avec succès');
    }
}
