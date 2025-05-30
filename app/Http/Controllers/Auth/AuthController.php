<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    // show normal auth page
    public function index()
    {
//        toast('Your Post as been submited!','success')->autoClose(500000)->position('top-end');;
        return view('auth.login');
    }

    // auth with google account
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    // auth with google callback
    public function google_callback()
    {
        try {
            // get google user info
            $google_user = Socialite::driver('google')->user();

            // get real user has acceced to auth
            $org_user = User::where('email' , $google_user->email)->first();

            if(!$org_user) {
                session()->flash('error_access_message' , __('messages.auth_google_invalid_info'));
                return redirect()->route('login');
            }

            // login user and redirect to panel
            Auth::login($org_user);
            return redirect()->route('admin.index');
        } catch (\Exception $e) {
            session()->flash('error_message' , __('messages.auth_google_failed'));
            return redirect()->route('login');
        }
    }

    // logout action
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
