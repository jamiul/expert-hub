@extends('frontend.layouts.app')
@section('content')
<section class="client-dashboard mx-auto my-5">
    <div class="container">
        <div class="row">
            <div class="job-area-top d-flex justify-content-between">
                <div class="all-project">
                    <h2>Your workspace</h2>
                </div>
                <div class="all-project-post">
                    <div class="all-project-post-content">
                        <ul>
                            <li><a href="{{ route('client.projects') }}">All Project Posts</a></li>
                            <li><a href="{{ route('client.contracts') }}">All Contracts</a></li>
                        </ul>
                    </div>
                    <div class="job-post">
                        <a href="{{ route('projects.create') }}"  class="btn edux-btn-primary">
                            <span class="arrow-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
                                </svg>
                            </span>
                            <span class="btn-text">Post a Job</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row owlp-bottom mt-5">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="owl-carousel owl-carouselfour owl-theme client-home-carousel">
                        @foreach ($projects as $project)
                            <div class="item">
                                <div class="single-card-area">
                                    <div class="inprogress-area">
                                        <div class="in-hiring">
                                            <p class="btn-hiring">Hiring</p>
                                        </div>
                                        <div class="draft-options">
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                        <path d="M9.5 15C9.0875 15 8.73438 14.8531 8.44063 14.5594C8.14687 14.2656 8 13.9125 8 13.5C8 13.0875 8.14687 12.7344 8.44063 12.4406C8.73438 12.1469 9.0875 12 9.5 12C9.9125 12 10.2656 12.1469 10.5594 12.4406C10.8531 12.7344 11 13.0875 11 13.5C11 13.9125 10.8531 14.2656 10.5594 14.5594C10.2656 14.8531 9.9125 15 9.5 15ZM9.5 10.5C9.0875 10.5 8.73438 10.3531 8.44063 10.0594C8.14687 9.76563 8 9.4125 8 9C8 8.5875 8.14687 8.23438 8.44063 7.94063C8.73438 7.64688 9.0875 7.5 9.5 7.5C9.9125 7.5 10.2656 7.64688 10.5594 7.94063C10.8531 8.23438 11 8.5875 11 9C11 9.4125 10.8531 9.76563 10.5594 10.0594C10.2656 10.3531 9.9125 10.5 9.5 10.5ZM9.5 6C9.0875 6 8.73438 5.85313 8.44063 5.55938C8.14687 5.26562 8 4.9125 8 4.5C8 4.0875 8.14687 3.73438 8.44063 3.44063C8.73438 3.14687 9.0875 3 9.5 3C9.9125 3 10.2656 3.14687 10.5594 3.44063C10.8531 3.73438 11 4.0875 11 4.5C11 4.9125 10.8531 5.26562 10.5594 5.55938C10.2656 5.85313 9.9125 6 9.5 6Z" fill="#191D24"/>
                                                    </svg>
                                                </a>
                                                <ul class="dropdown-menu dropdown-show">
                                                    <li>
                                                        <a class="dropdown-item " href="#">Invite Experts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">View Job Posting</a>
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
                                    </div>

                                    <div class="developing-area">
                                        <div class="profile-single-area">
                                            <div class="single-person">
                                                <img src="{{ asset('assets/frontend/img/kk2.png') }}" />
                                                <p class="single-designation">Prof. Michael Kassiou</p>
                                            </div>
                                        </div>
                                        <div class="profile-single-title">
                                            <h3>{{ Str::of($project->title)->limit(40) }}</h3>
                                        </div>
                                        <div class="profile-single-text">
                                            <p>You have {{ $project->newEois()->count() }} new proposal</p>
                                        </div>
                                    </div>
                                    <div class="profile-single-button">
                                        <a href="{{ route('client.eois.index', $project) }}" class="btn btn-fundmilestone">Review Proposal</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="owl-carousel owl-carouselfour owl-theme client-home-carousel">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="academic-block academic-block-client">
                <div class="container px-5 px-sm-3">
                    <div class="heading client-heading">
                        <h2>Upcoming Academic Training</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="live-zoom">
                                <div class="zoom-icon">
                                    <img src="{{ asset('assets/frontend/img/zoom-icon.png') }} " ></img>
                                    <h4>Live via Zoom</h4>
                                </div>
                                <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="training">
                                <h3>Statistics with R*</h3>
                                <div class="training-text">
                                    <span>Instructor:</span>
                                    <a href="#">Cameron Williamson</a>
                                    <a href="#">Guy Hawkins</a>
                                </div>
                                <h6>Language: <span>French</span></h6>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="training-button">
                                <a href="#" class="training-registered">Registered</a>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="live-zoom">
                            <div class="zoom-icon">
                                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}"></img>
                                <h4>Live via Zoom</h4>
                            </div>
                            <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="training">
                            <h3>Longitudinal Data Analysis Using Stata</h3>
                            <div class="training-text">
                                <span>Instructor:</span>
                                <a href="#">Marvin McKinney</a>
                                <a href="#">Wade Warren</a>
                            </div>
                            <h6>Language: <span>French</span></h6>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="training-button">
                            <a href="#">Registration</a>
                            <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="live-zoom">
                            <div class="zoom-icon">
                                <img src="{{ asset('assets/frontend/img/zoom-icon.png') }}"></img>
                                <h4>Live via Zoom</h4>
                            </div>
                            <p>Mon Aug 28 – Wed Aug 30, 2023, from 10am – 3pm daily (Australian Eastern Standard Time)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="training">
                            <h3>Multilevel and Mixed Models Using Stata</h3>
                            <div class="training-text">
                                <span>Instructor:</span>
                                <a href="#">Leslie Alexander</a>
                                <a href="#">Jacob Jones</a>
                            </div>
                            <h6>Language: <span>French</span></h6>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="training-button">
                            <a href="#">Registration</a>
                            <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-job-area edux-all-job-area d-flex justify-content-between">
                <div class="all-project">
                    <h2>Discover our Experts</h2>
                </div>
                <div class="view-all-expert">
                    <a href="{{ route('find.experts') }}" class="btn btn-primary edux-btn-primary">View All Experts</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-carouselfour  owl-theme rate-caurasel discover-carousel mb-4">
                @foreach ($experts as $expert)
                    <div class="item">
                        <div class="single-card-area">
                            <div class="developing-area">
                                <div class="discover-single-area">
                                    <div class="discover-single-person">
                                        <div class="notify-img position-relative">
                                            <img class="rounded-circle" src="{{ $expert->picture }}" />
                                            <span class="notify-point-green"></span>
                                        </div>
                                        <div class="profile-single-title-vs">
                                            <h3>{{ $expert->user->full_name }}</h3>
                                            <p class="single-designation">{{ $expert->expertField->name }}</p>
                                            {{-- <p class="single-university">Oxford University </p> --}}
                                        </div>
                                        <div class="hourly-rate-area">
                                            <span class="country-rate">{{ $expert->user->country->name }}</span>
                                            <span class="country-divided"></span>
                                            <span class="country-rate">${{ $expert->hourly_rate }}/hr</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-single-button">
                                    <a href="{{ route('expert.profile.show', $expert) }}" class="btn btn-fundmilestone btn-viewprofile">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

    <div class="team about-team">
        <livewire:about.team />
    </div>
    <style>
        .team.about-team section{
            background:none!important;
        }
    </style>
@endsection
@include('frontend.layouts.front-js')
@include('frontend.layouts.clientdashboard-front-js')