<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function index()
    {

        # Insert Data

        // DB::table('students')->insert([
        //     [
        //         'name' => 'Arif Hossain',
        //         'vote' => 15,
        //         'city' => 'Cumilla',
        //         'is_admin' => true
        //     ],
        //     [
        //         'name' => 'Asik',
        //         'vote' => 15,
        //         'city' => 'Pabna',
        //         'is_admin' => false
        //     ],
        //     [
        //         'name' => 'Shahin',
        //         'vote' => 5,
        //         'city' => 'Cumilla',
        //         'is_admin' => true
        //     ]
        // ]);


        // return  DB::table('students')->get(['id', 'name', 'vote']);
        $data = null;
        // $data = DB::table('students')
        //     ->where('city', '=', 'cumilla')
        //     ->where('vote', '>=', 10)
        //     ->get();

        // $data = DB::table('students')
        //     ->where('name', 'like', '%h%')
        //     ->get();
        // $data = DB::table('students')
        //     ->whereNotBetween('vote', [5, 15])
        //     ->get(['vote']);

        // $data =  DB::table('students')
        //     ->whereIn('id', [1, 3])
        //     ->get();

        // $data =  DB::table('students')
        //     ->whereNotNull('created_at')
        //     ->get();

        // $data = DB::table('students')->distinct('city')->get();

        // $data = DB::select('SELECT * from students WHERE name = "Shahin"');

        // $data = DB::table('students')
        //     ->leftJoin('subjects', 'students.id', '=', 'subjects.student_id')
        //     // ->select('students.*', 'subjects.name')
        //     ->get();


        $data = Student::all();


        return $data;
    }
}
