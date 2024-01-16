<header class="public-header">
    <div class="public-header-main">
        <div class="public-header-container">
            <div class="header-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/img/logo.png') }}"/></a>
            </div>
            <div class="header-search">
                <form action="">
                    <input type="search" placeholder="I am looking for">
                    <div class="search-select" id="">
                        <label for="header-search-type">
                            <x-icon.chevron-right width="18" height="18"/>
                        </label>
                        <input type="text" value="Expert" id="header-search-type">
                        <ul>
                            <li>Expert</li>
                            <li>Project</li>
                            <li>Training</li>
                            <li>Scholarship</li>
                        </ul>
                    </div>
                    <button>
                        <x-icon.search fill="#191D24"/>
                    </button>
                </form>
                <div class="header-search-trigger">
                    <button class="icon-btn border">
                        <x-icon.search fill="#0036E3"/>
                    </button>
                </div>
            </div>
            <div class="header-menu-trigger">
                <button onclick="toggleClasses('.public-header', 'mobile-menu-activated' )">
                    <span></span>
                </button>
            </div>
            <div class="header-special-menu">
                <ul class="">
                    <li><a href="{{ route('projects.create') }}">{{ __('Post your Project') }}</a></li>
                    <li><a href="#">Become an Expert</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="public-header-bottom">

        <nav class="public-header-nav">
            <ul>
                <li>
                    <a href="{{ url('/find-experts') }}">{{ __('Find Experts') }}</a>
                </li>

                <li>
                    <a href="{{ url('find-projects') }}">{{ __('Find Projects') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('Find Training') }}</a>
                </li>
                <li>
                    <a href="{{ url('scholarship-database') }}">{{ __('Scholarships Database') }}</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                </li>
                @guest
                    <li class="public-auth-nav-item login-nav-item">
                        <a href="{{ route('auth.login') }}">
                            <x-icon.user-tie/>
                            {{ __('Login') }}
                        </a>
                    </li>
                    <li class="public-auth-nav-item register-nav-item">
                        <a href="{{ route('auth.registration') }}">
                            <x-icon.user-tie/> {{ __('Register') }}</a>
                    </li>
                @endguest
{{--                @auth--}}
{{--                    <li class="public-auth-nav-item logout-nav-item">--}}
{{--                        <form method="POST" action="{{ route('auth.logout') }}">--}}
{{--                            @csrf--}}
{{--                            <button class="button button-primary" type="submit">Logout</button>--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                @endauth--}}
            </ul>
        </nav>

    </div>

</header>
