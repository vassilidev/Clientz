<?php

namespace Database\Factories;

use App\Enums\Client\GenderEnum;
use App\Models\Client;
use App\Models\Company;
use App\Traits\Factories\HasModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    use HasModel;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hasCompany = fake()->boolean();
        $company = ($hasCompany) ? $this->getModel(Company::class) : null;

        return [
            'gender'     => fake()->randomElement(GenderEnum::cases()),
            'name'       => fake()->firstName(),
            'surname'    => fake()->lastName(),
            'note'       => fake()->realText(250),
            'company_id' => $company,
        ];
    }
}
