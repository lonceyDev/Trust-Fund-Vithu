<?php

namespace App\Http\Controllers;

use App\Models\Post;


class BlogController extends Controller
{
    public function Blog()
    {
        $blogs = Post::paginate(6);
        
        return view('frontend.explore.blog', compact('blogs'));
    }

    public function BlogDetail($slug)
    {

            $blog = Post::where('slug', $slug)->firstOrFail();

            $recentBlogs = Post::where('id', '!=', $blog->id)->take(5)->get();

            return view('frontend.explore.blog-details', compact('blog', 'recentBlogs'));

    }
}
