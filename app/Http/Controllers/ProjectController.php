<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function Project()
    {

        $projects = Project::paginate(9);

        return view('frontend.projects.project', compact('projects'));
    }
    public function ProjectDetail($slug)
    {
       
            $project = Project::where('slug', $slug)->firstOrFail();
      //    dd($project);
        
            $recentprojects = Project::where('id', '!=', $project->id)->take(5)->get();
        
            return view('frontend.projects.project-details', compact( 'project', 'recentprojects'));

    }
    public function showProjects($status)
    {
        if ($status == 'Completed') {

            $completedProjects = Project::where('status', '=', 'Completed')->paginate(6); 

            return view('frontend.projects.complete', ['completedProjects' => $completedProjects]);

        } elseif ($status == 'Ongoing') {

            $ongoingProjects = Project::where('status', '=', 'Ongoing')->paginate(6);

            return view('frontend.projects.ongoing', ['ongoingProjects' => $ongoingProjects]);
        }
    }
 
}
