<?php

namespace App\Traits\Relations\MorphTo;

use App\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Addressable
{
    /**
     * @return MorphToMany<Address>
     */
    public function addresses(): MorphToMany
    {
        return $this->morphToMany(
            Address::class,
            'ownable',
            'addressables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }
}