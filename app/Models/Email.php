<?php

namespace App\Models;

use App\Traits\Relations\MorphTo\MorphedByClient;
use App\Traits\Relations\MorphTo\MorphedByCompanies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory, MorphedByCompanies, MorphedByClient;

    /**
     * @var string[]
     */
    protected $fillable = [
        'label',
        'email_address',
        'position',
        'city',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin'          => 'boolean',
    ];
}
