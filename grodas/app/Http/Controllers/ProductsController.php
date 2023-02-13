<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        //
        $products = \App\Models\Product::all();
        return response()->json($products);
    }
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|numeric',
        ]);
        $product = \App\Models\Product::create($request->all());
        return response()->json($product);
    }
    public function show($id)
    {
        //
        $product = \App\Models\Product::find($id);
        return response()->json($product);
    }
    public function update(Request $request, $id)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|numeric',
        ]);
        $product = \App\Models\Product::find($id);
        $product->update($request->all());
        return response()->json($product);
    }
    public function destroy($id)
    {
        //
        $product = \App\Models\Product::find($id);
        $product->delete();
        return response()->json('deleted');
    }
}
