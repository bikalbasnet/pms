<?php

declare(strict_types=1);

namespace App\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;

class ShowDoctors extends Component
{
    public $searchKey;

    public function render()
    {
        $doctors = $this->searchKey
            ? Doctor::where('name', 'like', "%$this->searchKey%")
                ->orWhere('registration_number', 'like', "%$this->searchKey%")
                ->take(5)
                ->get()
            : Doctor::all()->take(5);

        return view('livewire.doctor.show-doctors')
            ->with([
                'doctors' => $doctors
            ]);
    }
}
