<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutController extends Controller
{
    public function __invoke()
    {
        SEOTools::setTitle('About us');
        SEOTools::setDescription('Tembera250 is a tour and travel company in Musanze, Rwanda. We are renowned for our unique travel packages and services, community-based tourism, and nature conservation-based tourism activities. Our heart is to offer a holistic and exceptional experience for our local and international clients. We work in partnership with other tourism and hospitality industry companies, the local government, and individuals to ensure that our clients needs are well taken care of throughout their travel and stay in any part of Rwanda and East Africa.');
        SEOTools::opengraph()->setUrl('https://tembera250.com');
        SEOTools::setCanonical('https://tembera250.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage('https://tembera250.com/images/logo.png');
        return view('about');
    }
}
