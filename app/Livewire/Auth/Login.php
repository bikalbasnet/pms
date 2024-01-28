<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email')]
    public $username;

    #[Rule('required')]
    public $password;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->to('/');
        }
    }

    public function login(Request $request)
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->username,
            'password' => $this->password,
        ])) {
            $request->session()->regenerate();
            redirect()->to('/');
        }

        redirect()->to('/login');

    }
}
