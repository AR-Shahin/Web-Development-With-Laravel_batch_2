<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {

        # First way to insert data

        // $cus = new Customer();

        // $cus->name = 'Arif';
        // $cus->rate = 100;
        // $cus->type = 'admin';
        // $cus->is_active = true;
        // $cus->save();

        // $cus = Customer::create([
        //     'name' => 'Ars',
        //     'rate' => 2000,
        //     'type' => 'admin',
        //     'is_active' => false
        // ]);

        $data = null;
        // $data = Customer::where('name', 'shahin')->get();

        // $data = Customer::findOrFail($id);

        // $data = Customer::find(1)->update([
        //     'name' => 'Arif H',
        //     'rate' => 2000,
        //     'type' => 'admin',
        //     'is_active' => false
        // ]);

        Customer::find(1)->delete();
        return $data;
    }
}
