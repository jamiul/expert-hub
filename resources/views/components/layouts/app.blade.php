<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Expert Gate' }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('logo/expert-gate-favicon.ico') }}">
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        @vite('resources/css/app.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/client-dashboard.css')
        @vite('resources/css/components.css')
        @vite('resources/css/choices.css')
        @vite('resources/js/choices.min.js')
        <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">
    </head>
    <body>
        <header class="auth-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ auth() ? route('expert.dashboard') : route('home') }}"><img src="{{ asset('logo/expert-gate-logo.png') }}" /></a>
                    </div>
                </div>
            </div>
        </header>
        {{ $slot }}
        @livewire('modal-pro')
        <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
        <x-toaster/>
    </body>
</html>
