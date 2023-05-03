<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogComponent extends Component
{
    public function render(): View|Closure|string
    {
        $posts = Post::with(['author', 'categories', 'tags'])->limit(3)->get();

        return view('components.blog-component', compact('posts'));
    }
}
