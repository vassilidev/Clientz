<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToAppointment
{
    /**
     * @return BelongsTo<Appointment>
     */
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
