<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
            ->latest()
            ->take(3)
            ->get();
        $blogs = Post::where('published', '=', '1')
            ->latest()
            ->take(3)
            ->get();
            $galleries = $event->with('media')->get();
        //dd($galleries);

        return view('frontend.home', compact('projects', 'events', 'event', 'blogs','galleries'));
    }
    public function create()
    {
        return view('frontend.contact-us');
    }
    public function store(Request $request)
    {

        Contact::create($request->all());

        return redirect()
            ->route('home')
            ->withMessage('contact has been sent successfully!!!');
    }


    public function Blog()
    {
        $blogs = Post::paginate(6);
        return view('frontend.explore.blog', compact('blogs'));
    }

    public function BlogDetail($slug)
    {
        try {

            $blog = Post::where('slug', $slug)->firstOrFail();

            $recentBlogs = Post::where('id', '!=', $blog->id)->take(5)->get();

            return view('frontend.explore.blog-details', compact('blog', 'recentBlogs'));
        } catch (ModelNotFoundException $e) {

            return redirect()->route('home')->with('error', 'Blog not found');
        }
    }

    public function Event()
    {
        $events = Event::paginate(6);
        return view('frontend.get-involved.event', compact('events'));
    }

    public function EventDetail($slug)
    {
        try {

            $event = Event::where('slug', $slug)->firstOrFail();
            $recentEvents = Event::where('id', '!=', $event->id)->take(5)->get();
            $galleries = $event->with('media')->get();


            return view('frontend.get-involved.event-details', compact('event', 'recentEvents','galleries'));
        } catch (ModelNotFoundException $e) {

            return redirect()->route('home')->with('error', 'Event not found');
        }
    }
    public function Project()
    {

        $projects = Project::paginate(9);
        return view('frontend.projects.project', compact('projects'));
    }
    public function ProjectDetail($slug)
    {
        try {
            $project = Project::where('slug', $slug)->firstOrFail();
            $recentprojects = Project::where('id', '!=', $project->id)->take(5)->get();
            $galleries = Project::with('media')->get();
            
            //$galleries = $recentprojects->with('media')->get();


            return view('frontend.projects.project-details', compact( 'project', 'recentprojects','galleries'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Project not found');
        }
    }
    public function showProjects($status)
    {
        if ($status === 'complete') {
            $completedProjects = Project::where('status', '=', 'complete')->paginate(6); // Adjust the conditions based on your data structure
            return view('frontend.projects.complete', ['completedProjects' => $completedProjects]);
        } elseif ($status === 'ongoing') {
            $ongoingProjects = Project::where('status', '=', 'ongoing')->paginate(6);
            return view('frontend.projects.ongoing', ['ongoingProjects' => $ongoingProjects]);
        }
    }
    public function accChart(){
        return view('frontend.explore.accounts');
    }
    public function pieChart(){
        return view('frontend.explore.pie');
    }
    public function barChart(){
        return view('frontend.explore.bar');
    }
    public function lineChart(){
        return view('frontend.explore.line');
    }



}
