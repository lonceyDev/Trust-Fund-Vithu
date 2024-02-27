<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventController extends Controller
{
    
    public function Event()
    {
        $events = Event::paginate(6);

        return view('frontend.get-involved.event', compact('events'));
    }

    public function EventDetail($slug)
    {
          
            $event = Event::where('slug', $slug)->firstOrFail();
          //  dd($event);

            $recentEvents = Event::where('id', '!=', $event->id)->take(5)->get();
         
            return view('frontend.get-involved.event-details', compact('event', 'recentEvents'));
        
    }
}
