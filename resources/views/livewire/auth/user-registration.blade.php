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
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">
                                            Create an Account
                                        </h1>
                                        <p class="mb-30">
                                            Already have an account?
                                            <a href="/page-login">
                                                Login
                                            </a>
                                        </p>
                                    </div>
                                    <form wire:submit.prevent="store">
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.name" placeholder="Name" type="text">
                                            <div>
                                                @error('userData.name')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.email" placeholder="Email" type="text">
                                            <div>
                                                @error('userData.email')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.phone" placeholder="Phone number" type="tel">
                                            <div>
                                                @error('userData.phone')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input wire:model.lazy="userData.password" placeholder="Password" type="password">
                                            <div>
                                                @error('userData.password')
                                                    <small class="text-danger">{{ str_replace('user data.', '', $message) }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <input class="form-check-input" id="exampleCheckbox12"
                                            name="checkbox" type="radio" checked />
                                            <span>
                                                I agree to terms &amp; Policy.
                                            </span>
                                        </div>
                                        <div class="form-group mb-30">
                                            <button class="btn btn-fill-out btn-block hover-up font-weight-bold" type="submit">
                                                Submit &amp; Register
                                            </button>
                                        </div>
                                        <p class="font-xs text-muted">
                                            <strong>
                                                Note:
                                            </strong>
                                            Your personal data will be used to support your experience throughout this
                                            website, to manage access to your account, and for other purposes described
                                            in our privacy policy
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <div class="card-login mt-115">
                                <a class="social-login facebook-login" href="#">
                                    <img alt="" src="assets/images/logo-facebook.svg" />
                                    <span>
                                        Continue with Facebook
                                    </span>
                                </a>
                                <a class="social-login google-login" href="#">
                                    <img alt="" src="{{ asset('assets/images/logo-google.svg') }}" />
                                    <span>
                                        Continue with Google
                                    </span>
                                </a>
                                <a class="social-login apple-login" href="#">
                                    <img alt="" src="assets/images/logo-apple.svg" />
                                    <span>
                                        Continue with Apple
                                    </span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
