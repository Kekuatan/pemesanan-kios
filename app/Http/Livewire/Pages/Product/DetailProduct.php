<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\Product;
use Livewire\Component;

class DetailProduct extends Component
{

    public $productId;
    protected $queryString = ['productId'];

    public function mount()
    {

       $product = Product::where('id', $this->productId);
    }

    public function render()
    {
        return view('livewire.pages.product.detail-product')
            ->layout('components.layouts.app');;
    }
}
