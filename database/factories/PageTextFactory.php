<?php

namespace Database\Factories;

use App\Models\PageText;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PageText>
 */
class PageTextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key' => fake()->unique()->slug(2, false),
            'value' => fake()->sentence(),
        ];
    }
}
