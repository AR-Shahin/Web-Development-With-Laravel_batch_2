<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Thana;
use App\Models\Village;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(20)->create();
        $this->call([
            ProfileSeeder::class,
            TagSeeder::class
        ]);

        for ($i = 0; $i <= 3; $i++) {
            District::create([
                'name' => Str::random(5)
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            Thana::create([
                'district_id' => rand(1, 4),
                'name' => Str::random(5)
            ]);
        }
        for ($i = 0; $i <= 20; $i++) {
            Village::create([
                'thana_id' => rand(1, 10),
                'name' => Str::random(5)
            ]);
        }
    }
}
