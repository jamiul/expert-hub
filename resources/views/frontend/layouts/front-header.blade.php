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

    <!-- Favicon -->
    <link rel="icon"
            href="">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome_6.4.2_css_all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/client-dashboard.css') }}">

    <!-- Client Dashboard Css -->

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome_6.4.2_css_all.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   @stack('top_styles')
</head>
