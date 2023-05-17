<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;

class BlogController extends Controller
{
    public function __invoke()
    {
        SEOTools::setTitle('Blog');
        SEOTools::setDescription('Discover the Ultimate Adventure Gear at Tembera250.com - Your Go-to Destination for Outdoor Enthusiasts! From hiking and camping to cycling and beyond, Tembera250.com offers a wide range of top-quality adventure gear and equipment. Find expertly crafted backpacks, durable tents, high-performance bicycles, and more, all designed to enhance your outdoor experiences. Get ready to embark on unforgettable journeys with Tembera250.com exceptional selection of gear. Visit our website today and gear up for your next thrilling adventure!');
        SEOTools::opengraph()->setUrl('https://tembera250.com/blog');
        SEOTools::setCanonical('https://tembera250.com/blog');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage('https://tembera250.com/images/tembera 250 blog header.jpg');
        $categories = Category::where('status', 1)->get();
        $posts = Post::latest()->orderByDesc('id')->paginate(12);

        return view('blog.index', compact('posts', 'categories'));
    }
}
