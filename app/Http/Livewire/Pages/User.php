<?php

namespace App\Http\Livewire\Pages;

use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class User extends Component
{
    use AlertifyTrait;

    public $name;
    public $email;
    public $group;
    public $users;
    public $password;

    protected $rules = [

        'name' => 'required|string',
        'email' => 'required|string',
        'jabatan' => 'required|numeric',
        'password' => 'required|string',

    ];

    public function save()
    {
        $validator = Validator::make(
            [
                "name" => $this->name,
                "email" => $this->email,
                "jabatan" => $this->group,
                "password" => $this->password
            ]
            , $this->rules);

        if ($validator->fails()) {
            $errors = $validator->getMessageBag();
            if ($errors) {
                $errors = collect(collect($errors)->first())->first();
                $this->alertifyError('error', $errors);
            }
        } else {
            try {
                \App\Models\User::create([
                    "name" => $this->name,
                    "email" => $this->email,
                    "group" => $this->group,
                    "password" => Hash::make($this->password)
                ]);
                $this->alertifyError('success', 'Pembuatan success');
                $this->name = null;
                $this->email = null;
                $this->password = null;
            } catch (\Exception $exception) {
                $this->alertifyError('error', 'Pembuatan gagal');
            }
        }
    }

    public function render()
    {
        return view('livewire.pages.user')
            ->layout('components.layouts.app');
    }
}
