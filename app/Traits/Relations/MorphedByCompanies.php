<?php

namespace App\Traits\Relations;

use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait MorphedByCompanies
{
    public function companies(): MorphToMany
    {
        return $this->morphedByMany(Company::class, 'ownable');
    }
}
