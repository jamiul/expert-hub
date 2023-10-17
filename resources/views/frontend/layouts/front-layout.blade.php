<!doctype html>
<html lang="en">
    @include('frontend.layouts.front-header')

    <body>
        @include('frontend.layouts.front-top-navbar')

        @yield('content')

        @include('frontend.layouts.front-footer')

        @include('frontend.layouts.front-js')
    </body>
</html>
