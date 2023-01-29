<?php

namespace App\Models;

use App\Traits\Relations\MorphTo\MorphedByClient;
use App\Traits\Relations\MorphTo\MorphedByCompanies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory, MorphedByClient, MorphedByCompanies;

    /**
     * @var string[]
     */
    protected $fillable = [
        'label',
        'phone_number',
        'position',
    ];
}
