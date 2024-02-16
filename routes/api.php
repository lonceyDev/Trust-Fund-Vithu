<?php

use App\Http\Resources\EventResource;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\ProjectResource;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blog',function(){

     $blogs=Post::paginate(10);
     return PostResource::collection($blogs);
});
Route::get('/project', function (Request $request) {
    $status = $request->input('status');
    
    if ($status === 'Completed' || $status === 'Ongoing') {

        $projects = Project::paginate(10);

    } else {
        
        $projects = Project::paginate(10);
    }
    
    return ProjectResource::collection($projects);
});
Route::get('/event',function(){

    $events=Event::paginate(10);
    return EventResource::collection($events);
});


