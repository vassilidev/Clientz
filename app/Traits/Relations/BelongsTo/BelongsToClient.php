<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Client;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToClient
{
    /**
     * @return BelongsTo<Client>
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}