<!doctype html>
<html lang="en">
    @include('frontend.layouts.front-header')

    <body>
        @include('frontend.layouts.front-top-expert-dashboard-navbar')

        @yield('content')

        @include('frontend.layouts.front-footer')

        @yield('modal')

        <!-- dashbaord -->
        @include('frontend.layouts.front-js')

        @stack('js')
    </body>
</html>
