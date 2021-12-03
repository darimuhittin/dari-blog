<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\Post::factory(10)->create();

        \App\Models\Post::factory(3)->create([
            'user_id' => 1
        ]);

        \App\Models\Post::factory(3)->create([
            'user_id' => 2
        ]);

        \App\Models\Post::factory(3)->create([
            'category_id' => 1
        ]);

        \App\Models\Post::factory(3)->create([
            'category_id' => 2
        ]);

        \App\Models\Comment::factory(5)->create([
            'post_id' => 1
        ]);

        \App\Models\Comment::factory(7)->create([
            'post_id' => 2
        ]);

        \App\Models\Comment::factory(3)->create([
            'post_id' => 3
        ]);
    }
}
