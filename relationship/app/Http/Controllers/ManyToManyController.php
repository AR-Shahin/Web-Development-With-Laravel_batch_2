<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    function index()
    {
        return Tag::with('posts')->find(1);
        //  $post =   Post::find(1)->tags()->attach([1, 3]);
        // $post =   Post::find(1)->tags()->detach([3]);
        $post =   Post::find(1)->tags()->sync([1, 3, 2, 4]);

        $post = Post::with('tags')->find(1);
        return $post;
    }
}
