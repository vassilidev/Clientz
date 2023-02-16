<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToCompany
{
    /**
     * @return BelongsTo<Company>
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}