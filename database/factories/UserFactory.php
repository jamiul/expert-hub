<?php

namespace Database\Factories;

use App\Enums\ProfileType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'active_profile' => ProfileType::Expert,
            'title' => fake()->title(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->firstName(),
            'username' => Str::uuid(),
            'email' => fake()->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'country_id' => fake()->randomElement(range(1, 50)),
            'remember_token' => Str::random(10),
        ];
    }
}
