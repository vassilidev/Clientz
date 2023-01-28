<?php

namespace App\Observers;

use App\Models\Appointment;

class AppointmentObserver
{
    /**
     * Handle the Appointment "created" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function created(Appointment $appointment): void
    {
        $appointment->end_date_event = $appointment->end_date->addDay();
        $appointment->save();
    }

    /**
     * Handle the Appointment "updated" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function updated(Appointment $appointment): void
    {
        if ($appointment->getOriginal('end_date') !== $appointment->end_date) {
            $appointment->end_date_event = $appointment->end_date->addDay();
            $appointment->saveQuietly();
        }
    }
}
