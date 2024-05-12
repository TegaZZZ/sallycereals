@props(['product'])

<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
        data-wow-delay=".1s">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
                <a href="{{ route('product-detail', $product->id) }}">
                    <img alt="" class="default-img"
                        src="{{ $product->images[0] }}" />
                    <img alt="" class="hover-img"
                        src="{{ $product->images[0] }}" />
                </a>
            </div>
            <div class="product-badges product-badges-position product-badges-mrg">
                <span class="hot">
                    Hot
                </span>
            </div>
        </div>
        <div class="product-content-wrap">
            <div class="product-category">
                <a href="{{ route('products', $product->type) }}">
                    {{ $product->type }}
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
            <div class="product-card-bottom">
                <div class="product-price">
                    <span>
                        ₦{{ $product->price }}
                    </span>
                    {{-- <span class="old-price">
                        {{ $product->price * 1.2 }}
                    </span> --}}
                </div>
                @livewire('components.add-to-cart', ['productId' => $product->id])
            </div>
        </div>
    </div>
</div>
