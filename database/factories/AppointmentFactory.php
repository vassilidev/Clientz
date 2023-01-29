<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Traits\Factories\HasAddress;
use App\Traits\Factories\HasClient;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    use HasClient, HasAddress;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        $client = $this->getClient();
        $hasAddress = fake()->boolean(80);
        $address = $hasAddress ? $this->getAddress() : null;
        $startDate = fake()->dateTimeThisMonth();

        return [
            'name'       => fake()->jobTitle,
            'url'        => (!$hasAddress ? fake()->url : null),
            'client_id'  => $client->id,
            'address_id' => $address?->id,
            'start_date' => $startDate,
            'end_date'   => Carbon::parse($startDate)->addHours(random_int(1, 7)),
            'note'       => fake()->realText(),
        ];
    }
}
