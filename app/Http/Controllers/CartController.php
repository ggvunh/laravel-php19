<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Furbook\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->cost, ['image' => 'this is link image']);
        $count = Cart::count();
        return response(['count' => $count], 200);
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect('/shop');
    }

    public function checkout()
    {
        return view('shop.checkout');
    }

    public function delete($rowId)
    {
        \Cart::remove($rowId);
        return redirect('/checkout');
    }

    public function loadCarts()
    {
        $count = Cart::count();
        $data = Cart::content();
        return response(['count' => $count, 'data' => $data], 200);
    }
}
