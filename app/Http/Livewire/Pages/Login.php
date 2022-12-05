<?php

namespace App\Http\Livewire\Pages;

use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    use AlertifyTrait;
    public $username = 'admin@admin.com';
    public $password = 'admin';

    public function submit()
    {
        $payload = ["email" => $this->username, "password" => $this->password];
        $this->alertifyError('error', 'ssss');
        if (Auth::guard('web')->attempt($payload)) {
            return redirect()->route('dashboard');
        } else{
            return 'aaaa';
        }
    }

    public function render()
    {
        $this->showErrorByAlertify();
        return view('livewire.pages.login')
            ->layout('components.layouts.login');
    }

}
