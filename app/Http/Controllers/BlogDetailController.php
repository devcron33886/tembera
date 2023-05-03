<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogDetailController extends Controller
{
    public function __invoke($slug)
    {
        $post = Post::with('tags', 'categories')->where('slug', $slug)->firstOrFail();

        return view('blog.details', compact('post'));
    }
}
