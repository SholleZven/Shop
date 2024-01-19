<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Models\Product;

class ProductStoreController extends Controller
{
    public function __invoke(ProductStoreRequest $request)
    {
        $data = $request->validated();
        Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
