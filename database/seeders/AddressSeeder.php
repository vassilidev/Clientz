<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Client::all()->each(function (Client $client) {
            Address::factory()->create(['client_id' => $client->id]);
        });
    }
}
