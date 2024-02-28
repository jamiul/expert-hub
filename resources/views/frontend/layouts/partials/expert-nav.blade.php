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
                        <li><a href="{{ route('find.projects') }}">Find Project</a></li>
                        <li><a href="{{ route('expert.eois.index') }}">My EOIs</a></li>
                        <li><a href="{{ route('expert.contracts') }}">My Contracts</a></li>
                    </ul>
                </li>
                <li class="item-has-submenu">
                    <a href="#">Reports</a>
                    <ul>
                        <li><a href="{{ route('expert.profile.edit') }}">My Profile</a></li>
                        <li><a href="{{ route('expert.analytics') }}">Analytics</a></li>
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
                    <a class="icon-btn border"  @click="openDropdown = (openDropdown === 'favourates') ? null : 'favourates'"  href="{{ route('expert.profile.favourites') }}">
                        <x-icon.heart/>
                    </a>

                    {{-- <div x-show="openDropdown === 'favourates'" class="header-dropdown">
                            <div class="notification-dropdown-inner">
                                <div class="notification-dropdown-item-wrapper">
                                    <div class="notification-dropdown-item notification-dropdown-item-unread">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/expert-profile.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon Jimbo </p>
                                            <p class="text-sm notification-dropdown-body">
                                                <span class="notification-dropdown-message">Accreditation Specialist</span>
                                            </p>

                                        </div>

                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/expert-icon1.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Developing curriculum for Postgraduate  ...</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Project</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/expert-icon2.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Igniting the Spark: Designing PhD ...</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Scholarship</span>

                                            </p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/expert-icon3.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Igniting the Spark: Designing PhD ...</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Academic Training</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="notification-dropdown-item">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/expert-icon4.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">An offer was expired</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">A wonderful serenity has taken about ...  1m</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('expert.profile.favourites') }}" class="notification-dropdown-view-all">
                                    <x-icon.heart fill="#C8C5D4"/>
                                    View All Favorites</a>
                            </div>
                        </div> --}}

                </li>
                @livewire('expert-notification-count')

                <livewire:new-message-count />

                <li>
                    <a class="icon-btn border" @click.prevent="openDropdown = (openDropdown === 'profile') ? null : 'profile'" href="#">
                        <img src="{{ auth()->user()->profile->picture ? auth()->user()->profile->picture : asset('dummy-user.png')}}"/>
                    </a>
                    <div x-cloak x-show="openDropdown === 'profile'" @click.outside="openDropdown = null" class="header-dropdown">
                        <div class="profile-dropdown-inner">
                            <div class="dropdown-user-thumbnail mb-3">
                                <img
                                    src="{{ auth()->user()->profile->picture ?: asset('dummy-user.png') }}"/>
                            </div>
                            <div class="dropdown-user-info  mb-3">
                                <h3 class="h6 mb-1">{{ auth()->user()->full_name }}</h3>
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
