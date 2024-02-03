@extends('frontend.layouts.figma', ['header' => 'guest'])
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout training-details-layout">
                        <div class="page-sidebar">
                            <div class="sidebar-widget bb-1 mb-4">
                                <button class="btn btn-primary btn-md w-100">Register Now</button>
                                <button class="btn btn-outline-primary border-2 btn-md w-100 mt-2 btn-has-icon">
                                    <x-icon.chat width="20" height="20" fill="#0036E3"/>
                                    Message Now
                                </button>
                                <div class="mt-2 share-widget">
                                    <button class="btn btn-outline-light border-2 btn-md btn-icon w-100">
                                        <x-icon.heart width="24" height="24" fill="#0036E3"/>
                                    </button>
                                    <button class="btn btn-outline-light border-2 btn-md btn-icon w-100">
                                        <x-icon.share width="24" height="24" fill="#0036E3"/>
                                    </button>
                                </div>
                                <p class="text-sm my-3"><strong class="fw-medium">Note:</strong> You will be asked to
                                    sign up/sign in to ExpertGate before continuing</p>
                            </div>

                            <div class="sidebar-widget">
                                <div class="training-summary-widget">
                                    <div>
                                        <p class="m-0 text-sm">Seminar Dates</p>
                                        <p class="m-0 text-sm fw-medium">23 January 2024 - 28 April 2024</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Fee</p>
                                        <p class="m-0 text-sm fw-medium">USD 995</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Mode</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <x-icon.video fill="#0036E3"/>
                                            </div>
                                            <div>
                                                <p class="m-0 text-sm fw-medium text-primary">USD 995</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Language</p>
                                        <p class="m-0 text-sm fw-medium">English</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Category</p>
                                        <p class="m-0 text-sm fw-medium">Research and Analysis</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Partner Institute</p>
                                        <p class="m-0 text-sm fw-medium">
                                            <a class="text-decoration-underline" href="#">Western Sydney university
                                                Oxford university</a>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Time & Location</p>
                                        <p class="m-0 text-sm fw-medium">10.15am AEST, Sydney, Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content">
                            <div class="training-details-header">
                                <div class="training-title">
                                    <h2 class="h6">
                                        Igniting the Spark: Designing PhD Curriculums for the Next Generation of
                                        Disruptors
                                    </h2>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-md btn-icon btn-outline-light">
                                        <x-icon.share fill="#0036E3"/>
                                    </button>
                                </div>
                            </div>
                            <div class="expert-card py-3">
                                <div class="expert-card-header mb-2">
                                    <div class="expert-thumb">
                                        <div class="expert-thumb-box">
                                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                        </div>
                                    </div> <!--expert-thumb-->
                                    <div class="expert-info">
                                        <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                        <ul class="expert-meta">
                                            <li>Melbourne University</li>
                                            <li>Australia</li>
                                        </ul>

                                    </div><!--expert-info-->
                                    <div class="expert-card-action">
                                        <button x-data="{ isFavorited: false }"
                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                :class="{ 'favorited': isFavorited }"
                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                        </button>
                                        <button class="btn btn-md btn-icon btn-outline-light">
                                            <x-icon.message-line/>
                                        </button>
                                        <button class="btn btn-md btn-outline-primary border-2"> Invite Project</button>
                                    </div>
                                </div>
                                <div class="expert-card-body">
                                    <div class="expert-summary py-3">
                                        <p class="mb-0">Prof. Miles esther is an accomplished Curriculum Development
                                            Specialist with a distinguished career in education and a track record of
                                            providing consultation services Development Specialist with Specialist with
                                            a distinguished career in education and a track record of providing
                                            consultation services Development Specialist with ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-card py-3">
                                <div class="expert-card-header mb-2">
                                    <div class="expert-thumb">
                                        <div class="expert-thumb-box">
                                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                        </div>
                                    </div> <!--expert-thumb-->
                                    <div class="expert-info">
                                        <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                        <ul class="expert-meta">
                                            <li>Melbourne University</li>
                                            <li>Australia</li>
                                        </ul>

                                    </div><!--expert-info-->
                                    <div class="expert-card-action">
                                        <button x-data="{ isFavorited: false }"
                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                :class="{ 'favorited': isFavorited }"
                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                        </button>
                                        <button class="btn btn-md btn-icon btn-outline-light">
                                            <x-icon.message-line/>
                                        </button>
                                        <button class="btn btn-md btn-outline-primary border-2"> Invite Project</button>
                                    </div>
                                </div>
                                <div class="expert-card-body">
                                    <div class="expert-summary py-3">
                                        <p class="mb-0">Prof. Miles esther is an accomplished Curriculum Development
                                            Specialist with a distinguished career in education and a track record of
                                            providing consultation services Development Specialist with Specialist with
                                            a distinguished career in education and a track record of providing
                                            consultation services Development Specialist with ...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content-accordion-wrapper">
                                <div class="page-content-accordion-item">
                                    <div class="page-content-accordion-title">
                                        <h3>Summary of the Course</h3>
                                        <button>

                                        </button>
                                    </div>
                                    <div class="page-content-accordion-body">

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
