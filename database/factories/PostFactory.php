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
    public function definition()
    {
        return [
            'description' => fake() -> text(),
            'image' => fake()->boolean() ? fake()->imageUrl() : null,
            'publication_dateTime' => fake() -> dateTimeBetween('-30 years', 'now', )
        ];
    }
}
