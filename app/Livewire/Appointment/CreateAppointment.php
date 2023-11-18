<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Collection;
use Livewire\Component;

class CreateAppointment extends Component
{
    public ?int $patientSearchableId = null;

    public Collection $patientSearchable;

    public ?int $doctorSearchableId = null;

    public Collection $doctorSearchable;

    public function mount()
    {
        $this->searchPatients();
        $this->searchDoctors();
    }

    public function searchPatients(string $value = '')
    {
        $selectedOption = Patient::where('id', $this->patientSearchableId)->orderBy('name')->get();

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
        $selectedOption = Doctor::where('id', $this->patientSearchableId)->orderBy('name')->get();

        $this->doctorSearchable = Doctor::query()
            ->where('name', 'like', "%$value%")
            ->orWhere('phone', 'like', "%$value%")
            ->take(5)
            ->orderBy('name')
            ->get()
            ->merge($selectedOption);
    }
}
