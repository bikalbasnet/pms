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

        $patient = $this->form->all();
        $patient['dob'] = now()->subYears($this->form->ageYear)->subMonths($this->form->ageMonth)->format('Y-m-d');
        $patient['patient_id'] = 'P-' . rand(10000, 99999);

        Patient::create($patient);

        return redirect()->to('/patient')->with('message', 'Patient created.');
    }

    public function render()
    {
        return view('livewire.patient.create-patient');
    }
}
