<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // dd(\Cart::content());
        $products = \Furbook\Product::all();
        return view('shop.index1')->with('products', $products);
    }
}
