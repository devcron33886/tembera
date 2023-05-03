<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $packages=Package::where('status',1)->orderByDesc('id')->get();
        return view('booking.index',compact('packages'));
    }
}
