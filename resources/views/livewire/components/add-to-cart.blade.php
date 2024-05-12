<div class="add-cart">
    @if(isset($type) && $type == 'detailPage')
        <button class="button button-add-to-cart" wire:click="addToCart({{ $productId }})">
            <i class="fi-rs-shopping-cart mr-5">
            </i>
            {{ $text }}
        </button>
    @else
        <a class="{{ isset($type) && $type == 'forPerf' ? 'btn w-100 hover-up text-white' : 'add'}}" wire:click="addToCart({{ $productId }})">
            <i class="fi-rs-shopping-cart mr-5">
            </i>
            {{ $text }}
        </a>
    @endif
</div>
