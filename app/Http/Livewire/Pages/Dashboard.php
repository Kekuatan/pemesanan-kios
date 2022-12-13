<?php

namespace App\Http\Livewire\Pages;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public function __construct()
    {
        $this->user = Auth::guard('web')->user();
    }

    public function mount(){
//        $sumOrder = Payment::sum('amount');
//        $sumVerify = Payment::where('kwitansi_date','==', Carbon::now())->where('verify', 1)->sum('amount');
//        $sumUnverify= Payment::where('kwitansi_date','==', Carbon::now())->where('verify', 0)->sum('amount');
//
//        $sales = DB::table('payments')
//            ->select([
//                DB::raw('sum(amount) as daily'),
//                DB::raw('date(kwitansi_date) as date'),
//            ])
//            ->groupBy('date')
//            ->get()
//            ->keyBy('date');
//        dd($sales);
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
