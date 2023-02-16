<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CompanySeeder::class,
            ClientSeeder::class,
            AddressSeeder::class,
            EmailSeeder::class,
            PhoneSeeder::class,
            AppointmentSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
