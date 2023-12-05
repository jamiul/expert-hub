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
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z" fill="white"/>
                                </svg>
                            </button>
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
                            <a href="{{ route('auth.login') }}" class="eudx-login-person">
                                <span class="material-symbols-outlined top-person">person</span>
                                <span class="login-text">{{ __('Login') }}</span>
                            </a>
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
