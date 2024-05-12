<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">
                    <i class="fi-rs-home mr-5">
                    </i>
                    Home
                </a>
                <span>
                </span>
                <a href="{{ route('products') }}">
                    Products
                </a>
                <span>
                </span>
                Product detail
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="row">
            <div class="col-xl-11 col-lg-12 m-auto">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50 mt-30">
                                <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon">
                                            <i class="fi-rs-search">
                                            </i>
                                        </span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            @foreach($product->images as $image)
                                                <figure class="border-radius-10">
                                                    <img alt="product image" src="{{ $image }}" />
                                                </figure>
                                            @endforeach
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            @foreach($product->images as $image)
                                            <div>
                                                <img alt="product image" src="{{ $image }}" />
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info pr-30 pl-30">
                                        <span class="stock-status out-stock">
                                            Sale Off
                                        </span>
                                        <h2 class="title-detail">
                                            {{ $product->name }}
                                        </h2>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted">
                                                    ({{ rand(200, 300) }} reviews)
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price text-brand">
                                                    ${{ $product->price }}
                                                </span>
                                                <span>
                                                    <span class="save-price font-md color3 ml-15">
                                                        15% Off
                                                    </span>
                                                    <span class="old-price font-md ml-15">
                                                        ${{ $product->price * 1.2 }}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="short-desc mb-30">
                                            <p class="font-lg">
                                                {{ substr($product->description, 0, 200) }}...
                                            </p>
                                        </div>
                                        <div class="detail-extralink mb-50">
                                            <div class="detail-qty border radius">
                                                <a class="qty-down" href="#">
                                                    <i class="fi-rs-angle-small-down">
                                                    </i>
                                                </a>
                                                <input class="qty-val" min="1" name="quantity" type="text"
                                                    value="1" />
                                                <a class="qty-up" href="#">
                                                    <i class="fi-rs-angle-small-up">
                                                    </i>
                                                </a>
                                            </div>
                                            <div class="product-extra-link2">
                                                @livewire('components.add-to-cart', ['productId' => $product->id, 'type' => 'detailPage'])
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Description"
                                                id="Description-tab">
                                                Description
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <p>
                                                    {{ $product->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h2 class="section-title style-1 mb-30">
                                        Related products
                                    </h2>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($relatedProducts as $product)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap hover-up">
                                                <div class="product-content-wrap">
                                                    <h2>
                                                        <a href="{{ route('product-detail', $product->id) }}" tabindex="0">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h2>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: {{ rand(60, 100) }}%">
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>
                                                            ${{ $product->price }}
                                                        </span>
                                                        <span class="old-price">
                                                            ${{ $product->price * 1.2 }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                        <x-category />
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
