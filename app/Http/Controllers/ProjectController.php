<?php

namespace App\Http\Controllers;

use App\Models\Project;


class ProjectController extends Controller
{
    public function project($status=null)
    {
        //dd($status);
        if ($status === 'Completed' || $status === 'Ongoing') {

            $projects = Project::where('status', $status)->paginate(6);

        } else {
            
            $projects = Project::paginate(6);
        }

        return view('frontend.projects.project', compact('projects'));
    }
    public function projectDetail($slug)
    {
       
            $project = Project::where('slug', $slug)->firstOrFail();
      //    dd($project);
        
            $recentprojects = Project::where('id', '!=', $project->id)->take(5)->get();
        
            return view('frontend.projects.project-details', compact( 'project', 'recentprojects'));

    }
   
    
 
}
