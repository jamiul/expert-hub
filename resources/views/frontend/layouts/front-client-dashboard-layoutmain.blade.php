<!doctype html>
<html lang="en">
    @include('frontend.layouts.front-header')

    <body>
        @include('frontend.layouts.front-top-client-dashboard-navbarmain')

        @yield('content')

        @include('frontend.layouts.front-footer')

        @yield('modal')
        
        @include('frontend.layouts.front-js')
        @include('frontend.layouts.clientdashboard-front-js')
    </body>
</html>


