<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Post;

class BlogDetailController extends Controller
{
    public function __invoke(Post $post,$slug)
    {
        SEOTools::setTitle('Blog');
        SEOTools::setDescription("$post->body");
        SEOTools::opengraph()->setUrl('https://tembera250.com/blog/'.'{{ $post->slug}}');
        SEOTools::setCanonical('https://tembera250.com/blog/'.'{{ $post->slug}}');
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage('https://tembera250.com/images/logo.png');
        $post = Post::with('tags', 'category')->where('slug', $slug)->firstOrFail();

        return view('blog.details', compact('post'));
    }
}
