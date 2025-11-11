<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

   
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('market'));
    }

    
    public function update(Request $request, $id)
    {
        $product = Market::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
