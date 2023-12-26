<!doctype html>
<html lang="en">
    @include('frontend.layouts.front-header')
    @vite('resources/css/choices.css')
    @vite('resources/js/choices.min.js')
    <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">
    <body>
        @include('frontend.layouts.admin-top-dashboard-navbarmain')
        @yield('content')

        <!-- @include('frontend.layouts.front-footer') -->

        @yield('modal')
        @include('frontend.layouts.clientdashboard-front-js')
        @include('frontend.layouts.front-js')
        @livewire('modal-pro')
    <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
    </body>
</html>
