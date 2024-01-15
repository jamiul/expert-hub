@extends('frontend.layouts.app')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')
    <main class="expert__dashboad py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="row g-0">
                    <div class="col-lg-8 col-xxl-9">
                        <!-- Nav tabs Project list-->
                        <livewire:expert-profile.project-list />
                    </div>
                    <!--.//col Right side bar-->
                    <div class="col-lg-4 col-xxl-3 aside__wrapp">
                        <livewire:profile.summary :expertDashboard=true />
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-0">Available for Projects</p>
                            <div class="d-flex justify-content-between align-items-center"> <small
                                    class="text-muted fw-medium">Available Now</small>
                                <div class="toggle-button-cover">
                                    <div class="button-cover">
                                        <div class="button position-relative overflow-hidden b2" id="button-13"> <input
                                                type="checkbox" class="checkbox form-control">
                                            <div class="knobs"> <span></span> </div>
                                            <div class="layer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Services</p>
                            <ul class="link__list">
                                <li> <a href="{{ route('expert.profile.edit') }}">Consultation</a> </li>
                                <li> <a href="{{ route('find-training') }}">Training</a> </li>
                            </ul>
                        </div>
                        <!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Proposals</p>
                            <ul class="link__list">
                                <li> <a href="#">Received (6) </a> <span
                                        class="badge rounded-pill bg-success fw-normal ms-2 px-2">New</span> </li>
                                <li> <a href="#">Submitted (3) </a> </li>
                                <li> <a href="#">Invitation (1) </a> </li>
                            </ul>
                        </div>
                        <!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Network</p>
                            <ul class="link__list">
                                <li> <small class="fw-medium text-muted">You have</small> <a href="#">56
                                        Connection</a> </li>
                            </ul>
                        </div>
                        <!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Important Links</p>
                            <ul class="link__list">
                                <li> <a href="#">Help Center</a> </li>
                                <li> <a href="#">Direct Contact</a> </li>
                            </ul>
                        </div>
                        <!--.//item-->
                    </div>
                    <!--.//col-->
                </div>
                <!--./row-->
            </div>
            <!--.//main__content-->
        </div>
        <!--.//container-->
    </main>
@endsection
