<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $url = Storage::url(request()->file('file')->store('public'));
        $product = new Product(); 
        $product->name= $request->name;
        $product->quantity= $request->quantity;
        $product->image = $url;
        $product->price= $request->price;
        $product->save();
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view ('admin.product.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name =$request->name;
        $product->quantity =$request->quantity;
        $product->price =$request->price;
        $product->update();
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function apiProducts($id)
    {
        return Product::find($id);
    }

}
