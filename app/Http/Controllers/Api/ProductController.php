<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Products::with('category')->get();
        return response()->json($products);
    }

    public function product($id): JsonResponse
    {
        $products = Products::findOrFail($id);
        return response()->json($products);
    }

    public function store(Request $request): JsonResponse
    {
        $productAdd = products::create([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categoryId' => $request->input('categoryId'),
        ]);

        return response()->json($productAdd, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $product = products::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'pictureUrl' => $request->input('pictureUrl'),
            'descProducts' => $request->input('descProducts'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'discount' => $request->input('discount'),
            'categoryId' => $request->input('categoryId'),
        ]);


        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = products::findOrFail($id);
        $product->delete();
        return response()->json('Le produit ' . $product->name . ' a bien été supprimé');
    }
}


