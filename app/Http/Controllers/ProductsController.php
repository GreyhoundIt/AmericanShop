<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view ('products.show')->withProduct($product);

    }
}
