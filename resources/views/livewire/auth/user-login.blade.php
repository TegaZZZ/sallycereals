<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">
                    <i class="fi-rs-home mr-5">
                    </i>
                    Home
                </a>
                <span>
                </span>
                Pages
                <span>
                </span>
                My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <img alt="" class="border-radius-15"
                                src="{{ asset('assets/images/login-1.png') }}" />
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">
                                            Login
                                        </h1>
                                        <p class="mb-30">
                                            Don't have an account?
                                            <a href="{{ route('register') }}">
                                                Create here
                                            </a>
                                        </p>
                                    </div>
                                    <form wire:submit.prevent="login">
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.email" name="email" placeholder="Email" type="text" />
                                            <div>
                                                @error('userData.email')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.password" name="password" placeholder="Your password" type="password" />
                                            <div>
                                                @error('userData.password')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="login_footer form-group mb-50">
                                            <a class="text-muted" href="{{ route('forgot') }}">
                                                Forgot password?
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-heading btn-block hover-up" type="submit">
                                                Log in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
