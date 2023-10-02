@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#TVinterview">
                                TV interview Popup
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#consService">
                                Consultation Service Popup
                            </button>
                            <!-- Modal TV interview-->
                            <div class="modal fade" id="TVinterview" tabindex="-1" aria-labelledby="TVinterviewLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>In which of your areas of expertise would you like to offer TV interview
                                                service?</h4>
                                            <div class="my-4">
                                                <button class="btn btn-primary btngray" type="button">Architecture
                                                    1</button>
                                                <button class="btn btn-primary btngreen" type="button">Architecture
                                                    2</button>
                                                <button class="btn btn-primary btngray" type="button">LMS 1</button>
                                                <button class="btn btn-primary btngreen" type="button">LMS 2</button>
                                            </div>
                                            <div class="custom-input-group my-4">
                                                <div class="textOnInput">
                                                    <label for="inputText">Value / 30 mins</label>
                                                    <input class="form-control mt-3 py-2" placeholder="eg. $120 / 30 min"
                                                        type="text">
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="w-100 btn btn-primary btn-lg border-all-5 btn-lg">Create
                                                Consultant</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Consultation Service Modal -->
                            <div class="modal fade" id="consService" tabindex="-1" aria-labelledby="consServiceLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>In which of your areas of expertise would you like to offer consultation
                                                service?</h4>
                                            <div class="my-4">
                                                <button class="btn btn-primary btngray" type="button">Architecture
                                                    1</button>
                                                <button class="btn btn-primary btngreen" type="button">Architecture
                                                    2</button>
                                                <button class="btn btn-primary btngray" type="button">LMS 1</button>
                                                <button class="btn btn-primary btngreen" type="button">LMS 2</button>
                                            </div>
                                            <div class="custom-input-group my-4">
                                                <div class="textOnInput">
                                                    <label for="inputText">Value / 30 mins</label>
                                                    <input class="form-control mt-3 py-2" placeholder="eg. $120 / 30 min"
                                                        type="text">
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="w-100 btn btn-primary btn-lg border-all-5 btn-lg">Create
                                                Consultant</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-4">
                        <h4 class="mb-4">Book Expert for Consultation</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../assets/frontend/default/img/user-front-laptop.jpg" alt="Image"
                                    class="img-fluid">
                                <p class="mb-0 p-2 fs-5">Prof. Michael</p>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4 order-md-last text-right">
                                        <p class="pr-4"><b>$120/30mins</b></p>
                                    </div>
                                    <div class="col-md-8 mb-3 fs-4">
                                        Expertise:
                                        <button class="btn-tags-outline">Architecture1</button>
                                        <button class="btn-tags-outline">LMS2</button>
                                    </div>

                                </div>

                                <p><b>Prof. Michael</b> offers consultation services to educational
                                    institutions,
                                    businesses,and individuals seeking expertise in <b>Architecture</b> and <b>Biology</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded mb-5">
                        <h4 class="mb-4">Book Expert for TV Interview</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../assets/frontend/default/img/tv_interview.jpg" alt="Image"
                                    class="img-fluid">
                                <p class="mb-0 p-2 fs-5">Prof. Michael</p>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4 order-md-last text-right">
                                        <p class="pr-4"><b>$120/30mins</b></p>
                                    </div>
                                    <div class="col-md-8 mb-3 fs-4">
                                        Expertise:
                                        <button class="btn-tags-outline">Architecture1</button>
                                        <button class="btn-tags-outline">LMS2</button>
                                    </div>

                                </div>

                                <p><b>Prof. Michael</b> offers consultation services to educational
                                    institutions,
                                    businesses,and individuals seeking expertise in <b>Architecture</b> and <b>Biology</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body my-auto">
                        <h4 class="text-bold">Would you like offer<span class="text-style"> consultation</span> services?
                        </h4>
                        <div class="w-100">
                            <div class="row ">
                                <div class="col-md-4 d-flex">
                                    <button class="w-100 btn btn-primary m-2 border-all-5" type="submit">Yes</button>
                                    <button class="w-100 m-2 btn btn-outline-success border-all-5 border-green-2"><span
                                            class="text-style-button">No</span> </button>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                        </div>
                        <h4 class="text-bold mt-4">Would you like offer<span class="text-style"> TV interview
                            </span>services?</h4>
                        <div class="w-100">
                            <div class="row ">
                                <div class="col-md-4 d-flex">
                                    <button class="w-100 btn btn-primary m-2 border-all-5" type="submit">Yes</button>
                                    <button class="w-100 m-2 btn btn-outline-success border-all-5 border-green-2"><span
                                            class="text-style-button"> No</span>
                                    </button>
                                </div>
                                <div class="col-md-8"></div>
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
    </div>
@endsection