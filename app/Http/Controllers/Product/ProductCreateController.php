<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductCreateController extends Controller
{
    public function __invoke()
    {
        return view('product.create');
    }
}
