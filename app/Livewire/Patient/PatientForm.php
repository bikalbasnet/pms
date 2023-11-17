<?php

namespace App\Livewire\Patient;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PatientForm extends Form
{
    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|email')]
    public $email;
}
