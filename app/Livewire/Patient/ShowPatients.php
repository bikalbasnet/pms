<?php

declare(strict_types=1);

namespace App\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class ShowPatients extends Component
{
    public $searchKey;

    public function render()
    {
        $patients = $this->searchKey
            ? Patient::where('name', 'like', "%$this->searchKey%")
                ->orWhere('phone', 'like', "%$this->searchKey%")
                ->orWhere('email', 'like', "%$this->searchKey%")
                ->orWhere('patient_id', 'like', "%$this->searchKey%")
                ->take(50)
                ->get()
            : Patient::all()->take(50);

        return view('livewire.patient.show-patients')
            ->with([
                'patients' => $patients
            ]);
    }
}
