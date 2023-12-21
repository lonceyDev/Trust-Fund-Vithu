<?php

namespace App\Http\Controllers;

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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function Blog()
    {
        $blogs=Post::paginate(6);
        return view('frontend.explore.blog',compact('blogs'));
    }
   
    public function BlogDetail($slug) {
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
    $events=Event::paginate(6);
    return view('frontend.get-involved.event',compact('events'));

}

public function EventDetail($slug) {
    try {

        $event = Event::where('slug', $slug)->firstOrFail();
        $recentEvents = Event::where('id', '!=', $event->id)->take(5)->get();

        return view('frontend.get-involved.event-details', compact('event', 'recentEvents'));
    } catch (ModelNotFoundException $e) {
        
        return redirect()->route('home')->with('error', 'Event not found');
    }
}
public function Project(){
        
    $projects = Project::paginate(9); 
    return view('frontend.projects.project', compact('projects'));

}
public function ProjectDetail($slug){
    try {
        $project = Project::where('slug', $slug)->firstOrFail();
        $recentprojects= Project::where('id', '!=', $project->id)->take(5)->get();
        $projects = Project::all();
       
        return view('frontend.projects.project-details', compact('projects', 'project', 'recentprojects'));
    } catch (ModelNotFoundException $e) {
        return redirect()->route('home')->with('error', 'Project not found');
    }

}

// public function barChart()
//     {
        
//         $data = [
//             'labels' => ['January', 'February', 'March', 'April', 'May'],
//             'data' => [65, 59, 80, 81, 56],
//         ];
//         $pie = [            
//             'labels' => ['Category A', 'Category B', 'Category C', 'Category D', 'Category E'],
//             'data' => [25, 30, 15, 10, 20],
//         ];
//         $scatter = [
//             'labels' => ['Data Point 1', 'Data Point 2', 'Data Point 3', 'Data Point 4', 'Data Point 5'],
//             'data' => [
//                 ['x' => 10, 'y' => 20],
//                 ['x' => 15, 'y' => 25],
//                 ['x' => 20, 'y' => 30],
//                 ['x' => 25, 'y' => 35],
//                 ['x' => 30, 'y' => 40],
//             ],
//         ];
//         $line = [
//             'labels' => ['January', 'February', 'March', 'April', 'May'],
//             'data' => [65, 59, 80, 81, 56],
//         ];
//         return view('frontend.explore.accounts', compact('data','pie','scatter','line'));
//     }
}
