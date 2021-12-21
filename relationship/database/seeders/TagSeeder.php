<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['PHP', 'LALAVEL', 'JS', 'PYTHON'];
        foreach ($data as $d) {
            Tag::create(
                [
                    'name' => $d
                ]
            );
        }
    }
}
