@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row g-5 pconsult">
                <div class="col-md-5 col-lg-4 ">
                    <div class="card h-100 card-shadow">
                        <div class="card-body">
                            <div class="timeline-vertical timeline-with-details">
                                <div class="timeline-item">
                                    <div class="row g-sm-3">
                                        <div class="col-12 col-sm-auto activity-bar d-flex">
                                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 tick-step">
                                                </div><span class="timeline-bar tick-bar"></span>
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
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 tick-step">
                                                </div><span class="timeline-bar tick-bar"></span>
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
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 tick-step">
                                                </div><span class="timeline-bar tick-bar"></span>
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
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 tick-step">
                                                </div><span class="timeline-bar tick-bar"></span>
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
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 tick-step">
                                                </div><span class="timeline-bar tick-bar"></span>
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
                                                <div
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
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
                <div class="col-md-7 col-lg-8">
                    <div class="row avatar-area">
                        <div class="col-md-12">
                            <h4 class="text-bold">Upload your profile picture</h4>
                            <p>Please upload the image you would like to appear in your profile</p>
                        </div>
                        <div class="user-avatar">
                            <img src="../assets/frontend/default/img/user-avatar.jpg" class="avatar-picture" />
                            <p class="text-center mt-2">Max 2MB 500px 500px</p>
                            <button class="w-100 border btn btn-lg border-all-5 border-green-2 user-avatar">
                                <i class="las la-upload fs-4"></i> Upload Profile
                            </button>
                            <div class="col-md-12 text-center mt-3 mb-4 user-avatar">
                                <a href="#">Remove Profile</a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-5">
                        <div class="col-lg-6 col-md-12">
                            <p>Intial steps in creating your profile are now complete!</p>
                            <button class="w-100 btn btn-primary btn-lg border-all-5 btn-lg">Preview Your
                                Profile</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="w-100">
                                <hr class="my-4">
                                <div class="row gy-3">
                                    <div class="col-lg-4 col-md-5">
                                        <button class="w-100 border btn-lg border-all-5 btn-back">
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
    </div>
@endsection
