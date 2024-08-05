<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backOffice()
    {
        $products = products::all();
        return view('backOffice', ['products' => $products]);
    }

    public function delete($id)
    {
        $productDelete = products::where('id', $id)->delete();
        return view('backOffice-delete', ['products' => $productDelete]);
    }

    public function modifyForm($id)
    {
        $product = products::find($id);
        return view('backOffice-modify', ['products' => $product]);
    }

    public function modify(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'pictureUrl' => 'required',
            'descProducts' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'categoryId' => 'required|exists:categories,id',
        ]);

        $product = products::find($id);
        $product->update(
            [
                'name' => $request->input('name'),
                'pictureUrl' => $request->input('pictureUrl'),
                'descProducts' => $request->input('descProducts'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'discount' => $request->input('discount'),
                'categoryId' => $request->input('categoryId'),
            ]
        );
        return view('backOffice-modifySucces', ['products' => $product]);
    }

    public function addForm()
    {
        return view('backOffice-add');
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'pictureUrl' => 'required',
            'descProducts' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'categoryId' => 'required',
        ]);

        $productAdd = products::create([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categoryId' => $request->input('categoryId'),
        ]);
        return view('backOffice-addSucces', ['products' => $productAdd]);
    }

}
