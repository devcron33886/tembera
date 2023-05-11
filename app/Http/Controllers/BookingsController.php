<?php

namespace App\Http\Controllers;

use App\Models\Package;

class BookingsController extends Controller
{
    public function index()
    {
        $packages = Package::orderByDesc('id')->get();

        return view('booking.index', compact('packages'));
    }
}
