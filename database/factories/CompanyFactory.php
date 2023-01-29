<?php

namespace Database\Factories;

use App\Models\Company;
use App\Traits\Factories\HasClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
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
            'company_name' => fake()->company(),
            'logo_url'     => fake()->imageUrl(),
        ];
    }
}
