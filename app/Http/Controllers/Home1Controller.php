<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function index()
    {       
       
        return view('dashboard')
                    ->with('post_count', Post::all()->count())
                    ->with('trashed_count', Post::onlyTrashed()->get()->count())
                    ->with('user_count', User::all()->count())
                    ->with('categories_count', Category::all()->count());
    }

}
