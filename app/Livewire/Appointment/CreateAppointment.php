<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Collection;
use Livewire\Component;

class CreateAppointment extends Component
{
    public AppointmentForm $form;

    public Collection $patientSearchable;

    public Collection $doctorSearchable;

    public function mount()
    {
        $this->searchPatients();
        $this->searchDoctors();
    }

    public function searchPatients(string $value = '')
    {
        $selectedOption = Patient::where('id', $this->form->patientId)->orderBy('name')->get();

        $this->patientSearchable = Patient::query()
            ->where('name', 'like', "%$value%")
            ->orWhere('phone', 'like', "%$value%")
            ->take(5)
            ->orderBy('name')
            ->get()
            ->merge($selectedOption);
    }

    public function searchDoctors(string $value = '')
    {
        $selectedOption = Doctor::where('id', $this->form->doctorId)->orderBy('name')->get();

        $this->doctorSearchable = Doctor::query()
            ->where('name', 'like', "%$value%")
            ->orWhere('phone', 'like', "%$value%")
            ->take(5)
            ->orderBy('name')
            ->get()
            ->merge($selectedOption);
    }

    public function save()
    {
        $this->validate();

        $appointment = $this->form->all();
        $appointment['appointment_date'] = $this->form->date . ' ' . $this->form->time;
        $appointment['patient_id'] = $this->form->patientId;
        $appointment['doctor_id'] = $this->form->doctorId;

        Appointment::create($appointment);

        return redirect()->to('/appointment')->with('message', 'Appointment created.');
    }
}
