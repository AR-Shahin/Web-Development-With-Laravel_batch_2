<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    function index()
    {
        // $users = User::get();
        // $users->load('profile');

        // $users = User::whereHas('profile', function ($q) {
        //     return $q->where('zip_code', '>', 400);
        // })->get();

        // $users = User::whereHas('profile', function ($q) {
        //     return $q->whereNotNull('zip_code');
        // })->get();

        // $users = User::doesntHave('profile')->get();


        // $users = User::whereDoesntHave('profile', function ($query) {
        //     $query->where('name', 'like', '%a');
        // })->get();

        // return User::find(8)->profile()->create([
        //     'address' => "Pabna",
        //     'zip_code' => 963,
        //     'phone' => 1236666
        // ]);
        $profiles = Profile::get();
        return view('relationship.one-to-one', compact('profiles'));
    }
}
