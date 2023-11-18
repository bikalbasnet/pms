<?php

declare(strict_types=1);

namespace App\Livewire\Appointment;

use Livewire\Attributes\Rule;
use Livewire\Form;

class AppointmentForm extends Form
{
    #[Rule('required')]
    public $patientId;

    #[Rule('required')]
    public $doctorId;

    #[Rule('required|date')]
    public $appointmentDate;

    #[Rule('nullable|date_format:H:i')]
    public $appointmentTime;

    public $notes;
}
