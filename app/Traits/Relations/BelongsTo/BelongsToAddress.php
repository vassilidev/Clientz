<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Address;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToAddress
{
    /**
     * @return BelongsTo<Address>
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}