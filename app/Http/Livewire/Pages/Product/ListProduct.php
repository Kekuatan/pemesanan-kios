<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\Product;
use App\Traits\Livewire\PaginateTrait;
use Livewire\Component;

class ListProduct extends Component
{
    use PaginateTrait;

    public function __construct()
    {

    }

    public function link($page){
        return $this->redirect($page);
    }

    public function render()
    {
        $pageSize = 10;

        $products = Product::paginate($pageSize);

        return view('livewire.pages.product.list-product',
            ['products' => $products, 'paginate' => $this->getListPage($products)])
            ->layout('components.layouts.app');
    }
}
