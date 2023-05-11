<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagDetailController extends Controller
{
    public function __invoke($slug)
    {
        $tag = Tag::whereSlug($slug)->get();

        return view('tags.index', compact('tag'));
    }
}
