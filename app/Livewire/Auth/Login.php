<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Illuminate\Support\Facades\RateLimiter;

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
        rateLimiterWire(30 , 60);

        $data = $this->validate();

        $loginField = filter_var($data['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([
            $loginField => $data['username'],
            'password' => $data['password'],
        ])) {
            session()->regenerate();
            return redirect()->route('admin.index');
        }

        $this->addError('invalid_login', __('messages.invalid_login'));

        LivewireAlert::title(__('messages.email_or_password_wrong'))
            ->error()
            ->toast()
            ->position('top-end')
            ->timer(5000)
            ->show();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
