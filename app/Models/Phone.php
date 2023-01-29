<?php

namespace App\Models;

use App\Traits\Relations\MorphedByClient;
use App\Traits\Relations\MorphedByCompanies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory, MorphedByClient, MorphedByCompanies;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'phone_number',
        'position',
    ];
}
