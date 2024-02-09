@extends('frontend.layouts.app')
@section('content')
    <section class="page-section-sm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout right-sidebar-layout expert-dashboard-layout">
                        <div class="page-content p-0">
                            <livewire:expert-profile.project-list/>
                        </div>
                        <div class="page-sidebar">
                            <livewire:profile.summary/>
                            <div class="profile-widget bb-1">
                                <div class="d-flex gap-3 justify-content-between mb-2">
                                    <h4 class="widget-title mb-0">Available Now</h4>
                                    <span>
                                        <label class="widget-title-switch widget-on-off-switch">
                                            <input type="checkbox" role="switch" name="project-type">
                                            <span class="switch-label">
                                                <span class="switch-track">
                                                    <span class="switch-indicator"></span>
                                                </span>
                                            </span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="profile-widget bb-1">
                                <h4 class="widget-title">Services</h4>
                                <div class="widget-menu">
                                    <ul>
                                        <li> <a href="{{ route('expert.profile.edit') }}">Consultation ({{ $consultationCount }})</a> </li>
                                        <li> <a href="{{ route('find.trainings') }}">Training ({{ $trainingCount }})</a> </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="profile-widget bb-1">
                                <h4 class="widget-title">Services</h4>
                                <div class="widget-menu">
                                    <ul>
                                        <li> <a href="{{ route('expert.profile.edit') }}">Consultation ({{ $consultationCount }})</a> </li>
                                        <li> <a href="{{ route('find.trainings') }}">Training ({{ $trainingCount }})</a> </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="profile-widget bb-1">
                                <h4 class="widget-title">Proposals</h4>
                                <div class="widget-menu">
                                    <ul>
                                        <li> <a href="#">Received (6) </a> <span
                                                class="badge rounded-pill bg-success fw-normal ms-2 px-2">New</span> </li>
                                        <li> <a href="#">Submitted (3) </a> </li>
                                        <li> <a href="#">Invitation (1) </a> </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="profile-widget bb-1">
                                <h4 class="widget-title">Network</h4>
                                 <p class="fw-medium mb-0"> <small class="text-muted">You have</small> <a href="#">56
                                         Connection</a> </p>
                            </div>
                            <div class="profile-widget bb-1">
                                <h4 class="widget-title">Proposals</h4>
                                <div class="widget-menu">
                                    <ul>
                                        <li> <a href="#">Help Center</a> </li>
                                        <li> <a href="#">Direct Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
