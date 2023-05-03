<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function __invoke()
    {
        $services=Service::orderByDesc('id')->limit(6)->get();
        return view('services',compact('services'));
    }
}
