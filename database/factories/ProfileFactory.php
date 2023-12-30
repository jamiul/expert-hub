<?php

namespace Database\Factories;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => ProfileType::Expert,
            'expertise_id' => fake()->randomElement(range(15, 25)),
            'hourly_rate' => fake()->randomElement([50,60,70,80,90,100,110,120,130,140,150,160,170,180,190,200]),
            'biography' => fake()->paragraph(),
            'status' => ProfileStatus::Approved,
        ];
    }
}
