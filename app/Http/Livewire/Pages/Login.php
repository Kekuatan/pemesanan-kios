<?php

namespace App\Http\Livewire\Pages;

use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    use AlertifyTrait;
    public $username = 'admin@admin.com';
    public $password = 'admin';

    public function __construct()
    {

        if (Auth::guard('web')->check()){
            return redirect()->route('dashboard');
        }
    }

    public function submit()
    {
        $payload = ["email" => $this->username, "password" => $this->password];
//        $user = \App\Models\User::where('email', $this->username)->first();
//        if ($user&& \Illuminate\Support\Facades\Hash::check($this->password, $user->password)) {
//            Auth::guard('web')->logoutOtherDevices($this->password);
//            Auth::logout();
//            Session::flush();
//        }

        if (Auth::guard('web')->attempt($payload)) {
            return redirect()->route('dashboard');
        } else{
            $this->alertifyError('error', 'Login gagal');
        }
    }

    public function render()
    {
        if (Auth::guard('web')->check()){
            return view('livewire.pages.dashboard')
                ->layout('components.layouts.app');
        }
        $this->showErrorByAlertify();
        return view('livewire.pages.login')
            ->layout('components.layouts.login');
    }

}
