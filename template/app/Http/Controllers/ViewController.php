<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViewRequest;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {

        $data = [];
        $data['numbers'] = [10, 20, 40, 50];
        $data['users'] = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
        $data['text'] = '<h1>Hello World!!</h1>';
        if (view()->exists('index')) {
            return view('index', $data);
        } else {
            abort(404);
        }
    }

    public function register(ViewRequest $request)
    {

        // $request->validate(
        //     [
        //         'name' => ['required', 'min:2', 'max:5'],
        //         'password' => ['required', 'confirmed'],
        //         'file' => ['required', 'size:1024', 'mimes:jpg,mp4,pdf'],
        //     ]
        // );
        return $request->all();
    }
}
