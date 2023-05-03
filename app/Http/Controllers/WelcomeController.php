<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
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

    public function about()
    {
        return view('about');
    }
}
