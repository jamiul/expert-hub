<header class="main-header">
    <div class="main-header-container">
        {{-- @dd(auth()->user()->full_name) --}}
        <div class="header-logo">
            <a href="{{ route('client.dashboard') }}">
                <img src="{{ asset('logo/expert-gate-logo.png') }}"/>
            </a>
        </div>
        <nav class="main-header-nav">
            <ul>
                <li class="item-has-submenu">
                    <a href="#">Projects</a>
                    <ul>
                        <li><a href="{{ route('projects.create') }}">Post a Project</a></li>
                        <li><a href="{{ route('client.projects') }}">All Project Posts</a></li>
                        <li><a href="{{ route('client.contracts') }}">All Contracts</a></li>
                    </ul>
                </li>
                <li class="item-has-submenu">
                    <a href="#">Reports</a>
                    <ul>
                        <li><a href="{{ route('client.profile.edit') }}">My Profile</a></li>
                        <li><a href="">Analytic</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('find.experts') }}">Experts</a>
                </li>
                <li>
                    <a href="{{ route('scholarship-database') }}">Scholarships</a>
                </li>
                <li>
                    <a href="{{ route('find.trainings') }}">Trainings</a>
                </li>
                <li class="item-has-submenu">
                    <a href="#">Billings & Payment</a>
                    <ul>
                        <li><a href="{{ route('client.payment.billing') }}">Transaction History</a></li>
                        <li><a href="{{ route('client.payment.index') }}">Payment Settings</a></li>
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
                    <input type="text" value="Expert" id="header-search-type">
                    <ul>
                        <li>Expert</li>
                        <li>Scholarship</li>
                        <li>Training</li>
                        <li>Consultation</li>
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
                    <a class="icon-btn border" @click="openDropdown = (openDropdown === 'favourates') ? null : 'favourates'"  href="#">
                        <x-icon.heart/>
                    </a>


                    <div x-show="openDropdown === 'favourates'" class="header-dropdown">
                            <div class="notification-dropdown-inner">
                                <div class="notification-dropdown-item-wrapper">
                                    <div class="notification-dropdown-item notification-dropdown-item-unread">
                                        <div class="notification-dropdown-thumb">
                                            <img
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
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
                                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                                class="" alt="avatar">
                                        </div>
                                        <div class="notification-dropdown-info">
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon Jimbo</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Higher Edu Curriculum Expert</span>
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
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon Jimbo</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Higher Edu Curriculum Expert</span>
                                                
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
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon Jimbo</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Higher Edu Curriculum Expert</span>
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
                                            <p class="text-sm fw-medium notification-dropdown-title">Jhon Jimbo</p>
                                            <p class="text-sm notification-dropdown-body"><span class="notification-dropdown-message">Higher Edu Curriculum Expert</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="/figma/client/favourate" class="notification-dropdown-view-all">
                                    <x-icon.heart fill="#C8C5D4"/>
                                    View All Favorites</a>
                            </div>
                        </div>


                </li>
                @livewire('expert-notification-count')

                <livewire:new-message-count />

                <li>
                    <a class="icon-btn border" @click.prevent="openDropdown = (openDropdown === 'profile') ? null : 'profile'" href="#">
                        <img
                            src="{{ auth()->user()->profile->picture ?: asset('dummy-user.png') }}"/>
                    </a>
                    <div x-cloak x-show="openDropdown === 'profile'" @click.outside="openDropdown = null" class="header-dropdown">
                        <div class="profile-dropdown-inner">
                            <div class="dropdown-user-thumbnail mb-3">
                                <img
                                    src="{{ auth()->user()->profile->picture ?: asset('dummy-user.png') }}"/>
                            </div>
                            <div class="dropdown-user-info mb-3">
                                <h3 class="h6 mb-1">{{ auth()->user()->full_name }}</h3>
                                <p class="text-sm">{{ auth()->user()->profile->current_organization }}</p>
                            </div>
                            <div class="dropdown-user-profile-status  mb-3">
                                <input type="radio" name="user-profile-status" id="user-profile-offline">
                                <label for="user-profile-offline"> Offline</label>
                                <input type="radio" name="user-profile-status" id="user-profile-online" checked>
                                <label for="user-profile-online"> Online</label>
                            </div>
                            <div class="dropdown-user-menu">
                                <ul>
                                    <li>
                                        <a
                                            href="{{ auth()->user()->active_profile->name == 'Expert' ? route('expert.profile.edit') : route('client.profile.edit') }}">
                                            <x-icon.user/>
                                            Profile
                                        </a>
                                    </li>
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
