<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventsController extends Controller
{
    public function __invoke()
    {
        $events = Event::where('status', 1)->orderByDesc('id')->get();

        return view('events.index', compact('events'));
    }
}
