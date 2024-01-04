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
                <i>AAA</i>
            </button>
        </div>

    </div>

    <div class="header-menu">
        <ul>
            <li class="dropdown notification-dropdown-menu">
                <a class="" href="#" role="button" id="notification-dropdown" data-bs-toggle="dropdown"
                   aria-expanded="true">
                    <span>1</span>
                    <x-icon.bell/>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                     onclick="stopPropagation(event)">
                    <div class="notification-dropdown-inner">
                        <div class="notification-dropdown-item notification-dropdown-item-unread">
                            <div class="notification-dropdown-thumb">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                     class="" alt="avatar">
                            </div>
                            <div class="notification-dropdown-info">
                                <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your invitation</p>
                                <p class="text-sm">
                                    <span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                    <span class="notification-dropdown-time">1m</span>
                                </p>

                            </div>

                        </div>
                        <div class="notification-dropdown-item">
                            <div class="notification-dropdown-thumb">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                     class="" alt="avatar">
                            </div>
                            <div class="notification-dropdown-info">
                                <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your invitation</p>
                                <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                    <span class="notification-dropdown-time">1m</span></p>

                            </div>
                        </div>
                        <div class="notification-dropdown-item">
                            <div class="notification-dropdown-thumb">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                     class="" alt="avatar">
                            </div>
                            <div class="notification-dropdown-info">
                                <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your invitation</p>
                                <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                    <span class="notification-dropdown-time">1m</span></p>

                            </div>
                        </div>
                        <div class="notification-dropdown-item">
                            <div class="notification-dropdown-thumb">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                     class="" alt="avatar">
                            </div>
                            <div class="notification-dropdown-info">
                                <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your invitation</p>
                                <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                    <span class="notification-dropdown-time">1m</span></p>

                            </div>
                        </div>
                        <div class="notification-dropdown-item">
                            <div class="notification-dropdown-thumb">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                     class="" alt="avatar">
                            </div>
                            <div class="notification-dropdown-info">
                                <p class="text-sm fw-medium notification-dropdown-title">Jhon accept your invitation</p>
                                <p class="text-sm"><span class="notification-dropdown-message">A wonderful serenity has taken</span>
                                    <span class="notification-dropdown-time">1m</span></p>
                            </div>
                        </div>

                    </div>
                    <a href="/figma/user-notification" class="notification-dropdown-view-all">
                        <x-icon.bell fill="#C8C5D4"/>
                        View All Notification</a>
                </div>
            </li>
            <li class="dropdown admin-profile-menu">
                <a class=""
                   href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="true">
                    <span>
                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                     class="" alt="avatar">
                    </span>
                    <span>
                          <p class="admin-user-name">Professor Michael Kassiou</p>
                          <p class="admin-user-role">Curriculum Expert</p>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                     onclick="stopPropagation(event)">
                    <div class="admin-profile-dropdown-inner">
                        <div class="text-center">
                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile.png') }}"
                                 class="profile__thumbnail" alt="">
                        </div>
                        <p class="mb-0 lead fw-medium text-black text-center mt-3">Professor Michael Kassiou</p>
                        <p class="text-center small ff-public text-muted mb-0">Curriculum Expert</p>

                        <div class="d-flex status_box my-4">
                            <div class="position-relative col-6">
                                <input type="radio" name="status" id="offline"
                                       class="w-0 h-0 opacity-0 position-absolute top-0 start-0">
                                <label class="small fw-medium d-block text-center p-2" for="offline">Offline</label>
                            </div>
                            <div class="position-relative col-6">
                                <input checked type="radio" name="status" id="online"
                                       class="w-0 h-0 opacity-0 position-absolute top-0 start-0">
                                <label class="small fw-medium d-block text-center p-2" for="online">Online</label>
                            </div>
                        </div>

                        <ul class="ps-0 list-unstyled links mb-0">
                            <li class="mb-2">
                                <a href="#" class="d-inline-flex align-items-center small fw-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                         fill="none">
                                        <path
                                            d="M4 22.3335C4 17.9152 7.58172 14.3335 12 14.3335C16.4183 14.3335 20 17.9152 20 22.3335H18C18 19.0198 15.3137 16.3335 12 16.3335C8.68629 16.3335 6 19.0198 6 22.3335H4ZM12 13.3335C8.685 13.3335 6 10.6485 6 7.3335C6 4.0185 8.685 1.3335 12 1.3335C15.315 1.3335 18 4.0185 18 7.3335C18 10.6485 15.315 13.3335 12 13.3335ZM12 11.3335C14.21 11.3335 16 9.5435 16 7.3335C16 5.1235 14.21 3.3335 12 3.3335C9.79 3.3335 8 5.1235 8 7.3335C8 9.5435 9.79 11.3335 12 11.3335Z"
                                            fill="#A1A0A5"/>
                                    </svg>
                                    <span class="ps-2">Profile</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="d-inline-flex align-items-center small fw-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                         fill="none">
                                        <path
                                            d="M12 1.3335L21.5 6.8335V17.8335L12 23.3335L2.5 17.8335V6.8335L12 1.3335ZM12 3.6445L4.5 7.98661V16.6804L12 21.0225L19.5 16.6804V7.98661L12 3.6445ZM12 16.3335C9.79086 16.3335 8 14.5426 8 12.3335C8 10.1244 9.79086 8.3335 12 8.3335C14.2091 8.3335 16 10.1244 16 12.3335C16 14.5426 14.2091 16.3335 12 16.3335ZM12 14.3335C13.1046 14.3335 14 13.4381 14 12.3335C14 11.2289 13.1046 10.3335 12 10.3335C10.8954 10.3335 10 11.2289 10 12.3335C10 13.4381 10.8954 14.3335 12 14.3335Z"
                                            fill="#0036E3"/>
                                    </svg>
                                    <span class="ps-2">Setting</span>
                                </a>
                            </li>
                            <li>
                                <livewire:logout/>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>


{{--<ul class="navbar-nav flex-row mr-auto align-items-center">--}}
{{--    <li class="nav-item dropdown">--}}
{{--        <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center overflow-hidden show edux-profile-img"--}}
{{--           href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="true">--}}
{{--            --}}
{{--      --}}
{{--        </a>--}}

{{--    </li>--}}
{{--    <li class="nav-item dropdown">--}}
{{--        <div class="">--}}

{{--        </div>--}}
{{--    </li>--}}
{{--</ul>--}}

<script>
    // Stop dropdown close option when click inside the menu
    function stopPropagation(event) {
        event.stopPropagation();
    }
</script>
