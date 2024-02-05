<header class="main-header">
    <div class="main-header-container">
        <div class="header-logo">
            <a href="{{ route('expert.dashboard') }}">
                <img src="{{ asset('logo/expert-gate-logo.png') }}"/>
            </a>
        </div>
        <nav class="main-header-nav">
            <ul>
                <li class="item-has-submenu">
                    <a href="#">Projects</a>
                    <ul>
                        <li><a href="{{ route('find.projects') }}">Find project</a></li>
                        <li><a href="{{ route('expert.eois.index') }}">My Eois</a></li>
                        <li><a href="{{ route('expert.contracts') }}">My Contracts</a></li>
                    </ul>
                </li>
                <li class="item-has-submenu">
                    <a href="#">Reports</a>
                    <ul>
                        <li><a href="/expert/profile/edit">My profile</a></li>
                        <li><a href="/figma/expert-status-analytics">Analytic</a></li>
                    </ul>
                </li>

                <li class="item-has-submenu">
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="">My Consultation</a></li>
                        <li><a href="">My Training</a></li>
                    </ul>
                </li>

                <li class="item-has-submenu">
                    <a href="#">Billings & Payment</a>
                    <ul>
                        <li><a href="{{ route('expert.payment.billing') }}">Transaction History</a></li>
                        <li><a href="{{ route('expert.payment.index') }}">Get Paid</a></li>
                    </ul>
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
                    <input type="text" value="Project" id="header-search-type">
                    <ul>
                        <li>Project</li>
                        <li>Scholarship</li>
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

                <livewire:new-message-count />
                <!-- <li>
                    <a class="icon-btn border" @click.prevent="openDropdown = (openDropdown === 'message') ? null : 'message'" href="#">

                        <span>99</span>
                        <x-icon.message-line/>
                    </a>
                    <div x-cloak x-show="openDropdown === 'message'" class="header-dropdown">
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
                                        <p class="text-sm message-dropdown-body">
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
                                        <p class="text-sm message-dropdown-body">
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
                                        <p class="text-sm message-dropdown-body">
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
                                        <p class="text-sm message-dropdown-body">
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
                                        <p class="text-sm message-dropdown-body">
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
                </li> -->
                <li>
                    <a class="icon-btn border" @click.prevent="openDropdown = (openDropdown === 'profile') ? null : 'profile'" href="#">
                        <img src="{{ auth()->user()->profile->picture ? auth()->user()->profile->picture : asset('dummy-user.png')}}"/>
                    </a>
                    <div x-cloak x-show="openDropdown === 'profile'" @click.outside="openDropdown = null" class="header-dropdown">
                        <div class="profile-dropdown-inner">
                            <div class="dropdown-user-thumbnail mb-3">
                                <img
                                    src="{{ auth()->user()->profile->picture }}"/>
                            </div>
                            <div class="dropdown-user-info  mb-3">
                                <h3 class="h6 mb-1">{{ auth()->user()->full_name }}</h3>
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
                                    <li><a href="{{ route('expert.profile.edit') }}">
                                            <x-icon.user/>
                                            Profile</a></li>
                                    <li><a href="">
                                            <x-icon.settings-line/>
                                            Setting</a></li>
                                    @auth
                                        <li>
                                            @livewire('auth.logout')
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
