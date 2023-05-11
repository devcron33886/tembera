<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function __invoke()
    {
        $categories=Category::where('status',1)->get();
        $posts = Post::latest()->orderByDesc('id')->paginate(12);

        return view('blog.index', compact('posts','categories'));
    }
}
