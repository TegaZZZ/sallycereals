<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Account extends Component
{
    public $user;
    public $orders;
    public $userData;

    public $response;

    public function mount()
    {
        $this->user = Auth::user();

        $this->userData = $this->user;
        $this->orders = $this->user->order()->get();
    }

    public function rules()
    {
        return [
            'userData.name' => ['required', 'string', 'min:4'],
            'userData.phone' => ['required', 'string', 'min:10', 'max:14'],
            'userData.password' => ['required', 'string', Password::min(6)->mixedCase()->numbers()],
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function edit()
    {
        $data = $this->validate();

        $newData = $data['userData'];

        try {
            $this->user->update($newData);

            $this->response =  'Account updated successfully';

        } catch(\Exception $e) {
            Log::info($e->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.user.account');
    }
}
