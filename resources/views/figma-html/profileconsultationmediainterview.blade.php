@extends('frontend.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my2">
        <div class="py-4 py-lg-5">
            <div class="container">
                <div class="row g-5 pconsult">
                    <div class="col-md-5 col-lg-4 sidebar-steps">
                        <div class="card card-shadow">
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
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
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
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
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
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100">
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
                        <div class="card-body my-auto">
                            <h5 class="text-bold">Would you like offer <span class="text-style">media interview</span>
                                services?
                            </h5>
                            <div class="w-100">
                                <div class="row ">
                                    <div class="col-md-4 d-flex">
                                        <button id="btnyes" class="w-100 btn btn-primary m-2 border-all-5"
                                            type="submit">Yes</button>
                                        <button id="btnno"
                                            class="w-100 m-2 btn border-all-5  btn-outline-primary">No</button>
                                    </div>
                                    <div class="col-md-8"></div>
                                </div>
                            </div>
                            <div class="row popup-questions">
                                <div class="row pr-0">
                                <div class="col-md-12 my-4">
                                    <p class="">In which of your areas of expertise would you like to offer media interview service?</p>
                                    <div class="form-group has-search position-relative">
                                        <span class="las la-search la-2x inputsearch-icon-right"></span>
                                        <input type="text" class="form-control" placeholder="Search skills...">
                                    </div>
                                    <div class="btntags">
                                        <button class="btn btngray ff-colfax" type="button">Architecture
                                            1</button>
                                        <button class="btn btn-primary ff-colfax" type="button">Architecture
                                            2</button>
                                        <button class="btn btngray ff-colfax" type="button">LMS 1</button>
                                        <button class="btn btn-primary ff-colfax" type="button">LMS 2</button>
                                    </div>
                                </div></div>
                                <div class="row">
                                    <div class="col-md-6 mt-2 pr-0">
                                        <div class="custom-input-group">
                                            <div class="textOnInput">
                                                <label for="inputText">Value / 30 mins</label>
                                                <input class="form-control textlable-rate" placeholder="eg. $120 / 30 min"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 pr-0">
                                        <button class="w-100 border btn btn-lg border-all-5 border-green-2">
                                            <i class="las la-upload fs-4"></i> Upload Profile
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-4 pr-0">
                                        <button type="button"
                                            class="w-100 btn btn-primary btn-lg border-all-5 btn-lg ff-colfax">Create
                                            Consultant</button>
                                    </div>
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
            </div>
        </div>
    </section>
@endsection
