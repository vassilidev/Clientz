<?php

namespace App\Traits\Factories;

use App\Models\Address;

trait HasAddress
{
    private function getAddress()
    {
        return Address::query()->inRandomOrder()->first() ?? Address::factory()->create()->first();
    }
}
