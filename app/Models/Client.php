<?php

namespace App\Models;

use App\Enums\Client\GenderEnum;
use App\Traits\Relations\BelongsTo\BelongsToCompany;
use App\Traits\Relations\HasMany\HasManyAppointments;
use App\Traits\Relations\MorphTo\Addressable;
use App\Traits\Relations\MorphTo\Emailable;
use App\Traits\Relations\MorphTo\Phonable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, HasManyAppointments, BelongsToCompany, Phonable, Emailable, Addressable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'gender',
        'name',
        'surname',
        'note',
        'company_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'gender' => GenderEnum::class,
    ];
}
