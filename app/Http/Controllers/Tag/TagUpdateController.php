<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagUpdateRequest;
use App\Models\Tag;

class TagUpdateController extends Controller
{
    public function __invoke(TagUpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);

        return redirect()->route('tag.index');
    }
}
