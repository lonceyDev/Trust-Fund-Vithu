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

     $blogs=Post::orderBy('publish_at')->get();
     return PostResource::collection($blogs);
});

Route::get('/project',function(){

    $projects=Project::orderBy('start_date')->get();
    return ProjectResource::collection($projects);
});
Route::get('/ongoing',function(){

    $projects= Project::where('status', '=', 'Ongoing')->get();
    return ProjectResource::collection($projects);
});
Route::get('/complete',function(){

    $projects= Project::where('status', '=', 'Completed')->get();
    return ProjectResource::collection($projects);
});

Route::get('/event',function(){

    $events=Event::orderBy('events_at')->get();
    return EventResource::collection($events);
});


