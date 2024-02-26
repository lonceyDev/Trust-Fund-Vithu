<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectController extends Controller
{
    public function projectGet(Request $request)
    {
        $projects = Project::all();
       // dd($projects);
        return view('frontend.projects.project', compact('projects'));

        // $status = $request->input('status');

        // if ($status === 'Ongoing') {

        //     $projects = Project::where('status', 'Ongoing')->get();

        // } elseif ($status === 'Completed') {

        //     $projects = Project::where('status', 'Completed')->get();

        // } else {

        //     $projects = Project::all();
        // }

        // return view('frontend.projects.project', compact('projects'));
    }

    public function projectDetail($slug)
    {
        try {

            $project = Project::where('slug', $slug)->firstOrFail();

            $recentprojects = Project::where('id', '!=', $project->id)->take(5)->get();

            return view('frontend.projects.project-details', compact('project', 'recentprojects'));

        } catch (ModelNotFoundException $e) {

            return redirect()->route('home')->with('error', 'Project not found');
        }
    }
}
