<main class="main">
    <x-home-slider />
    <!--End hero slider-->
    <section class="popular-categories section-padding">
        <div class="container wow animate__animated animate__fadeIn">
            <div class="section-title">
                <div class="title">
                    <h3>
                        Featured Categories
                    </h3>
                    <ul class="list-inline nav nav-tabs links d-none d-md-block ">
                        <li class="list-inline-item nav-item">
                            <a class="nav-link" href="{{ route('products', 'body-enhancements') }}">
                                Body Enhancements
                            </a>
                        </li>
                        <li class="list-inline-item nav-item">
                            <a class="nav-link" href="{{ route('products', 'perfumes') }}">
                                Perfumes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                    id="carausel-10-columns-arrows">
                </div>
            </div>
            <div class="carausel-10-columns-cover position-relative d-md-none">
                <div class="carausel-10-columns" id="carausel-10-columns">
                    <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="{{ route('products', 'body-enhancements') }}">
                                <img alt="" src="{{ asset('assets/images/cat-13.png') }}" />
                            </a>
                        </figure>
                        <h6>
                            <a href="{{ route('products', 'body-enhancements') }}">
                                Body Enhancements
                            </a>
                        </h6>
                    </div>
                    <div class="card-2 bg-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="{{ route('products', 'perfumes') }}">
                                <img alt="" src="{{ asset('assets/images/cat-12.png') }}" />
                            </a>
                        </figure>
                        <h6>
                            <a href="{{ route('products', 'perfumes') }}">
                                Perfumes
                            </a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End category slider-->
    <x-product-type-banner />
    <!--End banners-->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>
                    Popular Products
                </h3>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div aria-labelledby="tab-one" class="tab-pane fade show active" id="tab-one" role="tabpanel">
                    <div class="row product-grid-4">

                        <!-- products card start -->
                        @foreach($bodyEnhancementsProducts as $product)
                            <x-product-card :product=$product />
                        @endforeach
                        <!-- products card end -->

                    </div>
                    <!--End product-grid-4-->
                </div>
            </div>
            <!--End tab-content-->
        </div>
    </section>
    <!--Products Tabs-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="">
                    Daily Best Sells
                </h3>
                <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button aria-controls="tab-one" aria-selected="true" class="nav-link active"
                            data-bs-target="#tab-one-1" data-bs-toggle="tab" id="nav-tab-one-1" role="tab"
                            type="button">
                            Featured
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="tab-two" aria-selected="false" class="nav-link"
                            data-bs-target="#tab-two-1" data-bs-toggle="tab" id="nav-tab-two-1" role="tab"
                            type="button">
                            Popular
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="tab-three" aria-selected="false" class="nav-link"
                            data-bs-target="#tab-three-1" data-bs-toggle="tab" id="nav-tab-three-1"
                            role="tab" type="button">
                            New added
                        </button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                    <div class="banner-img style-2">
                        <div class="banner-text">
                            <h2 class="mb-100">
                                Bring nature into your home
                            </h2>
                            <a class="btn btn-xs" href="/shop-grid-right">
                                Shop Now
                                <i class="fi-rs-arrow-small-right">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                    <div class="tab-content" id="myTabContent-1">
                        <div aria-labelledby="tab-one-1" class="tab-pane fade show active" id="tab-one-1"
                            role="tabpanel">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                    id="carausel-4-columns-arrows">
                                </div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @foreach($perfumesProducts as $product)
                                        <x-perfumes-product-card :product=$product />
                                    @endforeach
                                    <!--End product Wrap-->
                                </div>
                            </div>
                        </div>
                        <!--End tab-pane-->
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    <!--End Deals-->
</main>
