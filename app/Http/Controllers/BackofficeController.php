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
        return view('backoffice_supprimer');
    }

    public function pagemodif($id)
    {
        $product = Product::find($id);
        return view('backoffice_pagemodif', ['product' => $product]);
    }

    public function modifier(Request $request, $id)
    {

        $this->validateProductData($request);
        $product = Product::findorfail($id);

        $product->update([
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix'),
            'poids' => $request->input('poids'),
            'image' => $request->input('image'),
            'discount' => $request->input('discount'),
            'description' => $request->input('description'),
            'auteur' => $request->input('auteur'),
        ]);

        return view('backoffice_modifier', ['product' => $product]);
    }

    public function ajouter()
    {

        return view('backoffice_ajouter');
    }

    public function valider(Request $request)
    {

        $this->validateProductData($request);

        Product::create([
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix'),
            'poids' => $request->input('poids'),
            'image' => $request->input('image'),
            'discount' => $request->input('discount'),
            'description' => $request->input('description'),
            'auteur' => $request->input('auteur'),
        ]);

        return view('backoffice_valider');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function validateProductData(Request $request): void
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'poids' => 'required|numeric|min:0',
            'image' => 'required|string|max:255',
            'discount' => 'nullable|numeric|min:0|max:100',
            'description' => 'required|string',
            'auteur' => 'required|string|max:255',
        ]);
    }
}
