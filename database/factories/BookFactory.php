<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'author' => fake()->name(),
            'year' => fake()->numberBetween(1487, 2023),
            'genre' => fake()->text(10),
            'tag' => fake()->text(10),
            'note' => fake()->numberBetween(0, 5),
            'image' => fake()->url()
        ];
    }
}
