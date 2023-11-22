<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class UpdatePatient extends Component
{
    public PatientForm $form;

    public function mount(Patient $patient)
    {
        $this->form->setPatient($patient);
    }

    public function save()
    {
        $this->validate();

        $patient = $this->form->all();
        $patient['dob'] = now()->subYears($this->form->ageYear)->subMonths($this->form->ageMonth)->format('Y-m-d');

        $this->form->update();

        return redirect()->to('/patient')->with('message', 'Patient created.');
    }

    public function render()
    {
        return view('livewire.patient.create-patient');
    }
}
