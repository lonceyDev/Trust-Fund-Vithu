<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use App\Models\Project;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projects = Project::where('status', '=', 'Ongoing')
            ->latest()
            ->take(3)
            ->get();
        $event = Event::where('status', 'Upcoming')
            ->latest('events_at')
            ->first();
        $events = Event::where('status', '=', 'Upcoming')
            ->latest('events_at')
            ->take(3)
            ->get();
           // dd($event);
        $blogs = Post::where('is_active', '=', '1')
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.home', compact('projects', 'events', 'event', 'blogs'));
    }
   

 }
