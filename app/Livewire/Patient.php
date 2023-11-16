<?php

namespace App\Livewire;

use Livewire\Component;

class Patient extends Component
{
    public $title = "a hero";
    public $amount = 0;
    public function render()
    {
        return view('livewire.patient');
    }
}
