<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        return Category::all()->toArray();
    }

    public function store(Request $request)
    {
        $category = new Category([
            'name' => $request->input('name'),
        ]);
        $category->save();

        return response()->json('category created!');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json('category updated!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json('category deleted!');
    }
}
