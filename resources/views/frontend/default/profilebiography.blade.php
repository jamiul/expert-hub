@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="container my-5">
        <div class="row g-5 cprofiled">
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
                                            </div>
                                            <span class="timeline-bar tick-bar"></span>
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
                                                class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
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
            <div class="col-lg-8 col-md-7">
                <h5 class="text-bold">Write a brief biography</h5>
                <p>Please provide a brief biography, limited to 300 words, which will be used in your public profile. Ensure
                    that it conveys meaningful information you would like the client to know about you before engaging in
                    your project</p>
                <div class="">
                    <textarea class="form-control brife-words" rows="5"
                        placeholder="e.g. Brief 300 words summary about your expertise." name="text"></textarea>
                </div>
                <div class="row gy-3">
                    <div class="col-md-12 mt-5">
                        <div class="textOnInput">
                            <label for="inputText">Redearch Profile (Optional)</label>
                            <input class="form-control mt-3 py-2" placeholder="eg. http://profile.com" type="text">
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="textOnInput">
                                <label for="inputText">University Profile (Optional)</label>
                                <input class="form-control mt-3 py-2" placeholder="eg. http://profile.com" type="text">
                            </div>
                        </div>
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
                                    <button class="w-100 btn btn-primary btn-lg border-all-5" type="submit">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
