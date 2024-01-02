@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-page-wrapper">
                        <div class="title-page-header">
                            <h1 class="h5 m-0">Notifications</h1>
                        </div>
                        <div class="title-page-body">
                            <div class="notification-page-block-heading">
                                <h3 class="">Most recent</h3>
                            </div>
                            <div class="notification-details-list">

                                <div class="notification-details-list-item">
                                    <div class="notification-details-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="notification-details-info">
                                        <p class="text-sm notification-details-time">
                                            <x-icon.calender/>
                                            Jan 1, 2023
                                        </p>
                                        <p class="fw-medium notification-details-title">Jhon accept your
                                            invitation</p>
                                        <p class=" notification-details-message">A wonderful serenity has
                                            taken</p>

                                    </div>
                                    <div class="notification-details-action">
                                        <a class="btn btn-outline-primary" href="">View Proposal</a>
                                        <button class="icon-btn">
                                            <x-icon.close/>
                                        </button>
                                    </div>
                                </div>
                                <div class="notification-details-list-item">
                                    <div class="notification-details-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="notification-details-info">
                                        <p class="text-sm notification-details-time">
                                            <x-icon.calender/>
                                            Jan 1, 2023
                                        </p>
                                        <p class="fw-medium notification-details-title">Jhon accept your
                                            invitation</p>
                                        <p class=" notification-details-message">A wonderful serenity has
                                            taken</p>

                                    </div>
                                    <div class="notification-details-action">
                                        <a class="btn btn-outline-primary" href="">View Proposal</a>
                                        <button class="icon-btn">
                                            <x-icon.close/>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="no-details-notification">
                                <img src="{{ asset('/assets/frontend/img/notification-bell-lg.png') }}"
                                     class="" alt="">
                                <p class="h6 fw-medium mt-3">No New Notification</p>
                            </div>
                            <div class="notification-page-block-heading">
                                <h3 class="">Earlier</h3>
                            </div>
                            <div class="notification-details-list">

                                <div class="notification-details-list-item">
                                    <div class="notification-details-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="notification-details-info">
                                        <p class="text-sm notification-details-time">
                                            <x-icon.calender/>
                                            Jan 1, 2023
                                        </p>
                                        <p class="fw-medium notification-details-title">Jhon accept your
                                            invitation</p>
                                        <p class=" notification-details-message">A wonderful serenity has
                                            taken</p>

                                    </div>
                                    <div class="notification-details-action">
                                        <a class="btn btn-outline-primary" href="">View Proposal</a>
                                        <button class="icon-btn">
                                            <x-icon.close/>
                                        </button>
                                    </div>
                                </div>
                                <div class="notification-details-list-item">
                                    <div class="notification-details-thumb">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}"
                                            class="" alt="avatar">
                                    </div>
                                    <div class="notification-details-info">
                                        <p class="text-sm notification-details-time">
                                            <x-icon.calender/>
                                            Jan 1, 2023
                                        </p>
                                        <p class="fw-medium notification-details-title">Jhon accept your
                                            invitation</p>
                                        <p class=" notification-details-message">A wonderful serenity has
                                            taken</p>

                                    </div>
                                    <div class="notification-details-action">
                                        <a class="btn btn-outline-primary" href="">View Proposal</a>
                                        <button class="icon-btn">
                                            <x-icon.close/>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="load-more-notification-item text-center">
                                <button class="btn btn-outline-primary">Load More</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
