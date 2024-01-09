@extends('frontend.layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <h4 class="my-5  text-center">General Elements</h4>
        </div>
        <div class="row">
            <div class="col">
                I am label
                <div class="tooltip-wrapper bottom-left">
                    <i class="tooltip-icon"></i>
                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eum, placeat!
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <h4 class="my-5  text-center">Expert Card</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="project-expert-card border-bottom">
                    <div class="project-expert-thumb">
                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                    </div>
                    <div class="project-expert-details">
                        <div class="expert-card-header">
                            <div class="expert-card-header-info">
                                <p class="project-expert-profile-flag">Best Match</p>
                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                    Esther</h3>
                                <ul class="project-expert-meta">
                                    <li>Public Health</li>
                                    <li>Melbourne University</li>
                                    <li>Australia</li>
                                </ul>
                                <div class="d-flex gap-3 align-items-center">
                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                    </div>
                                    <div class="star-ratings">
                                        <x-icon.star-fill/>
                                        <x-icon.star-fill/>
                                        <x-icon.star-fill/>
                                        <x-icon.star-fill/>
                                        <x-icon.star-fill/>
                                    </div>
                                    <div class="project-expert-profile-status">
                                        Available now
                                    </div>
                                </div>

                            </div>
                            <div class="expert-card-header-action">
                                <button class="btn btn-md btn-icon btn-outline-light">
                                    <x-icon.thumb-up/>
                                </button>
                                <button class="btn btn-md btn-icon btn-outline-light">
                                    <x-icon.thumb-down/>
                                </button>
                                <button class="btn btn-md btn-primary"> Hire</button>
                            </div>
                        </div>
                        <div class="expert-card-body">
                            <div class="project-expert-summary py-3">
                                <p>Prof. Miles esther is an accomplished Curriculum
                                    Development Specialist
                                    with a distinguished career in education and a track
                                    record of providing
                                    consultation services in... <a href=""> more</a></p>
                            </div>
                            <div class="tag-list">
                                <a href="#"
                                   class="expert-profile-tag offer-consultation-btn">
                                    <x-icon.video fill="#0036E3"/>
                                    Offer Consultation</a>
                                <a href="#" class="expert-profile-tag">Communication
                                    Skills</a>
                                <a href="#" class="expert-profile-tag">Industry Treds
                                    Awareness</a>
                                <a href="#" class="expert-profile-tag"> Research</a>
                                <a href="#" class="expert-profile-tag">System Research
                                    Development</a>
                                <a href="#"
                                   class="expert-profile-tag">Communication </a>
                                <a href="#" class="expert-profile-tag">Industry
                                    Treds</a>
                                <a href="#" class="expert-profile-tag">Educational
                                    Research</a>
                                <a href="#" class="expert-profile-tag">System
                                    Development</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr class="my-5">
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>
    <style>
        {{--NOT FOR USE--}}
        .page-sidebar {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 4px;
        }
    </style>
@endsection
