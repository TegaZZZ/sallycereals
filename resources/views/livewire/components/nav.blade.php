<div>
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>
                Grand opening,
                <strong>
                    up to 15%
                </strong>
                off all items. Only
                <strong>
                    3 days
                </strong>
                left
            </span>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ route('home') }}">
                            <img alt="logo" src="{{ asset('assets/images/logo.svg') }}" />
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option value="">All Categories</option>
                                    <option value="1">Weight gain</option>
                                    <option value="2">Perfumes</option>
                                </select>
                                <input placeholder="Search for items..." type="text" />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('cart') }}">
                                        <img alt="Nest" src="{{ asset('assets/images/icon-cart.svg') }}" />
                                        <span class="pro-count blue">
                                            2
                                        </span>
                                    </a>
                                    <a href="{{ route('cart') }}">
                                        <span class="lable">
                                            Cart
                                        </span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="{{ route('account') }}">
                                        <img alt="Nest" class="svgInject"
                                            src="{{ asset('assets/images/icon-user.svg') }}" />
                                    </a>
                                    <a href="{{ route('account') }}">
                                        <span class="lable ml-0">
                                            Account
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/">
                            <img alt="logo" src="{{ asset('assets/images/logo.svg') }}" />
                        </a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('products') }}">
                                            Products
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img alt="hotline" src="{{ asset('assets/images/icon-headphone.svg') }}" />
                        <p>
                            1900 - 888
                            <span>
                                24/7 Support Center
                            </span>
                        </p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top">
                            </span>
                            <span class="burger-icon-mid">
                            </span>
                            <span class="burger-icon-bottom">
                            </span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('cart') }}">
                                    <img alt="Nest" src="{{ asset('assets/images/icon-cart.svg') }}" />
                                    <span class="pro-count white">
                                        2
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ route('home') }}">
                        <img alt="logo" src="{{ asset('assets/images/logo.svg') }}" />
                    </a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top">
                        </i>
                        <i class="icon-bottom">
                        </i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input placeholder="Search for items…" type="text" />
                        <button type="submit">
                            <i class="fi-rs-search">
                            </i>
                        </button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('about') }}">
                                    About
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('products') }}">
                                    Products
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('account') }}">
                                    Account
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="#">
                            <i class="fi-rs-marker">
                            </i>
                            Our location
                        </a>
                    </div>
                    <div class="single-mobile-header-info">
                        @guest
                            <a href="{{ route('login') }}">
                                <i class="fi-rs-user">
                                </i>
                                Log In
                            </a>
                        @endguest
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">
                            <i class="fi-rs-headphones">
                            </i>
                            {{ env('APP_PHONE_NUMBER') }}
                        </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">
                        Follow Us
                    </h6>
                    <a href="https://instagram.com/{{ env('INSTAGRAM_HANDLE') }}">
                        <img alt="" src="{{ asset('assets/images/icon-instagram-white.svg') }}" />
                    </a>
                </div>
                <div class="site-copyright">
                    Copyright&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
</div>
