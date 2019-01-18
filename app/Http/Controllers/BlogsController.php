<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;
use App\Blog;




class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(5);

        return view('blogs.welcome', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store()
    {
        
        $validated=request()->validate([

            'title'=>['required','min:3'],
            
            'description'=>['required','max:1000']

        ]);

        Blog::create($validated);

        return redirect('/blogs');
    }

    public function show(Blog $blog)
    {

        $commentsForPaginate = \App\Blog::find($blog->id)->comments()->orderBy('created_at', 'DESC')->paginate(2);

        return view('blogs.show', compact('blog', 'commentsForPaginate'));

    }
}
