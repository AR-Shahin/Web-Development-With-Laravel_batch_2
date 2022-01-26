<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HTTPClientControler extends Controller
{

    public function index()
    {
        $url = "http://127.0.0.1:8001/api/users";
        // Http::post($url, [
        //     "name" => "Arif",
        //     "email" => 'a@mail.com',
        //     'password' => 12
        // ]);

        $response =  Http::get($url);

        dd($response->status());
    }
}
