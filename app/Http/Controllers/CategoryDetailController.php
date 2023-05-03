<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryDetailController extends Controller
{
    public function __invoke($slug)
    {
        $category = Category::with('posts')->where('slug', $slug)->firstOrFail();
        $query=$category->posts()->orderByDesc('id');
        
        return view('categories.index', compact('category','query'));
    }
}
