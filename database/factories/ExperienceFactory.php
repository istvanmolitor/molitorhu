<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => fake()->jobTitle(),
            'role_en' => fake()->jobTitle(),
            'company' => fake()->company(),
            'company_en' => fake()->company(),
            'started_year' => fake()->year(),
            'ended_year' => fake()->year(),
            'description' => fake()->sentence(),
            'description_en' => fake()->sentence(),
            'sort_order' => 0,
        ];
    }
}
