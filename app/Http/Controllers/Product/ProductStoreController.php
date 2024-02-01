<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductStoreController extends Controller
{
    public function __invoke(ProductStoreRequest $request)
    {
        $data = $request->validated();

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagsIds = $data['tags'];
        $ColorsIds = $data['colors'];

        Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
