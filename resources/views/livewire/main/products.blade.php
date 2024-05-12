<main class="main">
    <x-products-breadcrum />
    <div class="container mb-30">
        <div class="row">
            <div class="col-lg-4-5">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'weight-gain') }}'>Weight gain</a>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'stretch-mark-removal') }}'>Stretch mark</a>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'butt-and-hips') }}'>butt & hips</a>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'flat-tummy') }}'>Flat tummy</a>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'infection-treatment') }}'>Infection</a>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <a class="border p-2 text-dark hover-effect" href='{{ route('products', 'perfumes') }}'>Perfumes</a>
                        </div>
                    </div>
                </div>
                <div class="row product-grid">
                    @foreach ($products as $product)
                        <x-product-card :product=$product />
                    @endforeach
                </div>
            </div>
            <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                <x-category />
                <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                    <img alt="" src="assets/images/banner-11.png" />
                    <div class="banner-text">
                        <span>
                            Oganic
                        </span>
                        <h4>
                            Save 17%
                            <br />
                            on
                            <span class="text-brand">
                                Oganic
                            </span>
                            <br />
                            Juice
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
