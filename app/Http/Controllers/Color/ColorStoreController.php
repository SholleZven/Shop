<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\ColorStoreRequest;
use App\Models\Color;

class ColorStoreController extends Controller
{
    public function __invoke(ColorStoreRequest $request)
    {
        $data = $request->validated();
        Color::firstOrCreate($data);

        return redirect()->route('color.index');
    }
}
