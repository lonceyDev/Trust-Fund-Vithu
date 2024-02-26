<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Post::paginate(6);
        
        return view('frontend.explore.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        try {

            $blog = Post::where('slug', $slug)->firstOrFail();

            $recentBlogs = Post::where('id', '!=', $blog->id)->take(5)->get();

            return view('frontend.explore.blog-details', compact('blog', 'recentBlogs'));

        } catch (ModelNotFoundException $e) {

            return redirect()->route('home')->with('error', 'Blog not found');
        }
    }

}
