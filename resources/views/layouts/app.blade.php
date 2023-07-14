<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body data-spy="scroll" data-target="#navbarCollapse" class="bg-gray-800">
<livewire:inc.menu/>

<main>
    {{ $slot }}
</main>
@include('layouts.footer')
<livewire:scripts/>
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
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
