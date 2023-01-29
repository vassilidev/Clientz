<?php

namespace App\Traits\Relations\MorphTo;

use App\Models\Client;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait MorphedByClient
{
    /**
     * @return MorphToMany<Client>
     */
    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'ownable');
    }
}
