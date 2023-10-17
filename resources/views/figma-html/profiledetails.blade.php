@extends('frontend.layouts.front-layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my">
        <div class="container">
            <div class="row g-5 cprofiled">
                <div class="col-md-5 col-lg-4 sidebar-steps">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="timeline-vertical timeline-with-details">
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
                                                </div><span class="timeline-bar"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>General Information</h5>
                                                <p>Profile details</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
                                                </div><span class="timeline-bar"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>Field of Expertise</h5>
                                                <p>Area of Expertise</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
                                                </div><span class="timeline-bar"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>Education</h5>
                                                <p>Education details</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
                                                </div><span class="timeline-bar"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>Consultation</h5>
                                                <p>Type of consultation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
                                                </div><span class="timeline-bar"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>Biography</h5>
                                                <p>Your Biography</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="timeline-item-content ps-6">
                                                <h5>Profile Picture</h5>
                                                <p>Add profile picture</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 ps-md-5">
                    <h3 class="fw-bold">Tell us About Your Expertise</h3>
                    <p>This helps in finding the right protect for you</p>
                    <br>
                    <h4 class="fw-bold">What languages do you speak?</h3>
                        <p>We will use this to help match you with clients whio are fluent in their language</p>

                        <div class="row gy-3">
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="cc-name" placeholder="eg. English "
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="w-100">
                                    <hr class="my-4">
                                    <div class="row gy-3">
                                        <div class="col-lg-4 col-md-5">
                                            <button class="w-100 border btn-lg border-all-5 btn-outline-primary">
                                                <i class="las la-arrow-left la-lg"></i> Back
                                            </button>
                                        </div>
                                        <div class="col-lg-4 col-md-2"></div>
                                        <div class="col-lg-4 col-md-5">
                                            <button class="w-100 btn btn-primary btn-lg border-all-5"
                                                type="submit">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
