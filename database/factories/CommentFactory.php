<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => \App\Models\User::factory(),
            'post_id' => \App\Models\Post::factory(),
            'body' => $this->faker->sentence(10)
        ];
    }
}
