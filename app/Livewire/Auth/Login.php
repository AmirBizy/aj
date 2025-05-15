<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Validate]
    public $username = '', $password = '';

    public function rules() {
        return [
            'username' => 'required|string',
            'password' => 'required|min:8',
        ];
    }

    public function login()
    {
        $data = $this->validate();

        $loginField = filter_var($data['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([
            $loginField => $data['username'],
            'password' => $data['password'],
        ])) {
            session()->regenerate();
            return redirect()->route('home.index');
        }

        $this->addError('invalid_login', 'اطلاعات ورود نادرست است.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
