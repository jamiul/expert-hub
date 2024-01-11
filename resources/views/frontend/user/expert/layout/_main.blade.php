<!doctype html>
<html lang="en">
@include('frontend.layouts.front-header')

<body>
    @include('frontend.user.expert.partials._navbar')

    @yield('content')
    @livewire('modal-pro')
    <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>

    <x-toaster />

    @include('frontend.layouts.front-footer')

    @yield('modal')

    <!-- dashbaord -->
    @include('frontend.layouts.front-js')

    @stack('js')

</body>

</html>
