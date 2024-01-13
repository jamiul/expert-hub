<header class="main-header">
    <div class="main-header-container">
        <div class="header-logo">
            <a href="">
                <img src="{{ asset('assets/frontend/img/logo.png') }}"/>
            </a>
        </div>
        <nav class="main-header-nav">
            <ul>
                <li class="item-has-submenu">
                    <a href="/figma/client-dashboard">Projects </a>
                    <ul>
                        <li><a href="">Sub Menu 01</a></li>
                        <li><a href="">Sub Menu 02</a></li>
                        <li><a href="">Sub Menu 03</a></li>
                        <li><a href="">Sub Menu 04</a></li>
                        <li><a href="">Sub Menu 05</a></li>
                    </ul>
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
            <ul x-data="{ openDropdown: null }">
                <li class="header-search-trigger">
                    <button class="icon-btn border"
                            onclick="toggleClasses('.main-header .header-search', 'header-search-activated' )">
                        <x-icon.search fill="#191D24"/>
                    </button>
                </li>
                <li>
                    <a class="icon-btn border"  href="#">
                        <x-icon.heart/>
                    </a>
                </li>
                @livewire('expert-notification-count')
                <li>
                    <a class="icon-btn border" @click="openDropdown = (openDropdown === 'message') ? null : 'message'" href="#">
                        <span>99</span>
                        <x-icon.message-line/>
                    </a>
                    <div x-show="openDropdown === 'message'" class="header-dropdown">
                        <div class="message-dropdown-inner">
                            <div class="message-dropdown-item-wrapper">
                                <div class="message-dropdown-item message-dropdown-item-unread">
                                    <div class="message-dropdown-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="message-dropdown-info">
                                        <p class="text-sm fw-medium message-dropdown-title">Jhon accept your
                                            invitation</p>
                                        <p class="text-sm">
                                            <span
                                                class="message-dropdown-message">A wonderful serenity has taken</span>
                                            <span class="message-dropdown-time">1m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="message-dropdown-item">
                                    <div class="message-dropdown-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="message-dropdown-info">
                                        <p class="text-sm fw-medium message-dropdown-title">Jhon accept your
                                            invitation</p>
                                        <p class="text-sm">
                                            <span
                                                class="message-dropdown-message">A wonderful serenity has taken</span>
                                            <span class="message-dropdown-time">1m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="message-dropdown-item">
                                    <div class="message-dropdown-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="message-dropdown-info">
                                        <p class="text-sm fw-medium message-dropdown-title">Jhon accept your
                                            invitation</p>
                                        <p class="text-sm">
                                            <span
                                                class="message-dropdown-message">A wonderful serenity has taken</span>
                                            <span class="message-dropdown-time">1m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="message-dropdown-item">
                                    <div class="message-dropdown-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="message-dropdown-info">
                                        <p class="text-sm fw-medium message-dropdown-title">Jhon accept your
                                            invitation</p>
                                        <p class="text-sm">
                                            <span
                                                class="message-dropdown-message">A wonderful serenity has taken</span>
                                            <span class="message-dropdown-time">1m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="message-dropdown-item">
                                    <div class="message-dropdown-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="message-dropdown-info">
                                        <p class="text-sm fw-medium message-dropdown-title">Jhon accept your
                                            invitation</p>
                                        <p class="text-sm">
                                            <span
                                                class="message-dropdown-message">A wonderful serenity has taken</span>
                                            <span class="message-dropdown-time">1m</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="/figma/client-chatbox-new" class="message-dropdown-view-all">
                                <x-icon.message-line fill="#C8C5D4"/>
                                View All Message
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="icon-btn border" @click="openDropdown = (openDropdown === 'profile') ? null : 'profile'" href="#">
                        <img
                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"/>
                    </a>
                    <div x-show="openDropdown === 'profile'" class="header-dropdown">
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
                                    @auth
                                        <li>
                                            <form class="dropdown-logout-form" method="POST"
                                                  action="{{ route('auth.logout') }}">
                                                @csrf
                                                <x-icon.logout-box-line/>
                                                <button class="bg-light" type="submit">Logout</button>
                                            </form>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-menu-trigger">
            <button onclick="toggleClasses('.main-header', 'mobile-menu-activated' )">
                <span></span>
            </button>
        </div>
    </div>
</header>
