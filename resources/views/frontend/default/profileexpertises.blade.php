@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="container-lg my-5">
        <div class="row g-5 prexpertise">
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
                                                class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100 current-step">
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
            <div class="col-md-7 col-lg-8">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-lg-4 col-md-12  col-sm-6 col-color">
                        <h5 class="text-bold">Fields</h5>
                        <div class="card p-3 btn-back">
                            <div class="form-group has-search ">
                                <span class="las la-search la-2x form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search by field of experties">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Architecture">
                                        <option>Architecture 1</option>
                                        <option>Architecture 2</option>
                                        <option>Architecture 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Art">
                                    <option>Art 1</option>
                                    <option>Art 2</option>
                                    <option>Art 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Biology">
                                    <option>Biology 1</option>
                                    <option>Biology 2</option>
                                    <option>Biology 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Business">
                                    <option>Business 1</option>
                                    <option>Business 2</option>
                                    <option>Business 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Chemistry">
                                    <option>Chemistry 1</option>
                                    <option>Chemistry 2</option>
                                    <option>Chemistry 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Computer Programming">
                                    <option>Computer Programming 1</option>
                                    <option>Computer Programming 2</option>
                                    <option>Computer Programming 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Data Analytsis">
                                    <option>Data Analytsis 1</option>
                                    <option>Data Analytsis 2</option>
                                    <option>Data Analytsis 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Design">
                                    <option>Design 1</option>
                                    <option>Design 2</option>
                                    <option>Design 3</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6">
                        <h5>Categories of Expertise</h5>
                        <div class="card p-3 btn-back">
                            <div class="form-group has-search ">
                                <span class="las la-search la-2x form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search by categories..">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Accreditation Specialists">
                                    <option>Accreditation Specialists 1</option>
                                    <option>Accreditation Specialists 2</option>
                                    <option>Accreditation Specialists 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Curriculum Experts">
                                    <option>Curriculum Experts 1</option>
                                    <option>Curriculum Experts 2</option>
                                    <option>Curriculum Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Program Experts">
                                    <option>Program Experts 1</option>
                                    <option>Program Experts 2</option>
                                    <option>Program Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="LMS Experts">
                                    <option>LMS Experts 1</option>
                                    <option>LMS Experts 2</option>
                                    <option>LMS Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Industry Experts">
                                    <option>Industry Experts 1</option>
                                    <option>Industry Experts 2</option>
                                    <option>Industry Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Finance Experts">
                                    <option>Finance Experts 1</option>
                                    <option>Finance Experts 2</option>
                                    <option>Finance Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Policy Experts">
                                    <option>Policy Experts 1</option>
                                    <option>Policy Experts 2</option>
                                    <option>Policy Experts 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Project Managers">
                                    <option>Project Managers 1</option>
                                    <option>Project Managers 2</option>
                                    <option>Project Managers 3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" id="" required="" >
                                    <optgroup label="Research & Analysis">
                                    <option>Research & Analysis 1</option>
                                    <option>Research & Analysis 2</option>
                                    <option>Research & Analysis 3</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card card-expertise  p-3 btn-back">
                            <h5 class="text-bold">Expertise</h5>
                            <div class="form-group ">
                                <div class="custom-input-group first-input py-3">
                                    <button type="button" class="btn btn-badge btn-outline-secondary">
                                        Architecture 1 <span class="badge badge-light float-right"><i
                                                class="lar la-times-circle la-2x"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-badge btn-outline-secondary">
                                        Architecture 2 <span class="badge badge-light"><i
                                                class="lar la-times-circle la-2x"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-badge btn-outline-secondary">
                                        LMS 1 <span class="badge badge-light"><i
                                                class="lar la-times-circle la-2x"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-badge btn-outline-secondary">
                                        LMS 2 <span class="badge badge-light"><i
                                                class="lar la-times-circle la-2x"></i></span>
                                    </button>
                                </div>
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
                                    <button class="w-100 btn btn-primary btn-lg border-all-5"
                                        type="submit">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
