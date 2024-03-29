<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagIndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }
}
