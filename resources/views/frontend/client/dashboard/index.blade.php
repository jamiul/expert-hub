@extends('frontend.layouts.app')
@section('content')
    <section class="page-section-sm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-page-wrapper client-dashboard-page-wrapper">
                        <div class="title-page-header bb-1 d-flex justify-content-between">
                            <h2 class="h5 mb-0">Your workspace</h2>
                            <div>
                                <ul class="d-flex gap-3 m-0">
                                    <li><a href="{{ route('client.projects') }}" class="btn  btn-light">All
                                            Project Posts</a></li>
                                    <li><a href="{{ route('client.contracts') }}" class="btn  btn-light">All
                                            Contracts</a></li>
                                    <li>
                                        <a href="{{ route('projects.create') }}" class="btn btn-has-icon btn-primary ">
                                            <x-icon.add fill="#fff"/>
                                            <span class="btn-text">Post a Job</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="title-page-body p-40">
                            <div class="proposal-slider carousel-nav-shadow owl-carousel mb-40">
                                @foreach ($projects as $project)
                                    <div class="proposal-slider-card">
                                        <div class="proposal-slider-card-action">
                                            <div class="badge badge-primary badge-pill">Hiring</div>
                                            <div class="dropdown dropleft">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu ">
                                                    <li>
                                                        <a class="dropdown-item "
                                                           href="{{ route('client.eois.index', $project) }}">Invite
                                                            Experts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="{{ route('client.eois.index', $project) }}">View
                                                            Job Posting</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Edit Posting</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Remove Posting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/kk2.png') }}"/>
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-medium text-sm">Prof. Michael Kassiou</p>
                                            </div>
                                        </div>
                                        <div class="proposal-slider-card-title">
                                            <h3 class="h6">{{ Str::of($project->title)->limit(40) }}</h3>
                                        </div>
                                        <div class="proposal-count">
                                            <p class="mb-0">You have {{ $project->newEois()->count() }} new proposal</p>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('client.eois.index', $project) }}"
                                               class="btn btn-md btn-outline-primary border-2 w-100">Review Proposal</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="dashboard-page-block bt-1">
                                <div class="dashboard-page-block-heading">
                                    <h2 class="h5 m-0">Upcoming Academic Training</h2>
                                    <a class="btn btn-md btn-outline-primary border-2" href="">View All</a>
                                </div>
                                <div class="upcomming-training-wrapper">
                                    @foreach ($latestTrainings as $training)
                                        <div class="training-small-card bb-1 bt-1">
                                            <div class="training-small-card-schedule">
                                                <p class="fw-medium">
                                                    @if($training->mode == \App\Enums\TrainingMode::Zoom)
                                                        <x-icon.video fill="#0036E3"/>
                                                    @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                                                        <x-icon.face-to-face fill="#0036E3"/>
                                                    @endif
                                                    {{ $training->mode }}
                                                </p>
                                                <p class="">{{ $training->start_date->format('d F Y') }}
                                                    - {{ $training->end_date->format('d F Y') }}</p>
                                                <p class="">{{ $training->start_time }} AEST, {{ $training->state->name }}
                                                    , {{ $training->country->name }}</p>
                                                <p class="">AUD {{ $training->fee }}</p>
                                            </div>
                                            <div class="training-small-card-info">
                                                <h3 class="h6"><a
                                                        href="{{ route('trainings.show', $training) }}">{{ $training->title }}</a>
                                                </h3>
                                                <div class="training-small-card-trainers">
                                                    @foreach ($training->instructors as $instructor)
                                                        <div class="user-small-card">
                                                            <div class="">
                                                                <img src="{{ $instructor->picture }}">
                                                            </div>
                                                            <div class="">
                                                                <h5 class="text-base mb-0">{{ $instructor->user->full_name ?? '' }}</h5>
                                                                <ul class="user-meta">
                                                                    <li>Melbourne University</li>
                                                                    <li>{{ $instructor->user->country?->name }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="training-small-card-action">
                                                <a href="#" class="btn btn-primary btn-md w-100 mb-2">Registration</a>
                                                <a href="{{ route('trainings.show', $training) }}"
                                                   class="btn btn-outline-primary btn-md w-100">Read More</a>
                                            </div>
                                        </div> <!--training-small-card-->
                                    @endforeach
                                </div>
                            </div>
                            <div class="dashboard-page-block pt-0">
                                <div class="dashboard-page-block-heading">
                                    <h2 class="h5 m-0">Discover our Experts</h2>
                                    <a class="btn btn-md btn-outline-primary border-2" href="">View All</a>
                                </div>
                                <div class="expert-profile-slider carousel-nav-shadow owl-carousel">
                                    @foreach ($experts as $expert)
                                        <div class="expert-profile-slider-card">
                                            <div class="expert-profile-image">
                                                <img src="{{ $expert->picture }}"/>
                                                <span class="notify-point-green"></span>
                                            </div>
                                            <div class="expert-profile-info">
                                                <h3 class="h6">{{ $expert->user->full_name }}</h3>
                                                <p class="mb-0">{{ $expert->expertField->name }}</p>
                                                <p class="mb-0 single-university">Oxford University </p>
                                                <ul class="expert-profile-meta">
                                                    <li>{{ $expert->user->country->name }}</li>
                                                    <li>${{ $expert->hourly_rate }}/hr</li>
                                                </ul>
                                                <a href="{{ route('expert.profile.show', $expert) }}"
                                                   class="btn btn-md btn-outline-primary border-2 w-100">
                                                    View Profile
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="page-section-sm team-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">TEAM</h2>
                        <p class="section-title-lead">Build on Demand Teams for your Education Institution</p>
                        <p class="section-title-summary">
                            Hire in under 48 hours. Scale up or down, no strings attached. We offer flexible engagements
                            from hourly to full-time.Hire in under 48 hours. Scale up or down, no strings attached. We
                            offer flexible engagements from hourly to full-time.
                            Hire in under 48 hours. Scale up or
                        </p>
                        <a href="{{ route('find.experts') }}" class="btn btn-primary btn-md">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    @livewire('about.team')
                </div>
            </div>
        </div>
    </section>
@endsection
@push('bottom_scripts')
    <script>


        // Owl Caurasel Start Here
        $(document).ready(function () {
            $('.proposal-slider').owlCarousel({
                loop: true,
                margin: 24,
                responsiveClass: true,
                nav: true,
                dots: false,
                navText: [
                    '<span class="material-symbols-outlined">chevron_left</span>',
                    '<span class="material-symbols-outlined">chevron_right</span>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },

                    600: {
                        items: 2,
                    },

                    768: {
                        items: 3,
                    },

                    1000: {
                        items: 3,
                    },
                    1200: {
                        items: 4,
                    }
                }
            })

            $('.expert-profile-slider').owlCarousel({
                loop: true,
                margin: 24,
                responsiveClass: true,
                nav: true,
                dots: false,
                navText: [
                    '<span class="material-symbols-outlined">chevron_left</span>',
                    '<span class="material-symbols-outlined">chevron_right</span>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },

                    600: {
                        items: 2,
                    },

                    768: {
                        items: 3,
                    },

                    1000: {
                        items: 3,
                    },
                    1200: {
                        items: 4,
                    }
                }
            })
        });


    </script>
@endpush
