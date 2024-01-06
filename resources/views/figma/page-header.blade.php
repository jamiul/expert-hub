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
            <div class="header-menu-trigger">
                <button onclick="toggleClasses('.main-header', 'mobile-menu-activated' )">
                    <span></span>
                </button>
            </div>
            <div class="header-logo">
                <a href="">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
                </a>
            </div>
            <nav class="main-header-nav">
                <ul>
                    <li>
                        <a href="/figma/client-dashboard">Projects </a>
                    </li>
                    <li>
                        <a href="/figma/client-dashboardexperthire">Experts</a>
                    </li>

                    <li>
                        <a href="/figma/client-clientaddpayment">Billing & Payments</a>
                    </li>

                    <li>
                        <a href="/figma/client-passwordsecurity">Settings</a>
                    </li>
                </ul>
            </nav>

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
            </div>


            <div class="header-special-menu">
                <ul class="">
                    <li class="header-search-trigger">
                        <a class="icon-btn border" href="#">
                            <x-icon.search fill="#191D24"/>
                        </a>
                    </li>
                    <li>
                        <a class="icon-btn border" href="#">
                            <x-icon.heart/>
                        </a>
                    </li>
                    <li>

                        <a class="icon-btn border" onclick="submenuTrigger(this, event)" href="#">
                            <span>99</span>
                            <x-icon.bell/>
                        </a>
                        <div class="header-dropdown">
                            <div class="notification-dropdown-inner">
                                <div class="notification-dropdown-item-wrapper">
                                    <div class="notification-dropdown-item notification-dropdown-item-unread">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your
                                                invitation</p>
                                            <p class="text-sm">
                                                <span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                                <span class="notification-dropdown-time">1m</span>
                                            </p>

                                        </div>

                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your
                                                invitation</p>
                                            <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                                <span class="notification-dropdown-time">1m</span></p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your
                                                invitation</p>
                                            <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                                <span class="notification-dropdown-time">1m</span></p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your
                                                invitation</p>
                                            <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                                <span class="notification-dropdown-time">1m</span></p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your
                                                invitation</p>
                                            <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                                <span class="notification-dropdown-time">1m</span></p>
                                        </div>
                                    </div>
                                </div>
                                <a href="/figma/user-notification" class="notification-dropdown-view-all">
                                    <x-icon.bell fill="#C8C5D4"/>
                                    View All Notification</a>
                            </div>

                        </div>
                    </li>
                    <li>

                        <a class="icon-btn border" href="#">
                            <span>99</span>
                            <x-icon.message-line/>
                        </a>
                    </li>
                    <li>
                        <a class="icon-btn border" onclick="submenuTrigger(this, event)" href="#">
                            <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
                        </a>
                        <div class="header-dropdown">
                            <div class="profile-dropdown-inner">
                                <div class="dropdown-user-thumbnail mb-3">
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"/>
                                </div>
                                <div class="dropdown-user-info  mb-3">
                                    <h3 class="h6 mb-1">Dr. Darrell Steward</h3>
                                    <p class="text-sm">Sydney Islamic business school</p>
                                </div>
                                <div class="dropdown-user-profile-status  mb-3">
                                    <input type="radio" name="user-profile-status" id="user-profile-offline">
                                    <label for="user-profile-offline"> Offline</label>
                                    <input type="radio" name="user-profile-status" id="user-profile-online" checked>
                                    <label for="user-profile-online"> Online</label>
                                </div>
                                <div class="dropdown-user-menu">
                                    <ul>
                                        <li><a href="">
                                                <x-icon.user/>
                                                Profile</a></li>
                                        <li><a href="">
                                                <x-icon.settings-line/>
                                                Setting</a></li>
                                        <li><a href="">
                                                <x-icon.logout-box-line/>
                                                Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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

        function submenuTrigger(element, event) {
            event.preventDefault();
            element.parentElement.classList.toggle("active-sub-menu");
        }
    </script>
@endsection
