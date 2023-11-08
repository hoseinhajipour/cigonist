<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo')

    <livewire:styles/>

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/featherlight/featherlight.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/featherlight/featherlight.gallery.min.css') }}"
          type="text/css">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.5') }} " type="text/css">


    <link rel="shortcut icon" type="image/x-icon" href="{{asset("images/favicon.webp")}}">
    <link rel="apple-touch-icon" href="{{asset("images/favicon.webp")}}"/>

    <script src="{!!url('/js/jquery.min.js')!!}"></script>
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

    <link rel="stylesheet" href="{{url('/css/swiper-bundle.min.css')}}"/>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

</head>
<body data-spy="scroll" data-target="#navbarCollapse">
@if(setting('site.loader'))
    <div class="loader bg-dark">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
@endif

<livewire:inc.menu/>

<main>
    {{ $slot }}
</main>
<livewire:inc.footer/>

<livewire:scripts/>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts/>

<script src="{{ asset('js/app.js') }}"></script>

<!-- Libs JS -->

<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.js/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-form/dist/jquery.form.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope/dist/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/featherlight/featherlight.min.js') }}"></script>
<script src="{{ asset('assets/vendor/featherlight/jquery.detect_swipe.js') }}"></script>
<script src="{{ asset('assets/vendor/featherlight/featherlight.gallery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jQuery.countdown/dist/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/main.js?v=1.0') }}"></script>

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('languageChanged', function () {
            location.reload(true); // Perform a full page reload
        });
    });
</script>

@yield('javascript')
@stack('javascript')
</body>
</html>
