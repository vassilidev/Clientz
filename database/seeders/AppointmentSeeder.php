<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Client;
use Exception;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        Client::all()->each(function (Client $client) {
            if (fake()->boolean(33)) {
                Appointment::factory(random_int(1,2))->create(['client_id' => $client->id]);
            }
        });
    }
}
