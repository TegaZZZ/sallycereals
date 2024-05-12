<?php

namespace App\Http\Livewire\Main;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public function mount($type = null)
    {
        if ($type != null) {
            $this->products = Product::where('type', $type)->orWhere('category', $type)->get();
        } else {
            $this->products = Product::all();
        }
    }

    public function render()
    {
        return view('livewire.main.products');
    }
}
