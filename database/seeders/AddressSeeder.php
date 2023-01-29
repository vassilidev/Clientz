<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
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
        Client::all()->each(static function (Client $client) {
            $client->addresses()->save(Address::factory()->create(), ['position' => 1]);
        });
    }
}
