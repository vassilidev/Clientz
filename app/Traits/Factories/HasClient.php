<?php

namespace App\Traits\Factories;


use App\Models\Client;

trait HasClient
{
    private function getClient()
    {
        return Client::query()->inRandomOrder()->first() ?? Client::factory()->create()->first();
    }
}
