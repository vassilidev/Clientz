<?php

namespace Database\Factories;

use App\Models\Client;
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
        $client = $this->getClient();

        return [
            'label' => fake()->jobTitle(),
            'phone_number' => fake()->phoneNumber(),
            'position' => $client->phones()->max('position') + 1,
            'client_id' => $client->id,
        ];
    }
}
