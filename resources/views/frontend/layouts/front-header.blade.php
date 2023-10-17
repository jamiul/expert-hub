<head>
    @php
        if(Session::has('locale')) {
            $locale = Session::get('locale', Config::get('app.locale'));
        }
        else {
            $locale = env('DEFAULT_LANGUAGE');
        }
        $lang = \App\Models\Language::where('code', $locale)->first();
        $data = GetUrls();
    @endphp

    @if(!empty($data))
        <title>{{$data['title']}}</title>
        <meta name="keywords" content="{{$data['keyword']}}">
        <meta name="description" content="{{$data['description']}}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endif

    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="file-base-url" content="{{ config('app.url'). '/public' }}">


    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('meta')

    @if(!isset($page))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ config('app.name', env('APP_NAME')) }}">
        <meta itemprop="description" content="{{ getSetting('meta_description') }}">
        <meta itemprop="image" content="{{ customAsset( getSetting('meta_image') ) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ config('app.name', env('APP_NAME')) }}">
        <meta name="twitter:description" content="{{ getSetting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ customAsset( getSetting('meta_image')) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ config('app.name', env('APP_NAME')) }}"/>
        <meta property="og:type" content="Business Site"/>
        <meta property="og:url" content="{{ env('APP_URL') }}"/>
        <meta property="og:image" content="{{ customAsset(getSetting('meta_image')) }}"/>
        <meta property="og:description" content="{{ getSetting('meta_description') }}"/>
        <meta property="og:site_name" content="{{ getSetting('website_name') }}"/>
    @endif

    <!-- Favicon -->
    <link rel="icon" href="{{ customAsset(getSetting('site_icon')) }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome_6.4.2_css_all.min.css') }}">

    @stack('top_styles')
</head>
