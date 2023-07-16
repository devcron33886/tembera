<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Artesaos\SEOTools\Facades\SEOTools;

class EventsController extends Controller
{
    public function __invoke()
    {
        SEOTools::setTitle('Events');
        SEOTools::setDescription("Let's travel to conserve our nature. TEMBERA 250 is your best choice traveling company in domestic tourism because they don't send you there they take you there.");
        SEOTools::opengraph()->setUrl('https://tembera250.com/events');
        SEOTools::setCanonical('https://tembera250.com/events');
        SEOTools::opengraph()->addProperty('type', 'pages');
        SEOTools::twitter()->setSite('@Tembera250');
        SEOTools::jsonLd()->addImage('https://tembera250.com/images/logo.png');

        $events = Event::where('status', 1)->get();

        /*foreach ($events as $event) {
            $endDate = $event->end_date;
            $count = $event->count;

            // Display the data for each end date
            echo "End Date: $endDate, Count: $count <br>";
        }*/

        return view('events.index', compact('events'));
    }
}
