<?php

namespace App\Http\Livewire\Pages;

use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class User extends Component
{
    use AlertifyTrait;
    public $name;
    public $email;
    public $password;

    public function save()
    {

        try {
            \App\Models\User::create([
                "name" => $this->name,
                "email" => $this->email,
                "password" => Hash::make($this->password)
            ]);
            $this->alertifyError('success', 'Pembuatan success');
        } catch (\Exception $exception){
            $this->alertifyError('error', 'Pembuatan gagal');
        }

    }
    public function render()
    {
        return view('livewire.pages.user')
            ->layout('components.layouts.app');
    }
}
