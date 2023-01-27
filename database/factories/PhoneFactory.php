<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Phone>
 */
class PhoneFactory extends Factory
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
            'phone_number' => fake()->phoneNumber(),
            'position' => $client->phones()->max('position') + 1,
            'client_id' => $client->id,
        ];
    }
}
