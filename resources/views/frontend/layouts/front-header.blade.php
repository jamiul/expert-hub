<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (!empty($data))
        <title>{{ $data['title'] }}</title>
        <meta name="keywords" content="{{ $data['keyword'] }}">
        <meta name="description" content="{{ $data['description'] }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endif

    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="file-base-url" content="{{ config('app.url') . '/public' }}">

    @yield('meta')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    @vite('resources/css/owl.carousel.min.css')
    @vite('resources/css/owl.theme.default.css')
    @vite('resources/css/components.css')
    @vite('resources/css/client-dashboard.css')

   @stack('top_styles')
</head>
