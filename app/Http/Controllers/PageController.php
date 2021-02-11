<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index ()
    {
        return view('layouts.app');
    }

    public function products ()
    {
        return view('pages.product-list', [
            'products' => Product::all()
        ]);
    }

    public function cart ($id = 0)
    {
        $producto = Product::find($id);
        if ($id != 0) {
            \Cart::add(array(
                'id' => $producto->id,
                'name' => $producto->name,
                'price' => $producto->price,
                'quantity' => 1,
                'attributes' => $producto
            ));
        }
        $cart = \Cart::getContent();
        $totalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return view('pages.cart', compact('cart', 'total', 'totalQuantity'));
    }

    public function delete($id)
    {
        \Cart::remove($id);
        return redirect()->route('page.cart');
    }

    public function chekout ()
    {
        return view('pages.chekout');
    }
}
