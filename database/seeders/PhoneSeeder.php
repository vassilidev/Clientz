<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Phone;
use Exception;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
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
            $client->phones()->saveMany(Phone::factory(random_int(1, 2))->create(), ['position' => 1]);
        });
    }
}
