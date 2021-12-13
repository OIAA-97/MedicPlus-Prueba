<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 30),
            'title' => $this->faker->unique()->sentence,
            'details' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
