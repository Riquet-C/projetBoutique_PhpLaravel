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
        $productdelete = products::where('id', $id)->delete();
        return view('backOffice-delete', ['products' => $productdelete]);
    }

    public function modifyForm($id)
    {@
        $product = products::find($id);
        return view('backOffice-modify', ['products' => $product]);
    }

    public function modify(Request $request, $id)
    {
        $product = products::find($id);
        $product->update(
            [
                'name' => $request->input('name'),
                'pictureUrl' => $request->input('pictureUrl'),
                'descProducts' => $request->input('descProducts'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'discount' => $request->input('discount'),
                'categorieId' => '1',
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
        $productadd = products::create([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categorieId' => '1',
        ]);
        return view('backOffice-addSucces', ['products' => $productadd]);
    }

}
