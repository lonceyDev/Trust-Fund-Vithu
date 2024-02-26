<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventController extends Controller
{
    public function event()
    {
        $events = Event::paginate(6);

        return view('frontend.get-involved.event', compact('events'));
    }

    public function eventDetail($slug)
    {
        try {

            $event = Event::where('slug', $slug)->firstOrFail();

            $recentEvents = Event::where('id', '!=', $event->id)->take(5)->get();
         
            return view('frontend.get-involved.event-details', compact('event', 'recentEvents'));
        
        } catch (ModelNotFoundException $e) {

            return redirect()->route('home')->with('error', 'Event not found');
        }
    }
}
