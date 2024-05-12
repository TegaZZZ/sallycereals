<footer class="main">
    <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="position-relative newsletter-inner">
                        <div class="newsletter-content">
                            <h2 class="mb-20">
                                Stay home &amp; get your daily
                                <br />
                                needs from our shop
                            </h2>
                            <p class="mb-45">
                                Start You'r Daily Shopping with
                                <span class="text-brand">
                                    {{ env('APP_NAME') }}
                                </span>
                            </p>
                            <form class="form-subcriber d-flex">
                                <input placeholder="Your emaill address" type="email" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <img alt="newsletter" src="{{ asset('assets/images/banner-9.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-1.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Best prices &amp; offers
                            </h3>
                            <p>
                                Orders $50 or more
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-2.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Free delivery
                            </h3>
                            <p>
                                24/7 amazing services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".2s">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-3.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Great daily deal
                            </h3>
                            <p>
                                When you sign up
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".3s">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-4.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Wide assortment
                            </h3>
                            <p>
                                Mega Discounts
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".4s">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-5.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Easy returns
                            </h3>
                            <p>
                                Within 7 days
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".5s">
                        <div class="banner-icon">
                            <img alt="" src="{{ asset('assets/images/icon-6.svg') }}" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">
                                Safe delivery
                            </h3>
                            <p>
                                Within 7 days
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col">
                    <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="logo mb-30">
                            <a class="mb-15" href="{{ route('home') }}">
                                <img alt="logo" src="{{ asset('assets/images/logo.svg') }}" />
                            </a>
                        </div>
                        <ul class="contact-infor">
                            <li>
                                <img alt="" src="{{ asset('assets/images/icon-location.svg') }}" />
                                <strong>
                                    Address:
                                </strong>
                                <span>
                                    {{ env('OFFICE_ADDRESS') }}
                                </span>
                            </li>
                            <li>
                                <img alt="" src="{{ asset('assets/images/icon-contact.svg') }}" />
                                <strong>
                                    Call Us:
                                </strong>
                                <span>
                                    {{ env('APP_PHONE_NUMBER') }}
                                </span>
                            </li>
                            <li>
                                <img alt="" src="{{ asset('assets/images/icon-email-2.svg') }}" />
                                <strong>
                                    Email:
                                </strong>
                                <span>
                                    {{ env('APP_EMAIL') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp"
                    data-wow-delay=".1s&gt;&lt;h4 class=">
                    Company
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li>
                            <a href="{{ route('about') }}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}">
                                Terms &amp; Conditions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Support Center
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="widget-title">
                        Account
                    </h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        @guest
                            <li>
                                <a href="{{ route('login') }}">
                                    Sign In
                                </a>
                            </li>
                        @endguest
                        <li>
                            <a href="{{ route('cart') }}">
                                View Cart
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account') }}">
                                My Orders
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account') }}">
                                Shipping Details
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="widget-title">
                        Corporate
                    </h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li>
                            <a href="#">
                                Become a Vendor
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Affiliate Program
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <h4 class="widget-title">
                        Popular
                    </h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li>
                            <a href="{{ route('products', 'weight-gain') }}">
                                Weight gain
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products', 'butt-and-hips') }}">
                                Butt & hips
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products', 'flat-tummy') }}">
                               Flat tummy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products', 'stretch-mark-removal') }}">
                                Stretch mark removal
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products', 'infection-treament') }}">
                                Infection treatment
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
