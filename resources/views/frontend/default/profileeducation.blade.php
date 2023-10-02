@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row g-5 cpeducation">
                <div class="col-md-5 col-lg-4">
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
                                                    class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
                                                </div><span class="timeline-bar "></span>
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
                <div class="col-md-7 col-lg-8">
                    <h4 class="text-bold">Tell us about your edcation qualifications</h4>
                    <p>Complete the information bellow</p>
                    <div class="card-body my-auto">
                        <form action="">
                            <div class="textOnInput">
                                <label for="inputQualifications" class="ml-3 mr-3">Name of Qualifications</label>
                                <input class="form-control mt-3 py-2" id="inputQualifications" placeholder="eg.PHD"
                                    type="input">
                            </div>
                            <div class="textOnInput">
                                <label for="inputstudy"class="ml-3 mr-3">Field of Study</label>
                                <select class="form-control mt-3 py-2" id="inputstudy" type="input">
                                    <option selected>Public health</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="textOnInput">
                                <label for="university" class="mr-3 ml-3">University</label>
                                <select class="form-control mt-3 py-2" id="inputuniversity" type="input">
                                    <option selected>EduExHub</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="textOnInput">
                                <label for="start" class="ml-3 mr-3">Start Year</label>
                                <select class="form-control mt-3 py-2" id="start" type="input">
                                    <option selected>2012</option>
                                    <option value="1">2013</option>
                                    <option value="2">2014</option>
                                    <option value="3">2015</option>
                                    <option value="3">2016</option>
                                </select>
                            </div>
                            <div class="textOnInput">
                                <label for="endyear" class="ml-3 mr-3">End Year</label>
                                <select class="form-control mt-3 py-2" id="endyear" type="input">
                                    <option selected>2016</option>
                                    <option value="1">2013</option>
                                    <option value="2">2014</option>
                                    <option value="3">2015</option>
                                    <option value="3">2016</option>
                                </select>

                            </div>
                            <div class="d-grid gap-2 col-xl-6 col-lg-8 col-md-12 mt-3">
                                <button class="btn border fs-5" type="button"> <span class="google-icon-img"><img
                                            src="../assets/frontend/default/img/add_circle.png"></>
                                    </span>Add Education Qualification</button>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
