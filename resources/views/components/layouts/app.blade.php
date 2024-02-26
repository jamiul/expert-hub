<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Expert Gate' }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('logo/expert-gate-favicon.ico') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                        <a href="{{ route('home') }}"><img src="{{ asset('logo/expert-gate-logo.png') }}" /></a>
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
