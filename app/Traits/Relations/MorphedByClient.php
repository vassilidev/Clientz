<?php

namespace App\Traits\Relations;

use App\Models\Client;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait MorphedByClient
{
    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'ownable');
    }
}
