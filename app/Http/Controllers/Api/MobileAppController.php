<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\ProjectResource;

class MobileAppController extends Controller
{

    public function projects(Request $request)  {
        
        $status = $request->input('status');
    
        if ($status === 'Completed' || $status === 'Ongoing') {
    
            $projects = Project::paginate(10);
    
        } else {
            
            $projects = Project::paginate(10);
        }
        
        return ProjectResource::collection($projects);
    }
    public function blogs()  {
        
        $blogs=Post::paginate(10);
        return PostResource::collection($blogs);
    }
    public function events()  {
        
        $events=Event::paginate(10);
        return EventResource::collection($events);
    }
}
