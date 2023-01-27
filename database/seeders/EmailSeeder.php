<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Email;
use Exception;
use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
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
            Email::factory(random_int(1, 3))->create(['client_id' => $client->id]);
        });
    }
}
