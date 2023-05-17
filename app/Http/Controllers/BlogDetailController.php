<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;

class BlogDetailController extends Controller
{
    public function __invoke(Post $post, $slug)
    {
       
        $post = Post::with('tags', 'category')->where('slug', $slug)->firstOrFail();
        SEOTools::setTitle($post->title);
        SEOTools::setDescription($post->body);
        SEOTools::opengraph()->setUrl('https://tembera250.com');
        SEOTools::setCanonical($post->featured_image->getUrl('preview'));
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage($post->featured_image->getUrl('preview'));

        return view('blog.details', compact('post'));
    }
}
