<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expert Gate</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('logo/expert-gate-favicon.ico') }}">
        @vite('resources/sass/bootstrap.scss')
        @vite('resources/css/app.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/client-dashboard.css')
        @vite('resources/css/components.css')
        @vite('resources/css/choices.css')
        @vite('resources/js/choices.min.js')
        <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="auth-nav d-flex align-items-center">
                        <a href="{{ route('expert.dashboard') }}"><img src="{{ asset('logo/expert-gate-logo.png') }}" /></a>
                    </nav>
                </div>
            </div>
        </div>
        @yield('content')
        @livewire('modal-pro')
        <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
        <x-toaster/>
    </body>
</html>