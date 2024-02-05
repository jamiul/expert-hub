<header class="public-header">
    <div class="public-header-main">
        <div class="public-header-container">
            <div class="header-logo">
                {{-- @dd(Route::currentRouteName()) --}}
                <a href="{{ route('home') }}"><img src="{{ asset('logo/expert-gate-logo.png') }}"/></a>
            </div>
            <div class="header-menu-wrapper">
                <nav class="header-main-menu">
                    <ul>
                        <li class="{{ activeRouteClass('find.experts') }}">
                            <a href="{{ route('find.experts') }}">{{ __('Experts') }}</a>
                        </li>

                        <li class="{{ activeRouteClass('find.projects') }}">
                            <a href="{{ route('find.projects') }}">{{ __('Projects') }}</a>
                        </li>
                        <li class="{{ activeRouteClass('find.trainings') }}">
                            <a href="{{ route('find.trainings') }}">{{ __('Trainings') }}</a>
                        </li>
                        <li class="{{ activeRouteClass('scholarship-database') }}">
                            <a href="{{ route('scholarship-database') }}">{{ __('Scholarship Database') }}</a>
                        </li>
                        <li class="{{ activeRouteClass('about-us') }}">
                            <a href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                        </li>
                    </ul>
                </nav>

                <div class="header-special-menu">
                    <ul class="">
                        <li>
                            <a href="{{ route('auth.registration',['type' => \App\Enums\ProfileType::Expert->value]) }}">Join
                                as an Expert</a></li>
                        <li class="header-special-menu-active-item"><a
                                href="{{ route('projects.create') }}">{{ __('Post your Project') }}</a></li>
                        @guest
                            <li><a href="{{ route('auth.login') }}"> {{ __('Log In') }}  </a></li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="header-focus-menu">
                <ul>
                    <li class="header-focus-menu-active-item"><a
                            href="{{ route('projects.create') }}">{{ __('Post your Project') }}</a></li>
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
