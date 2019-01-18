<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Comment;


class BlogsCommentsController extends Controller
{
    public function store(Blog $blog)
    {
        
        $validated=request()->validate([

            'name'=>['required'],

            'emailid'=>['required'],

            'comment'=>['required']

        ]);

        Comment::create($validated+['blog_id'=>$blog->id]);

        return back();
    }
}

