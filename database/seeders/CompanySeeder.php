<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Company;
use Exception;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
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
            if (fake()->boolean()) {
                Company::factory()->create(['client_id' => $client->id]);
            }
        });
    }
}
