<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function __invoke()
    {
        $posts=Post::latest()->orderByDesc('id')->paginate(12);
        return view('blog.index',compact('posts'));
    }
}