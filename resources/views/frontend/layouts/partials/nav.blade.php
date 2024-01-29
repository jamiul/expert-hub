<header class="public-header">
    <div class="public-header-main">
        <div class="public-header-container">
            <div class="header-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('logo/expert-gate-logo.png') }}"/></a>
            </div>
            <nav class="main-header-nav">
                <ul>
                    <li>
                        <a href="{{ url('/find-experts') }}">{{ __('Experts') }}</a>
                    </li>

                    <li>
                        <a href="{{ url('find-projects') }}">{{ __('Projects') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ __('Training') }}</a>
                    </li>
                    <li>
                        <a href="{{ url('scholarship-database') }}">{{ __('Scholarship') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                    </li>

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

            <div class="header-special-menu">
                <ul class="">
                    <li><a href="#">Join as an Expert</a></li>
                    <li class="header-special-menu-active-item"><a href="{{ route('projects.create') }}">{{ __('Post your Project') }}</a></li>
                    @guest
                        <li><a href="{{ route('auth.login') }}"> {{ __('Log In') }}  </a></li>
                    @endguest
                </ul>
            </div>
            <div class="header-menu-trigger">
                <button onclick="toggleClasses('.public-header', 'mobile-menu-activated' )">
                    <span></span>
                </button>
            </div>

        </div>
    </div>

</header>
