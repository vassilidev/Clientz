<?php

namespace App\Models;

use App\Traits\Relations\HasMany\HasManyClients;
use App\Traits\Relations\MorphTo\Addressable;
use App\Traits\Relations\MorphTo\Emailable;
use App\Traits\Relations\MorphTo\Phonable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory, Phonable, Emailable, Addressable, HasManyClients;

    /**
     * @var string[]
     */
    protected $fillable = [
        'company_name',
        'logo_url',
    ];
}
