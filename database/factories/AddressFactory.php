<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label'          => fake()->jobTitle(),
            'street_address' => fake()->streetAddress(),
            'zip_code'       => fake()->postcode(),
            'city'           => fake()->city(),
        ];
    }
}
