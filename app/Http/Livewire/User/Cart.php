<?php

namespace App\Http\Livewire\User;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $carts;
    public $user;

    public $products;

    public $totalSum;

    public function mount()
    {
        $this->user = Auth::user();
        $this->carts = $this->user->cart()->get();

        foreach($this->carts as $cart) {
            $this->products = $this->getProduct($cart->product_id);
        }

        $this->sumTotal();
    }

    private function getProduct($product)
    {
        return Product::where('id', $product)->get();
    }

    public function delete($id)
    {
        $item = ModelsCart::where('id', $id)->get();

        if($item->exist()) {
            $item->delete();
            $this->carts = $this->user->cart()->get();

            $this->sumTotal();
        }
    }

    public function sumTotal()
    {
        $this->totalSum = 0;

        foreach ($this->carts as $key => $cart) {
            $product = $this->getProduct($cart->product_id);

            $productPrice = $product[$key]->price;
            $this->totalSum += $productPrice;
        }
    }

    public function render()
    {
        return view('livewire.user.cart');
    }
}
