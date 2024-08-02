<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backOffice()
    {
        $products = product::all();
        return view('backOffice', ['products' => $products]);
    }

    public function delete($id)
    {
        $productdelete = product::where('id', $id)->delete();
        return view('backOffice-delete', ['product' => $productdelete]);
    }

    public function modifyForm($id)
    {
        $product = product::find($id);
        return view('backOffice-modify', ['product' => $product]);
    }

    public function modify(Request $request, $id)
    {
        $product = product::find($id);
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
        return view('backOffice-modifySucces', ['product' => $product]);
    }

    public function addForm()
    {
        return view('backOffice-add');
    }

    public function add(Request $request)
    {
        $productadd = product::create([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categorieId' => '1',
        ]);
        return view('backOffice-addSucces', ['product' => $productadd]);
    }

}
