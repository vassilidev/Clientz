<?php

namespace App\Observers;

use App\Models\Appointment;

class AppointmentObserver
{
    /**
     * Handle the Appointment "created" event.
     *
     * @param Appointment $appointment
     *
     * @return void
     */
    public function created(Appointment $appointment): void
    {
        $appointment->end_date_event = $appointment->end_date->addDay();
        $appointment->saveQuietly();
    }

    /**
     * Handle the Appointment "updated" event.
     *
     * @param Appointment $appointment
     *
     * @return void
     */
    public function updated(Appointment $appointment): void
    {
        if ($appointment->getOriginal('end_date') !== $appointment->end_date) {
            $appointment->end_date_event = $appointment->end_date->addDay();
        }

        if (!is_null($appointment->total_amount) && is_null($appointment->getOriginal('total_amount'))) {
            $appointment->due_amount = $appointment->total_amount;
        }

        $appointment->saveQuietly();
    }
}
