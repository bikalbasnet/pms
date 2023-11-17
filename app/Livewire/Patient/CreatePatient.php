<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class CreatePatient extends Component
{
    public PatientForm $form;

    public function save()
    {
        $this->validate();

        Patient::create(
            $this->form->all()
        );

        return redirect()->to('/patient')->with('message', 'Patient created.');
    }

    public function render()
    {
        return view('livewire.patient.create-patient');
    }
}
