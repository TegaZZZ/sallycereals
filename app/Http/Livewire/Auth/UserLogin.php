<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserLogin extends Component
{

    public $userData;

    public function rules()
    {
        return [
            'userData.email' => ['required', 'string'],
            'userData.password' => ['required', 'string'],
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function login()
    {
        $data = $this->validate();

        $newData = $data['userData'];

        if(Auth::attempt($newData)) {
            return redirect()->intended('account');
        } else {
            $this->addError('userData.email', 'Incorrect login credentials');
            $this->addError('userData.password', 'Incorrect login credentials');
        }
    }


    public function render()
    {
        return view('livewire.auth.user-login');
    }
}
