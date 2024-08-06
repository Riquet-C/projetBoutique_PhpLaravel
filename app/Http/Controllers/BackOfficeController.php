<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class BackOfficeController extends Controller
{
    public function backoffice(){
        $products = Product::all();
        return view('backoffice', ['product' => $products]);
    }
    public function ajoutunproduit(){
        $date = ['message' => 'ajoutunproduit'];
        return view('ajoutunproduit', $date);
    }

    public function store(Request $request){

        $newproduct = [
            'id' => $request->input('id'),
            'categorie' => $request->input('categorie'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'picture' => $request->input('picture'),
            'clean' => $request->input('clean'),

        ];
        Product::create($newproduct);
        return redirect()->route('ajoutunproduit')
            ->with('success','Post created successfully.');
    }
    public function destroy($id){
        $kill = Product::find($id);
        $kill->delete();
        return redirect()->route('backoffice')
            ->with('success','post deleted successfully');
    }

    public function productId($id){
        $product = DB::select('select * from products where id = ?', [$id]);
        return view('update-product-detail', ['product' => $product[0]]);
    }

    public function updateProduct(Request $request, $id){
        $item = Product::find($id);
        $item->categorie = $request->input('categorie');
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->weight = $request->input('weight');
        $item->discount = $request->input('discount');
        $item->picture = $request->input('picture');
        $item->clean = $request->input('clean');

        $item->save();
        return redirect()->route('backoffice')
            ->with('success', 'post updated successfully');
    }



}
