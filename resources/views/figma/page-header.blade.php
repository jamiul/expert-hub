@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')



    <div class="my-60">
        <div class="container bg-white border">
            <h2 class="h4 text-center m-0 py-5"> Page Header </h2>
        </div>
    </div>
    <div class="separator"><span>Public Header</span></div>

    <header class="public-header">
        <div class="public-header-main">
            <div class="public-header-container">
                <div class="header-logo">
                    <a href="">
                        <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
                    </a>
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
                                <li> My Projects</li>
                                <li> Proposals</li>
                                <li> All Contracts</li>
                                <li> Save jobs</li>
                                <li> Work Diary</li>
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
                        <li><a href="">Post your Project</a></li>
                        <li><a href="">Become an Expert</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="public-header-bottom">

            <nav class="public-header-nav">
                <ul>
                    <li>
                        <a href="/find-experts">Find Experts</a>
                    </li>

                    <li>
                        <a href="/find-projects">Find Projects</a>
                    </li>
                    <li>
                        <a href="#">Find Training</a>
                    </li>
                    <li>
                        <a href="/scholarship-database">Scholarships Database</a>
                    </li>
                    <li>
                        <a href="/about-us">About Us</a>
                    </li>
                    <li class="public-auth-nav-item login-nav-item">
                        <a href="/auth/login">
                            <x-icon.user-tie/>
                            Login</a>
                    </li>
                    <li class="public-auth-nav-item register-nav-item">
                        <a href="/auth/registration">
                            <x-icon.user-tie/>
                            Register</a>
                    </li>
                </ul>
            </nav>

        </div>

    </header>

    <div class="separator"><span>Authorized User Header</span></div>
    <header class="main-header">
        <div class="main-header-container">
            <div class="header-logo">
                <a href="">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
                </a>
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
                            <li> My Projects</li>
                            <li> Proposals</li>
                            <li> All Contracts</li>
                            <li> Save jobs</li>
                            <li> Work Diary</li>
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
                    <li>
                        <a class="icon-btn border" href="">
                            <x-icon.heart/>
                        </a>
                    </li>
                    <li>
                        <a class="icon-btn border" href="">
                            <x-icon.bell/>
                        </a>
                    </li>
                    <li>
                        <a class="icon-btn border" href="">
                            <x-icon.message-line/>
                        </a>
                    </li>
                    <li>
                        <a  class="icon-btn border"  href="">
                            <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div class="mb-60"></div>

    <script>
        function toggleClasses(parentSelector, className) {
            var parentElement = document.querySelector(parentSelector);
            if (parentElement) {
                // Toggle the specified class on the parent element
                parentElement.classList.toggle(className);
            } else {
                console.error('Parent element not found!');
            }
        }
    </script>
@endsection
