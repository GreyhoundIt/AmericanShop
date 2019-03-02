<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view ('products.show')->withProduct($product);
    }

    public function related($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $products = Product::inRandomOrder()->where('category_id', $product->category_id)->take(4)->get();
        return $products;
    }
}
