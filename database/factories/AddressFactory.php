<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Client;
use App\Traits\Factories\HasClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Address>
 */
class AddressFactory extends Factory
{
    use HasClient;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = $this->getClient();

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
