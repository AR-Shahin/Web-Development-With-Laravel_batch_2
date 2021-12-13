<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {

        return DB::select('SELECT * FROM users');
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'Oddmddi',
                'vote' => 1,
                'address' => 'Dhaka',
                'is_admin' => true,
                'role' => 'admin',
                'price' => 1.5
            ],
            [
                'name' => 'Odmi',
                'vote' => 1,
                'address' => 'Dhaka',
                'is_admin' => true,
                'role' => 'admin',
                'price' => 1.5
            ],

        ]);
        return 1;
    }
}
