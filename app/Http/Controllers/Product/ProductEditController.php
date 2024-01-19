<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductEditController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('product.edit', compact('product'));
    }
}
