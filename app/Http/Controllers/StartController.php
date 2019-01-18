<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class StartController extends Controller
{
    public function start()
    {
        return redirect()->action('BlogsController@index');
    }
}
