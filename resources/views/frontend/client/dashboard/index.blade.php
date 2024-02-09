@extends('frontend.layouts.app')
@section('content')
    <section class="page-section-sm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-page-wrapper">
                        <div class="title-page-header bb-1">
                            <h2 class="h5 mb-0">Your workspace</h2>
                        </div>
                        <div class="title-page-body p-40">
                            <div class="proposal-slider carousel-nav-shadow owl-carousel">
                                @foreach ($projects as $project)
                                    <div class="proposal-slider-card">
                                        <div class="proposal-slider-card-action">
                                            <div class="badge badge-primary badge-pill">Hiring</div>
                                            <div class="dropdown dropleft">
                                                <button class="icon-btn" data-bs-toggle="dropdown"
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
                            <hr>
                            <h3>Upcomming Traning Here</h3>
                            <div class="upcomming-training-wrapper">

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
                                            {{-- <p class="mb-0">Oxford University </p> --}}
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
