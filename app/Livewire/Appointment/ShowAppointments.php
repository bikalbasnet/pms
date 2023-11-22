<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use Livewire\Component;

class ShowAppointments extends Component
{
    public $filterDoctorId;

    public $searchKey;

    public $filterAppointmentDate = 'future'; // 'future' or 'past

    public function render()
    {
        $appointments = $this->filterDoctorId
            ? Appointment::where('doctor_id', $this->filterDoctorId)->orderBy('appointment_date', 'ASC')
            : Appointment::orderBy('appointment_date', 'DESC');

        if ($this->searchKey) {
            $appointments = $appointments->whereHas('patient', function ($query) {
                $query->where('name', 'like', "%$this->searchKey%")
                    ->orWhere('phone', 'like', "%$this->searchKey%");
            });
        }

        if ($this->filterAppointmentDate === 'future') {
            $appointments->where('appointment_date', '>=', now()->format('Y-m-d'));
        }
        $appointments = $appointments->get();

        return view('livewire.appointment.show-appointments')->with([
            'appointments' => $appointments
        ]);
    }
}
