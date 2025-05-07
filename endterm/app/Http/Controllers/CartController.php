<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = ["id"=> 101,"name"=>'Smartphone',"price"=>200];
        $cart = session()->get('cart', []);
        $cart[] = $product;
        session(['cart' => $cart]);

        return redirect()->route('cart.show');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'price'));

        return view('cart', compact('cart', 'total'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('cart.show');
    }
}
