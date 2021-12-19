<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++) {
            Profile::create([
                'user_id' => $i,
                'phone' => rand(1000, 500000),
                'address' => 'Dhaka ' . $i,
                'zip_code' => $i % 2 == 0 ? rand(100, 1000) : null,
            ]);
        }
    }
}
