<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EduExHub</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        @vite('resources/css/filepond.css')
        @vite('resources/css/choices.css')
        @vite('resources/css/app.css')
        @vite('resources/css/style.css')
        @vite('resources/css/owl.carousel.min.css')
        @vite('resources/css/owl.theme.default.css')
        @vite('resources/css/client-dashboard.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/components.css')
        @stack('styles')
    </head>
    <body>
        @include('frontend.layouts.partials.nav')
        @yield('content')
        @include('frontend.layouts.partials.footer')
        @vite('resources/js/filepond.js')
        @vite('resources/js/choices.min.js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite('resources/js/owl.carousel.min.js')
        @stack('scripts')
    </body>
</html>