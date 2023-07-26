<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Package;

class BookingsController extends Controller
{
    public function index()
    {
        $packages = Package::orderByDesc('id')->get();

        return view('booking.index', compact('packages'));
    }

    public function booking(StoreBookingRequest $request)
    {
        $data = array_merge($request->validated(), ['status' => 'Pending']);
        
        Booking::create($data);

        return to_route('welcome.index')->with('message', 'Your booking is received please check your email to see the status of your booking.');
    }
}
