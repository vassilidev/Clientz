<?php

namespace App\Traits\Relations\HasMany;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyAppointments
{
    /**
     * @return HasMany<Appointment>
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
