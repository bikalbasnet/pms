<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            Welcome to Dashboard
        </div>
        HTML;
    }
}
