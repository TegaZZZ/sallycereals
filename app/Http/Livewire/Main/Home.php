<?php

namespace App\Http\Livewire\Main;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $bodyEnhancementsProducts;
    public $perfumesProducts;

    public function mount()
    {
        $this->bodyEnhancementsProducts = Product::where('category', 'body-enhancements')->limit(10)->get();
        $this->perfumesProducts = Product::where('category', 'perfumes')->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.main.home');
    }
}
