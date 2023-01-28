<?php

namespace Database\Factories;

use App\Models\Client;
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
        $client = $this->getClient();

        return [
            'label' => fake()->jobTitle(),
            'email_address' => fake()->companyEmail(),
            'position' => $client->emails()->max('position') + 1,
            'client_id' => $client->id,
        ];
    }
}
