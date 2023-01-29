<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Appointment;
use App\Models\Client;
use App\Traits\Factories\HasModel;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    use HasModel;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        $client = $this->getModel(Client::class);
        $hasAddress = fake()->boolean(80);
        $address = $hasAddress ? $this->getModel(Address::class) : null;
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
