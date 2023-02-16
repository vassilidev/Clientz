<?php

namespace App\Traits\Relations\HasMany;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyTransactions
{
    /**
     * @return HasMany<Transaction>
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
