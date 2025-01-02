<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
          'slug' => Str::slug($this->faker->sentence, '-'),
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'content' => $this->faker->paragraph(5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
