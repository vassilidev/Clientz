<?php

namespace App\Models;

use App\Enums\Client\GenderEnum;
use App\Traits\Relations\HasAppointments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Client extends Model
{
    use HasFactory, HasAppointments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'gender',
        'name',
        'surname',
        'note',
        'company_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'gender' => GenderEnum::class,
    ];

    /**
     * @return MorphToMany
     */
    public function emails(): MorphToMany
    {
        return $this->morphToMany(
            Email::class,
            'ownable',
            'emailables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }

    /**
     * @return MorphToMany
     */
    public function phones(): MorphToMany
    {
        return $this->morphToMany(
            Phone::class,
            'ownable',
            'phonables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }

    /**
     * @return MorphToMany
     */
    public function addresses(): MorphToMany
    {
        return $this->morphToMany(
            Address::class,
            'ownable',
            'addressables'
        )
            ->withTimestamps()
            ->withPivot(['position']);
    }

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
