<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'degree' => fake()->words(3, true),
            'school' => fake()->company(),
            'started_year' => fake()->year(),
            'ended_year' => fake()->year(),
            'sort_order' => 0,
        ];
    }
}
