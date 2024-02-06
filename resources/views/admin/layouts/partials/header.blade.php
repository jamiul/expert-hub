<div class="page-header-inner">
    <div class="header-branding">
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('assets/frontend/img/admin/logo.png') }}" height="40" width="auto"
                     class="img-fluid"
                     alt=""/>
            </a>
        </div>
        <div class="collapsable-sidebar-trigger">
            <button onclick="removeClass('.admin-layout', 'sidebar-small')">
                <x-icon.expand-right/>
            </button>
        </div>

    </div>

    <div class="header-menu">
        <ul x-data="{ openDropdown: null }">
            <li class="notification-dropdown-menu">
                <a @click="openDropdown = (openDropdown === 'notification') ? null : 'notification'" href="#">
                    <span>1</span>
                    <x-icon.bell/>
                </a>
                <div x-show="openDropdown === 'notification'" class="header-dropdown">
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
                                        <span
                                            class="notification-dropdown-message">A wonderful serenity has taken</span>
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
            <li class="admin-profile-menu">
                <a @click.prevent="openDropdown = (openDropdown === 'profile') ? null : 'profile'" href="#">
                    <span>
                        <img src="{{ asset('/dummy-user.png') }}">
                    </span>
                    <span>
                          <p class="admin-user-name">{{ auth('admin')->user()->fullName }}</p>
                          <p class="admin-user-role">Admin</p>
                    </span>
                </a>
                <div x-show="openDropdown === 'profile'" class="header-dropdown">
                    <div class="profile-dropdown-inner">
                        <div class="dropdown-user-thumbnail mb-3">
                            <img
                                src="{{ asset('/dummy-user.png') }}"/>
                        </div>
                        <div class="dropdown-user-info  mb-3">
                            <h3 class="h6 mb-1">{{ auth('admin')->user()->fullName }}</h3>
                            <p class="text-sm">Admin</p>
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

{{--<livewire:logout/>--}}


<script>
    // Stop dropdown close option when click inside the menu
    function stopPropagation(event) {
        event.stopPropagation();
    }
</script>
