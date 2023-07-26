<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Package;
use App\Notifications\AdminBookingNotification;
use Illuminate\Support\Facades\Notification;

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
        Notification::route('mail', 'mbabazijacques@gmail.com')->notify(new AdminBookingNotification());

        return to_route('welcome.index')->with('message', 'Your booking is received please check your email to see the status of your booking.');
    }
}
