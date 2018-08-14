<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{

    public function addToCart()
    {
        $this->validate(\request(),[
            'qty' => 'required|min:1'
        ]);
        //dd(\request()->all());

        $product = Product::find(\request()->product_id);

        $featured = $product->featured;

        $cartItem = Cart::add([

            'id' => $product->id,
            'name' => $product->title,
            'qty' => \request()->qty,
            'price' => $product->price

        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        //dd($cartItem);

        //dd(Cart::content());

        return redirect()->route('cart');
    }

    public function cart()
    {
        //Cart::destroy();

        return view('front.cart');
    }

    public function cartDelete($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }

}
