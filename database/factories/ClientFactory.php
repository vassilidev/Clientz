<?php

namespace Database\Factories;

use App\Enums\Client\GenderEnum;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gender' => fake()->randomElement(GenderEnum::cases()),
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'company' => fake()->company(),
            'note' => fake()->realText(250),
        ];
    }
}
