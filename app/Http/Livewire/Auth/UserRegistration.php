<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class UserRegistration extends Component
{

    public $userData;

    public function rules()
    {
        return [
            'userData.name' => ['required', 'string', 'min:4'],
            'userData.email' => ['required', 'string', 'email'],
            'userData.phone' => ['required', 'string', 'min:10', 'max:14'],
            'userData.password' => ['required', 'string', Password::min(6)->mixedCase()->numbers()],
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $data = $this->validate();

        $newData = $data['userData'];
        $newData['password'] = password_hash($newData['password'], PASSWORD_DEFAULT);

        $newData['ip'] = request()->ip();

        try {
            $user = User::create($newData);
            Auth::login($user);

            return redirect()->route('account')->with(['account_created' => 'Account created successfully']);

        } catch(\Exception $e) {
            Log::info($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.user-registration');
    }
}
