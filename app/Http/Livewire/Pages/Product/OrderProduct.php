<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\Product;
use Livewire\Component;

class OrderProduct extends Component
{
    public $no_siptu_or_shptu = '';
    public $products =[];
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $this->products = $this->filterProduct();
    }

    public function link($id){
        return redirect()->route('product.detail',['productId'=>$id]);
    }

    public function filterProduct()
    {
        $query = $this->no_siptu_or_shptu;
        if(strlen($query) < 3){
            return [];
        }
        $products = Product::where('tu_no', 'like', '%' . $query . '%')
            ->orWhere('tu_no', 'like', '%' . $query . '%')->limit(10)->get();
        if (blank($products)){
            return [];
        }
        return $products;
    }

    public function updated($name, $value)
    {
        if($name == 'no_siptu_or_shptu'){
                $this->products = $this->filterProduct();
        }
    }

    public function render()
    {
        return view('livewire.pages.product.order-product')
            ->layout('components.layouts.app');
    }
}
