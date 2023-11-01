<header>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets/frontend/img/logo.png') }}"/></a>
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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/find-consultant') }}">{{ __('Find Consultants') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/search?keyword=&type=project') }}">{{ __('Find Projects') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/search?keyword=&type=training') }}">{{ __('Find Training') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('scholarship-search') }}?keyword=&type=scholarships">{{ __('Scholarships Database') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/expert-database') }}">{{ __('Experts Database') }}</a>
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
                        <a href="#"><i class="fa-sharp fa-solid fa-user-large"></i>{{ __('Login') }}</a>
                        <a href="#">{{ __('Register') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
