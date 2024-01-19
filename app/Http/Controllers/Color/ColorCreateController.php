<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;

class ColorCreateController extends Controller
{
    public function __invoke()
    {
        return view('color.create');
    }
}
