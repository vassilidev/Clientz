<?php

namespace Database\Seeders;

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
        Company::factory(10)->create();
    }
}
