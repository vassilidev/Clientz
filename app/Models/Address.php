<?php

namespace App\Models;

use App\Traits\Relations\HasMany\HasManyAppointments;
use App\Traits\Relations\MorphTo\MorphedByClient;
use App\Traits\Relations\MorphTo\MorphedByCompanies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory, HasManyAppointments, MorphedByCompanies, MorphedByClient;

    /**
     * @var string[]
     */
    protected $fillable = [
        'label',
        'street_address',
        'zip_code',
        'city',
        'position',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin'          => 'boolean',
    ];
}
