<?php

namespace App\Http\Livewire\Pages;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public function __construct()
    {
        $this->user = Auth::guard('web')->user();

    }

    public function menu($page){
            return $this->redirect($page);
    }

    public function render()
    {
        return view('livewire.pages.dashboard')
            ->layout('components.layouts.app');
    }
}
