<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $name_email = $request->name_email ?? ''; // $request->name_email ? $request->name_email : ''
        $category = $request->category ?? '';
        $sortByPrice = $request->input("sort-by-price", 'desc');
        $sortBySoldNumber = $request->input("sort-by-sold-number", 'desc');

        $products = Product::query();
        if (!empty($name_email)) {
            $products->where('name', 'like', '%' . $name_email . '%');
        }
        if (!empty($sortByPrice)) {
            $products->orderBy('price', $sortByPrice);
        }

        if (!empty($sortBySoldNumber)) {
            $products->orderBy('sold', $sortBySoldNumber);
        }

        // $results = $products->get();
        $products = $products->paginate(10);
        return view('products.index', compact('products', 'name_email', 'category', 'sortByPrice', 'sortBySoldNumber'));
    }

    public function create()
    {
        return view('products.create-product');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|max:2048',
            'sold' => 'integer',
        ]);

        $data = $request->only('name', 'price', 'category_id', 'status', 'description', 'image', 'sold');

        Product::create($data);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'status' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|max:2048',
            'sold' => 'integer',
        ]);


        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product.error')->with('error', 'Product not found.');
        }
        $data = $request->all();
        $product->update($data);
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show-product', compact('product'));
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('products.show-product-dashboard', compact('products'));
    }

    public function showProductDetail($id)
    {
        $product = Product::findOrFail($id);

        // Lấy danh mục của sản phẩm
        $category = $product->category;

        // Lấy các sản phẩm cùng danh mục (trừ sản phẩm hiện tại)
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();
        return view('products.show-product-detail', compact('product', 'relatedProducts'));
    }

    public function search(Request $request)
    {

        $sortByPrice = $request->input("sort-by-price", 'desc');
        $sortBySoldNumber = $request->input("sort-by-sold-number", 'desc');

        $products = Product::query();
        if (!empty($sortByPrice)) {
            $products->orderBy('price', $sortByPrice);
        }

        if (!empty($sortBySoldNumber)) {
            $products->orderBy('sold', $sortBySoldNumber);
        }

        $products = $products->paginate(10);
        return view('products.show-product-dashboard', compact('products',  'sortByPrice', 'sortBySoldNumber'));
    }
    public function error()
    {
        return view('products.error');
    }
}
