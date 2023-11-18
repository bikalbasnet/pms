<?php

declare(strict_types=1);

namespace App\Livewire\Doctor;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DoctorForm extends Form
{
    #[Rule('required')]
    public $name;

    public $registrationNumber;

    public $specialization;

    public $phone;

    #[Rule('nullable|email')]
    public $email;

    public $address;

    public $notes;
}
