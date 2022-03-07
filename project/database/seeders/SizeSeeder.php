<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ["XL", 'S', 'L', 'M'];
        foreach ($sizes as $size) {
            Size::create([
                'name' => $size,
                'slug' => str($size)->slug()
            ]);
        }
    }
}
