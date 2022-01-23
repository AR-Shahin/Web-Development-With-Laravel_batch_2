<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Editor',
            'email' => 'editor@mail.com',
            'password' => bcrypt('password'),
            'role' => 'editor'
        ]);
        User::create([
            'name' => 'Visitor',
            'email' => 'visitor@mail.com',
            'password' => bcrypt('password'),
            'role' => 'visitor'
        ]);
        Post::factory(10)->create();
    }
}
