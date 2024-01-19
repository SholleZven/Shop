<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;

class ProductUpdateController extends Controller
{
    public function __invoke(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return redirect()->route('product.index');
    }
}
