<?php

namespace App\Http\Livewire\Main;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $relatedProducts;

    public $isAddedToCart = false;

    public function mount($product)
    {
        $this->product = Product::findOrFail($product);
        $this->relatedProducts = Product::where('type', 'like', $this->getProductType($product))->limit(4)->get();
    }

    private function getProductType($product) : string
    {
        return Product::where('id', $product)->value('type');
    }

    public function addToCart($product)
    {
        (new Products())->addToCart($product);
    }

    public function render()
    {
        return view('livewire.main.product-detail');
    }
}
