<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Client;
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
        $client = Client::query()->inRandomOrder()->first() ?? $client = Client::factory(1)->create()->first();

        return [
            'label' => fake()->jobTitle(),
            'street_address' => fake()->streetAddress(),
            'zip_code' => fake()->postcode(),
            'city' => fake()->city(),
            'position' => $client->addresses()->max('position') + 1,
            'client_id' => $client->id,
        ];
    }
}
