<?php

namespace App\Traits\Relations\HasMany;

use App\Models\Client;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyClients
{
    /**
     * @return HasMany<Client>
     */
    public function client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}