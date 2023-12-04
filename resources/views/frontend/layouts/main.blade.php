<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EduExHub</title>
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        @vite('resources/css/style.css')
        @vite('resources/css/owl.carousel.min.css')
        @vite('resources/css/owl.theme.default.css')
        @vite('resources/css/client-dashboard.css')
        @vite('resources/css/filepond.css')
        @vite('resources/css/choices.css')
        @vite('resources/css/app.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/components.css')
        @stack('top_styles')
    </head>
    <body>
        <header>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/frontend/img/logo.png') }}" /></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-5">
                            <div class="search-block">
                                <form class="example">
                                    <input type="text" placeholder="Search expert..." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 padding">
                            <div class="header-post">
                                <a href="{{ route('projects.create') }}">{{ __('Post your Project') }}</a>
                                <a href="#">{{ __('Become an Expert') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ url('/find-experts') }}">{{ __('Find Experts') }}</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ url('/find-consultant') }}">{{ __('Find Consultants') }}</a>
                                            </li> --}}
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ url('find-projects') }}">{{ __('Find Projects') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ url('/find-training') }}">{{ __('Find Training') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ url('scholarship-database') }}">{{ __('Scholarships Database') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="login-block">
                                @guest
                                    <a href="{{ route('auth.login') }}"><i class="fa-sharp fa-solid fa-user-large"></i>{{ __('Login') }}</a>
                                    <a href="{{ route('auth.registration') }}">{{ __('Register') }}</a>
                                @endguest
                                @auth
                                    <form method="POST" action="{{ route('auth.logout') }}">
                                        @csrf
                                        <button class="button button-xs button-primary" type="submit">Logout</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        @include('frontend.layouts.partials.footer')
        @vite('resources/js/owl.carousel.min.js')
        @vite('resources/js/filepond.js')
        @vite('resources/js/choices.min.js')
        @stack('bottom_scripts')
    </body>
</html>