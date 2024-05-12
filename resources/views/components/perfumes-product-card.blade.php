@props(['product'])

<div class="product-cart-wrap">
    <div class="product-img-action-wrap">
        <div class="product-img product-img-zoom">
            <a href="{{ route('product-detail', $product->id) }}">
                <img alt="" class="default-img"
                    src="{{ asset('assets/images/product-1-1.jpg') }}" />
                <img alt="" class="hover-img"
                    src="{{ asset('assets/images/product-1-2.jpg') }}" />
            </a>
        </div>
        <div class="product-badges product-badges-position product-badges-mrg">
            <span class="hot">
                Save 15%
            </span>
        </div>
    </div>
    <div class="product-content-wrap">
        <div class="product-category">
            <a href="{{ route('products', $product->category) }}">
                {{ $product->category }}
            </a>
        </div>
        <h2>
            <a href="{{ route('product-detail', $product->id) }}">
                {{ $product->name }}
            </a>
        </h2>
        <div class="product-rate d-inline-block">
            <div class="product-rating" style="width: {{ rand(60, 100) }}%">
            </div>
        </div>
        <div class="product-price mt-10">
            <span>
                ₦{{ $product->price }}
            </span>
            <span class="old-price">
                ₦{{ $product->price * 1.2 }}
            </span>
        </div>
        <div class="sold mt-15 mb-15">
            <div class="progress mb-5">
                <div aria-valuemax="100" aria-valuemin="0"
                    class="progress-bar" role="progressbar"
                    style="width: 50%">
                </div>
            </div>
            <span class="font-xs text-heading">
                Sold: {{ rand(90, 150) }}pcs
            </span>
        </div>
        {{-- <a class="btn w-100 hover-up" href="/shop-cart">
            <i class="fi-rs-shopping-cart mr-5">
            </i>
            Add
        </a> --}}
        @livewire('components.add-to-cart', ['productId' => $product->id, 'type' => 'forPerf'])
    </div>
</div>
