<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use Livewire\Attributes\Rule;
use Livewire\Form;

class AppointmentForm extends Form
{
    #[Rule('required')]
    public $patientId = null;

    #[Rule('required')]
    public $doctorId;

    #[Rule('required|date_format:Y-m-d')]
    public $date;

    #[Rule('nullable|date_format:H:i')]
    public $time;

    public $notes;
}
