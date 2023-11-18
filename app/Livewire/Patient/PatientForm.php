<?php

namespace App\Livewire\Patient;

use Livewire\Attributes\Rule;
use Livewire\Form;

    class PatientForm extends Form
    {
        #[Rule('required|min:3')]
        public $name;

        #[Rule('required')]
        public $gender;

        public $phone;

        public $address;

        public $ageYear;

        public $ageMonth = 0;

        #[Rule('email|nullable')]
        public $email;

        public $notes;
    }
