<?php

declare(strict_types=1);

namespace App\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;

class UpdateDoctor extends Component
{
    public DoctorForm $form;

    public function mount(Doctor $doctor)
    {
        $this->form->setDoctor($doctor);
    }

    public function save()
    {
        $this->validate();

        $this->form->update();

        return redirect()->to('/doctor')->with('message', 'Doctor Updated.');
    }

    public function render()
    {
        return view('livewire.doctor.create-doctor');
    }
}
