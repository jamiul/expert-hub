@php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
    else{
        $locale = env('DEFAULT_LANGUAGE');
    }
    $lang = \App\Models\Language::where('code', $locale)->first();
    $data=GetUrls();
@endphp
    <!DOCTYPE html>
@if($lang != null && $lang->rtl == 1)
    <html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @else
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @endif
        <head>
            @php
                if(!empty($data)){
            @endphp
            <title>{{$data['title']}}</title>
            <meta name="keywords" content="{{$data['keyword']}}">
            <meta name="description" content="{{$data['description']}}"/>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            @php } @endphp
            <meta name="app-url" content="{{ config('app.url') }}">
            <meta name="file-base-url" content="{{ config('app.url'). '/public' }}">

            <!-- Title -->
            <!-- <title>@yield('meta_title', getSetting('website_name').' | '.getSetting('site_motto'))</title> -->

            <!-- Required Meta Tags Always Come First -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- <meta name="description" content="@yield('meta_description', getSetting('meta_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', getSetting('meta_keywords'))"> -->

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

            <!-- CSS -->
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap">
            <link rel="stylesheet" href="{{ asset('assets/common/css/vendors.css') }}">
            @if($lang != null && $lang->rtl == 1)
                <link rel="stylesheet" href="{{ asset('assets/common/css/bootstrap-rtl.min.css') }}">
            @endif
            <link rel="stylesheet" href="{{ asset('assets/common/css/aiz-core.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/frontend/default/css/custom.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/common/css/jssocials.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/common/css/jssocials-theme-flat.css') }}">

            <script>
                var AIZ = AIZ || {};
                AIZ.local = {
                    nothing_selected: '{{ translate('Nothing selected') }}',
                    nothing_found: '{{ translate('Nothing found') }}',
                    choose_file: '{{ translate('Choose file') }}',
                    file_selected: '{{ translate('File selected') }}',
                    files_selected: '{{ translate('Files selected') }}',
                    items_selected: '{{ translate('Items selected') }}',
                    add_more_files: '{{ translate('Add more files') }}',
                    adding_more_files: '{{ translate('Adding more files') }}',
                    drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
                    browse: '{{ translate('Browse') }}',
                    upload_complete: '{{ translate('Upload complete') }}',
                    upload_paused: '{{ translate('Upload paused') }}',
                    resume_upload: '{{ translate('Resume upload') }}',
                    pause_upload: '{{ translate('Pause upload') }}',
                    retry_upload: '{{ translate('Retry upload') }}',
                    cancel_upload: '{{ translate('Cancel upload') }}',
                    uploading: '{{ translate('Uploading') }}',
                    processing: '{{ translate('Processing') }}',
                    complete: '{{ translate('Complete') }}',
                    file: '{{ translate('File') }}',
                    files: '{{ translate('Files') }}',
                }
            </script>
            <style type="text/css">
                body {
                    /* font-family: 'Montserrat', sans-serif; */
                    font-family: 'Public Sans', sans-serif;
                    font-weight: 500;
                }

                :root {
                    --primary: {{ getSetting('base_color', '#377dff') }};
                    --hov-primary: {{ getSetting('base_hov_color', '#0069d9') }};
                    --soft-primary: {{ hex2rgba(getSetting('base_hov_color','#377dff'),.15) }};
                    --soft-hov-primary: {{ hex2rgba(getSetting('base_hov_color','#0069d9'),.06) }};
                }
            </style>

            @if (getSetting('google_analytics_activation_checkbox') == 1)
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async
                        src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}"></script>

                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }

                    gtag('js', new Date());
                    gtag('config', '{{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}');
                </script>
            @endif

            @if (getSetting('fb_pixel_activation_checkbox') == 1)
                <!-- Facebook Pixel Code -->
                <script>
                    !function (f, b, e, v, n, t, s) {
                        if (f.fbq) return;
                        n = f.fbq = function () {
                            n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                        };
                        if (!f._fbq) f._fbq = n;
                        n.push = n;
                        n.loaded = !0;
                        n.version = '2.0';
                        n.queue = [];
                        t = b.createElement(e);
                        t.async = !0;
                        t.src = v;
                        s = b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t, s)
                    }(window, document, 'script',
                        'https://connect.facebook.net/en_US/fbevents.js');
                    fbq('init', {{ env('FACEBOOK_PIXEL_ID') }});
                    fbq('track', 'PageView');
                </script>
                <noscript>
                    <img height="1" width="1" style="display:none"
                         src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
                </noscript>
                <!-- End Facebook Pixel Code -->
            @endif

            @stack('top_styles')

            @stack('top_scripts')
        </head>
        <body class="text-left">
