<?php

namespace App\Http\Controllers;

use App\Models\User;
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


    function scope()
    {
        // $data = null;
        // $data = User::IsPopular()->get();
        // return $data->count();
        // return User::create([
        //     'name' => 'ars111',
        //     'vote' => 123,
        //     'is_admin' => false,
        //     'price' => 100,
        //     'address' => 'Dhaka'
        // ]);

        User::find(2)->delete();
    }
}
