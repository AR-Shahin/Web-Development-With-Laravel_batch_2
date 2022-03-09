<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Man Sub cat 1',
            'slug' => str('Man Sub cat 1')->slug()
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Man Sub cat 2',
            'slug' => str('Man Sub cat 2')->slug()
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Man Sub cat 3',
            'slug' => str('Man Sub cat 3')->slug()
        ]);

        // 2
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Woman Sub cat 1',
            'slug' => str('Woman Sub cat 1')->slug()
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Woman Sub cat 2',
            'slug' => str('Woman Sub cat 2')->slug()
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Woman Sub cat 3',
            'slug' => str('Woman Sub cat 3')->slug()
        ]);

        // 3
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Child Sub cat 1',
            'slug' => str('Child Sub cat 1')->slug()
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Child Sub cat 2',
            'slug' => str('Child Sub cat 2')->slug()
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Child Sub cat 3',
            'slug' => str('Child Sub cat 3')->slug()
        ]);
    }
}
