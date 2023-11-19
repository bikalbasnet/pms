<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowAppointments extends Component
{
    public function render()
    {
        $appointments = Appointment::all();

        return view('livewire.appointment.show-appointments')->with([
            'appointments' => $appointments
        ]);
    }
}
