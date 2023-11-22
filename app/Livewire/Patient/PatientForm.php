<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Livewire\Attributes\Rule;
use Livewire\Form;

    class PatientForm extends Form
    {
        public ?Patient $patient;

        public $patientId;

        #[Rule('required|min:3')]
        public $name;

        #[Rule('required')]
        public $gender;

        public $phone;

        public $address;

        public $ageYear;

        public $ageMonth = 0;

        public $dob;

        #[Rule('email|nullable')]
        public $email;

        public $notes;

        public function setPatient(Patient $patient)
        {
            $this->patient = $patient;

            $this->patientId = $patient->patient_id;
            $this->name = $patient->name;
            $this->gender = $patient->gender;
            $this->phone = $patient->phone;
            $this->address = $patient->address;
            $this->email = $patient->email;
            $this->notes = $patient->notes;

            $this->dob = $patient->dob;
            $this->ageYear = now()->diffInYears($patient->dob);
            $this->ageMonth = now()->subYears($this->ageYear)->diffInMonths($patient->dob);

        }

        public function update()
        {
            $patient = $this->all();;
            $patient['dob'] = now()->subYears($patient['ageYear'])->subMonths($patient['ageMonth'])->format('Y-m-d');

            $this->patient->update($patient);
        }
    }
