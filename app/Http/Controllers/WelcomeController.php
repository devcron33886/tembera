<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class WelcomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription("Let's travel to conserve our nature. TEMBERA 250 is your best choice traveling company in domestic tourism because they don't send you there they take you there.");
        SEOTools::opengraph()->setUrl('https://tembera250.com');
        SEOTools::setCanonical('https://tembera250.com');
        SEOTools::opengraph()->addProperty('type', 'pages');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage('https://tembera250.com/images/logo.png');

        return view('welcome');
    }

    public function services()
    {
        return view('services');
    }

    public function booking()
    {
        return view('booking');
    }
}
