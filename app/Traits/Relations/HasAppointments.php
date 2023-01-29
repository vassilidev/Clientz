<?php

namespace App\Traits\Relations;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasAppointments
{
    /**
     * @return HasMany<Appointment>
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
