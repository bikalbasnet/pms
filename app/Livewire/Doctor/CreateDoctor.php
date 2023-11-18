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

        Doctor::create($this->form->all());

        return redirect()->to('/doctor')->with('message', 'Doctor created.');
    }

    public function render()
    {
        return view('livewire.doctor.create-doctor');
    }
}
