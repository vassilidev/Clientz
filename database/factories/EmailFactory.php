<?php

namespace Database\Factories;

use App\Models\Email;
use App\Traits\Factories\HasClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Email>
 */
class EmailFactory extends Factory
{
    use HasClient;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->unique()->jobTitle(),
            'email_address' => fake()->unique()->companyEmail(),
        ];
    }
}
