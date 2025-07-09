<?php

namespace App\Livewire\Auth;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\RateLimiter;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Login extends Component
{
    #[Validate]
    public $username = '', $password = '', $setting;

    // validate fileds
    public function rules() {
        return [
            'username' => 'required|string',
            'password' => 'required|min:8',
        ];
    }

    public function mount() {
        $this->setting = Setting::first();
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
        // auth with google disabled
        if($this->setting && $this->setting->getTranslation('google_authentication_status') && $this->setting->getTranslation('google_authentication_status') !== 'active') {
            LivewireAlert::title(__('messages.auth_google_disabled'))
                ->error()
                ->toast()
                ->position('top-end')
                ->timer(5000)
                ->show();
                return;
        }

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
