<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryDetailController extends Controller
{
    public function __invoke($slug)
    {
        $category = Category::with('posts')->where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderByDesc('id')->paginate(12);


        return view('categories.index', compact('category', 'posts'));
    }
}
