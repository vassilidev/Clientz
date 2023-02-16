<?php

namespace App\Traits\Relations\MorphTo;

use App\Models\Email;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Emailable
{
    /**
     * @return MorphToMany<Email>
     */
    public function emails(): MorphToMany
    {
        return $this->morphToMany(
            Email::class,
            'ownable',
            'emailables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }
}