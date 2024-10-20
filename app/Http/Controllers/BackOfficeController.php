<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Orders;

class BackOfficeController extends Controller
{
    public function backOffice()
    {
        $products = Products::all();
        $orders = Orders::all();
        return view('backOffice.backOffice', ['products' => $products], ['orders' => $orders]);
    }

    public function detail($id)
    {
        $products = Products::where('id', $id)->get();
        $orders = Orders::where('id', $id)->get();
        return view('order.order-detail', ['products' => $products], ['orders' => $orders]);
    }
    public function delete($id)
    {
        $productDelete = Products::where('id', $id)->delete();
        return view('backOffice.backOffice-delete', ['products' => $productDelete]);
    }

    public function modifyForm($id)
    {
        $product = Products::findOrFail($id);
        return view('backOffice.backOffice-modify', ['products' => $product]);
    }

    public function modify(Request $request, $id)
    {
        $this->validateProductData($request);

        $product = Products::findOrFail($id);
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
        return view('backOffice.backOffice-modifySucces', ['products' => $product]);
    }

    public function addForm()
    {
        return view('backOffice.backOffice-add');
    }

    public function add(Request $request)
    {
        $this->validateProductData($request);

        $productAdd = products::create([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categoryId' => $request->input('categoryId'),
        ]);
        return view('backOffice.backOffice-addSucces', ['products' => $productAdd]);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function validateProductData(Request $request): void
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
    }

}
