<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Revolution\Google\Sheets\Facades\Sheets;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $projects = Project::where('status', '=', 'Ongoing')
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        $event = Event::where('status', 'Upcoming')
                ->latest('events_at')
                ->first(); 
        $events = Event::where('status', '=', 'Upcoming')
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        $blogs = Post::where('published', '=', '1')
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
        
        $galleries=Event::pluck('featured_image')->flatten()->all();

        return view('frontend.home',compact('projects','events','event','blogs','galleries'));
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
public function showProjects($status) {
    if ($status === 'complete') {
        $completedProjects = Project::where('status', '=', 'complete')->paginate(6); // Adjust the conditions based on your data structure
        return view('frontend.projects.complete', ['completedProjects' => $completedProjects]);
    } elseif ($status === 'ongoing') {
        $ongoingProjects = Project::where('status', '=', 'ongoing')->paginate(6);
        return view('frontend.projects.ongoing', ['ongoingProjects' => $ongoingProjects]);
    } 
}

public function accChart()
    {
       
        $sheets = Sheets::spreadsheet('1Uiw1kGzzqKRiy3WwC2j0sRB3IRIzmybL9Cj_NQRVhMs')->sheet('demo')->get();
        $header = $sheets->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheets);
        $values->toArray();
       
        $accounts=Account::all();
       
        $data = [
            'labels' => ['Year', 'Inflow', 'Outflow', 'NetFlow'],
            'data' =>
             ['2014', 1000, 400, 200],
            ['2015', 1170, 460, 250],
            ['2016', 660, 1120, 300],
            ['2018', 1030, 540, 350],
            ['2019', 1030, 540, 350],
            ['2020', 1030, 540, 350],
            ['2021', 1030, 540, 350],
            ['2022', 1030, 540, 350],
            ['2023', 1030, 540, 350],
        ];
        $pie = [            
            'labels' => ['Foundation and Grants', 'Individual Conributions', 'Others'],
            'data' => [55,30,15],
        ];
        // $scatter = [
        //     'labels' => ['Data Point 1', 'Data Point 2', 'Data Point 3', 'Data Point 4', 'Data Point 5'],
        //     'data' => [
        //         ['x' => 10, 'y' => 20],
        //         ['x' => 15, 'y' => 25],
        //         ['x' => 20, 'y' => 30],
        //         ['x' => 25, 'y' => 35],
        //         ['x' => 30, 'y' => 40],
        //     ],
        // ];
        $line = [
            'labels' => ['Year', 'Donation', 'program impact'],
            'data' =>  
            ['2014',  1000,      400],
            ['2015',  1170,      460],
            ['2016',  660,       1120],
            ['2017',  1030,      540],
            ['2018',  1000,      400],
            ['2019',  1170,      460],
            ['2020',  660,       1120],
            ['2021',  1030,      540],
            ['2022',  1000,      400],
            ['2023',  1170,      460],
            ['2024',  660,       1120],
            ['2025',  1030,      540]
        ];
        return view('frontend.explore.accounts', compact('data','pie','line','accounts','values'));
    }
    public function pieChart()
    {
    
        $pie = [            
            'labels' => ['Foundation and Grants', 'Individual Conributions', 'Others'],
            'data' => [55,30,15],
        ];
  
        return view('frontend.explore.pie', compact('pie'));
    }
    public function barChart()
    {
        
        $data = [
            'labels' => ['Year', 'Inflow', 'Outflow', 'NetFlow'],
            'data' =>
             ['2014', 1000, 400, 200],
            ['2015', 1170, 460, 250],
            ['2016', 660, 1120, 300],
            ['2018', 1030, 540, 350],
            ['2019', 1030, 540, 350],
            ['2020', 1030, 540, 350],
            ['2021', 1030, 540, 350],
            ['2022', 1030, 540, 350],
            ['2023', 1030, 540, 350],
        ];
        return view('frontend.explore.bar', compact('data'));
    }
    public function lineChart()
    {
        
       
        $line = [
            'labels' => ['Year', 'Donation', 'program impact'],
            'data' =>  
            ['2014',  1000,      400],
            ['2015',  1170,      460],
            ['2016',  660,       1120],
            ['2017',  1030,      540],
            ['2018',  1000,      400],
            ['2019',  1170,      460],
            ['2020',  660,       1120],
            ['2021',  1030,      540],
            ['2022',  1000,      400],
            ['2023',  1170,      460],
            ['2024',  660,       1120],
            ['2025',  1030,      540]
        ];
        return view('frontend.explore.line', compact('line'));
    }
}
