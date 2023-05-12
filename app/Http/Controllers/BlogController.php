<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    public function __invoke()
    {
        $categories = Category::where('status', 1)->get();
        $posts = Post::latest()->orderByDesc('id')->paginate(12);

        return view('blog.index', compact('posts', 'categories'));
    }
}
