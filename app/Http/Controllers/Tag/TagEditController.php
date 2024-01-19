<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagEditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }
}
