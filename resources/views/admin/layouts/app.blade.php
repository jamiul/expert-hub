<!doctype html>
<html lang="en">
@include('frontend.layouts.front-header')

<body>
    @include('frontend.layouts.admin-top-dashboard-navbarmain')
    @yield('content')

    @yield('modal')
    @include('frontend.layouts.clientdashboard-front-js')
    @include('frontend.layouts.front-js')

</body>

</html>
