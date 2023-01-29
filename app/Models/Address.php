<?php

namespace App\Models;

use App\Traits\Relations\HasAppointments;
use App\Traits\Relations\MorphedByClient;
use App\Traits\Relations\MorphedByCompanies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory, HasAppointments, MorphedByCompanies, MorphedByClient;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'street_address',
        'zip_code',
        'city',
        'position',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];
}
