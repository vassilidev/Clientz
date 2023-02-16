<?php

namespace App\Traits\Relations\MorphTo;

use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait MorphedByCompanies
{
    /**
     * @return MorphToMany<Company>
     */
    public function companies(): MorphToMany
    {
        return $this->morphedByMany(Company::class, 'ownable');
    }
}
