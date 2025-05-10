<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {!! SEOTools::generate() !!}

        <script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {!! ToastMagic::styles() !!}
    </head>
    <body>

        @livewire('header')

        @yield('content')



        @livewire('cta-footer')

        @livewire('footer')

        {{-- <script src="{{ asset('assets/js/plugins/jquery.js') }}"></script> --}}


    {{-- script --}}

<script src="{{ asset("/assets/js/plugins/jquery.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/bootstrap.min.js") }}"></script>

<script src="{{ asset("/assets/js/plugins/odometer.js") }}"></script>
<script src="{{ asset("/assets/js/plugins/jquery-appear.js") }}"></script>

<script src="{{ asset("/assets/js/plugins/metismenu.js") }}"></script>
<script src="{{ asset("/assets/js/plugins/swiper.js") }}"></script>
<script src="{{ asset("/assets/js/plugins/aos.js") }}"></script>
<script src="{{ asset("/assets/js/plugins/nice-select.js") }}"></script>
<script src="{{ asset("/assets/js/plugins/smooth-scroll.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/waw.js") }}"></script>

<script src="{{ asset("/assets/js/vendor/marker.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/map-content.js") }}"></script>
<script src="{{ asset("/assets/js/vendor/info-box.js") }}"></script>
<script src="{{ asset('/assets/js/plugins/magnific-popup.js') }}"></script>

<script src="{{ asset("/assets/js/main.js") }}"></script>



{!! ToastMagic::scripts() !!}
    </body>

</html>
