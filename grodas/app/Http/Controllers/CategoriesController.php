<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        //
        $categories = \App\Models\Category::all();
        return response()->json($categories);
    }
    public function show($id)
    {
        //
        $category = \App\Models\Category::find($id);
        return response()->json($category);
    }
    public function update(Request $request, $id)
    {
        //
        $category = \App\Models\Category::find($id);
        $category->update($request->all());
        return response()->json($category);
    }
    public function destroy($id)
    {
        //
        $category = \App\Models\Category::find($id);
        $category->delete();
        return response()->json('deleted');
    }
}
