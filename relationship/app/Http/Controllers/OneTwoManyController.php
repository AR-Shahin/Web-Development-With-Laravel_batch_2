<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OneTwoManyController extends Controller
{
    function index()
    {
        $posts = null;
        // return  User::withOnly(['profile'])->get();
        $posts = Post::get();
        return view('relationship.one-to-many', compact('posts'));
    }
}
