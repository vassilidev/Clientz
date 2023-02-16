<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Throwable;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Throwable
     */
    public function run(): void
    {
        Client::factory(1000)->create();
    }
}
