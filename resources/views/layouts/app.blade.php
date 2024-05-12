<!DOCTYPE html>
<html>

    @livewire('components.head')

    <body>

        @livewire('components.nav')

        <div>
            {{ $slot }}
        </div>

        @livewire('components.foot')

        @livewireScripts()
        <!--  JS-->
        <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.3.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/counterup.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/images-loaded.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/scrollup.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.vticker-min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.theia.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
        <!-- Template  JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/shop.js') }}"></script>
    </body>
</html>
