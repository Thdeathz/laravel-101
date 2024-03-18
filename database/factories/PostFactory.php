<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6, 10),
            'slug' => fake()->unique()->slug(),
            'excerpt' => fake()->sentence(12, 18),
            'body' => fake()->paragraph(),
            'category_id' => random_int(1, 10),
            'user_id' => random_int(1, 10)
        ];
    }
}
