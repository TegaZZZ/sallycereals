<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserLogout extends Component
{

    public function logout()
    {
        if(request()->method('POST')) {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.auth.user-logout');
    }
}
