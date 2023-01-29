<?php

namespace Database\Factories;

use App\Models\Phone;
use App\Traits\Factories\HasClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Phone>
 */
class PhoneFactory extends Factory
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
            'label'        => fake()->unique()->jobTitle(),
            'phone_number' => fake()->unique()->phoneNumber(),
        ];
    }
}
