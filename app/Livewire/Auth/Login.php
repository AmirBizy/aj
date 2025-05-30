<?php

namespace App\Livewire\Auth;

use Laravel\Socialite\Facades\Socialite;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Illuminate\Support\Facades\RateLimiter;

class Login extends Component
{
    #[Validate]
    public $username = '', $password = '';

    // validate fileds
    public function rules() {
        return [
            'username' => 'required|string',
            'password' => 'required|min:8',
        ];
    }

    // normal auth
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

    // redirect to auth action controller
    public function authGoogle()
    {
        return redirect()->to(route('auth.google'));
//        return Socialite::driver('google')->redirect();
    }

    // load auth page
    public function render()
    {
        if(session('error_message')) {
            LivewireAlert::title(session('error_message'))
                ->error()
                ->toast()
                ->position('top-end')
                ->timer(5000)
                ->show();
        }

        if(session('error_access_message')) {
            LivewireAlert::title(session('error_access_message'))
                ->error()
                ->toast()
                ->position('top-end')
                ->timer(10000)
                ->show();
        }
        return view('livewire.auth.login');
    }
}
