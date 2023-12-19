<?php

declare(strict_types=1);

namespace App\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Attributes\Rule;
use Livewire\Form;

class DoctorForm extends Form
{
    public ?Doctor $doctor = null;

    #[Rule('required')]
    public $name;

    public $registrationNumber;

    public $specialization;

    public $phone;

    #[Rule('nullable|email')]
    public $email;

    public $address;

    public $notes;

    public function setDoctor(Doctor $doctor)
    {
        $this->doctor = $doctor;

        $this->name = $this->doctor->name;
        $this->registrationNumber = $this->doctor->registration_number;
        $this->specialization = $this->doctor->specialization;
        $this->phone = $this->doctor->phone;
        $this->email = $this->doctor->email;
        $this->address = $this->doctor->address;
        $this->notes = $this->doctor->notes;
    }

    public function update()
    {
        $doctor = $this->all();
        $doctor['registration_number'] =$doctor['registrationNumber'];

        $this->doctor->update($doctor);
    }
}
