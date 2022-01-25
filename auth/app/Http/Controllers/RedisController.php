<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RedisController extends Controller
{
    public function getRedis()
    {

        return cache()->get('name');
        return Cache::get('custom');
        return "GET REDIS";
    }

    public function setRedis()
    {
        cache(['name' => 'Shahin'], 10);
        Cache::put('custom', "Redis Data Change", 10);
        return "SET REDIS";
    }
    public function deleteRedis()
    {
        Post::create(['title' => 'New Post', 'user_id' => 1]);
        Cache::forget('custom');
        Cache::flush();
        return "Remove REDIS";
    }


    public function cache()
    {
        $posts = Cache::rememberForever('posts', function () {
            return Post::latest()->get();
        });

        return view('cache', compact('posts'));
    }
}
