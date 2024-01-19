<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\ColorUpdateRequest;
use App\Models\Color;

class ColorUpdateController extends Controller
{
    public function __invoke(ColorUpdateRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);

        return redirect()->route('color.index');
    }
}
