<?php

namespace App\Http\Livewire\Pages;

use App\Models\Payment;
use App\Models\Product;
use App\Traits\Livewire\PaginateTrait;
use Illuminate\Contracts\Container\Container;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VerifikasiPayment extends Component
{

    use PaginateTrait;
//    public $payments;
    public $paymentSelected;
//    public $paginate;

    public function mount()
    {
//        $pageSize = 10;
//        $this->payments = Payment::paginate($pageSize);
//        $this->paginate = $this->getListPage($this->payments);
    }

    public function render()
    {
        $pageSize = 10;
        $products = Product::with('payments')
            ->whereHas('payments' ,function($query){
                return $query->where('verify', 0);
            })
            ->withCount([
                'payments as sum_amount' => function ($query) {
                    $query->select(DB::raw("sum(amount)"));
                }
            ])
            ->paginate($pageSize);

        return view('livewire.pages.verifikasi-payment',
            ['products' => $products, 'paginate' => $this->getListPage($products)])
            ->layout('components.layouts.app');
    }
}
