<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddToCart extends Component
{
    public $user;
    public $productId;

    public $text = 'Add';
    public $type;

    public function mount($productId)
    {
        if(auth()->check()) {
            $this->user = Auth::user();
            $this->text = $this->cartItemExists() ? 'Added' : 'Add';
        }
    }

    protected function cartItemExists()
    {
        return $this->user->cart()->where('product_id', $this->productId)->exists();
    }

    public function addToCart($productId)
    {
        if(!auth()->check()) {
            return redirect()->route('login');
        }

        if ($this->cartItemExists()) {

            $this->user->cart()->where('product_id', $this->productId)->delete();
            $this->text = 'Add';
        } else {

            $this->user->cart()->create(['product_id' => $productId]);
            $this->text = 'Added';
        }
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
