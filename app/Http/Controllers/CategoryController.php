<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name_email ?? '';
        $categories = Category::query();
        if (!empty($name)) {
            $categories->where('name', 'like', '%' . $name . '%');
        }
        $categories = $categories->paginate(8);
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'created_by' => 'required',
        ]);
        $data = $request->only(['name', 'created_by']);
        Category::create($data);
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'created_by' => 'required',
        ]);
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('category.error')->with('error', 'Category not found');
        }
        $category->update($validatedData);
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }
    public function error()
    {
        return view('category.error');
    }
}
