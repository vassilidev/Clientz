<?php

namespace App\Traits\Relations\MorphTo;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Phonable
{
    /**
     * @return MorphToMany<Phone>
     */
    public function phones(): MorphToMany
    {
        return $this->morphToMany(
            Phone::class,
            'ownable',
            'phonables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }
}