<?php

declare(strict_types=1);

namespace App\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;

class CreateDoctor extends Component
{
    public DoctorForm $form;

    public function save()
    {
        $this->validate();

        $doctor = $this->form->all();
        $doctor['registration_number'] = $this->form->registrationNumber;

        Doctor::create($doctor);

        return redirect()->to('/doctor')->with('message', 'Doctor created.');
    }

    public function render()
    {
        return view('livewire.doctor.create-doctor');
    }
}
