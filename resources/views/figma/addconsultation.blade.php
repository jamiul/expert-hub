@extends('frontend.layouts.app')
@section('content')
    <section class=" profile-setup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card card-shadow">
                        <div class="card-body p-40">
                            <button class="btn btn-link px-0 d-inline-flex align-items-center my-4"
                                    data-bs-toggle="modal"
                                    data-bs-target="#addConsultation">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                    <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3"/>
                                </svg>
                                <span>Add Consultation</span>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Modal : Add Work Experience-->
    <div class="modal fade" id="addConsultation" tabindex="-1" aria-labelledby="addConsultationLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg flat-modal">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title pt-3 px-3" id="exampleModalLabel">Add Consultation</h5>
                    <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">

                    <ul class="progress-bar-nav-horizontal">
                        <li class="done-item"><strong> Expertise </strong></li>
                        <li class="running-item"><strong> Service fees </strong></li>
                        <li><strong> Availability </strong></li>
                        <li><strong> Summery </strong></li>
                    </ul>
                    <div class="progress-step-content mt-20">

                        <x-form.choice-static wire:model="title" label="Consultation Title">
                            <option value="">Select a consultation title</option>
                            <optgroup label="# Curriculum Expert">
                                <option value="Curriculum Development">Curriculum Development</option>
                                <option value="Interaction design">Interaction design</option>
                            </optgroup>
                            <optgroup label="# Program designer">
                                <option value="Dr">Educational Expertise</option>
                                <option value="Prof">Curriculum Development</option>
                            </optgroup>
                        </x-form.choice-static>

                        <x-form.choice-static wire:model="titles" label="Consultation Skillsets" multiple>
                            <option value="Architectural Design">Architectural Design</option>
                            <option value="Architectural Design">Architectural Design</option>
                            <option value="Architectural Design">Architectural Design</option>
                            <option value="Architectural Design">Architectural Design</option>
                        </x-form.choice-static>
                        <p class="skill-suggestion">Suggestion skills: <span>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span>
                        </p>


                        <div class="progress-step-content mt-40">
                            <h6 class="mb-2 fw-medium">Hourly rate</h6>
                            <p>Clients will see this rate on your profile and in search results once you publish
                                your
                                profile. You can adjust your rate every time you submit a proposal.</p>

                            <div class="service-fee-input-area">
                                <div class="service-fee-input-row">
                                    <div class="service-fee-description">
                                        <div class="form-input-group">
                                            <p class="fw-medium mb-1">Hourly Rate <span class="edux-tooltips">
                                            <x-icon.what fill="#BABABA"/>
                                                <span class="edux-tooltips-details">Min $50 hourly rate</span>
                                            </span></p>


                                        </div>
                                        <p class="mb-1">Total amount the client will see</p>
                                    </div>
                                    <div class="service-fee-input">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div>
                                                /hr
                                            </div>
                                            <div>
                                                <input type="text" class="input-field-control" placeholder="$0.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-fee-input-row">
                                    <div class="service-fee-description">
                                        <p class="fw-medium mb-1">Platform service fee</p>
                                        <p class="mb-1">The Expert Gate Service Fee Is 10%</p>
                                    </div>
                                    <div class="service-fee-input">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div>
                                                /hr
                                            </div>
                                            <div>
                                                <input type="text" class="input-field-control edux-platform-bg"
                                                       placeholder="$0.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-fee-input-row">
                                    <div class="service-fee-description">
                                        <p class="fw-medium mb-1">You'll receive</p>
                                        <p class="mb-1">The estimated amount you'll receive after service fees</p>
                                    </div>
                                    <div class="service-fee-input">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div>
                                                /hr
                                            </div>
                                            <div>
                                                <input type="text" class="input-field-control edux-platform-bg"
                                                       placeholder="$0.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-40">
                            <h6 class="mb-2">What is the event time zone?</h6>
                            <p>Time zone for opening hours and new events. Your invitees will see your availability in
                                their local time zone.</p>
                            <select name="" id="" class="input-field-control edux-timezoon">
                                <option value="">Europe/Australia</option>
                                <option value="">Dhaka/Asia</option>
                            </select>
                        </div>


                        <div class="mb-40">
                            <h6 class="mb-2">Set schedule
                                <div class="tooltip-wrapper bottom-left">
                                <x-icon.what  fill="#BABABA"/>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>
                            <p><a class="fw-medium text-decoration-underline" href="">Schedule Your Consultation</a>
                                (Max 5 schedule per day)</p>
                            <div class="available-schedule-input-wrapper edux-schedule-input edux-schedule-input-single mb-40">

                                <div class="available-time-select-col eudx-time-select">
                                    <h6>Selected slot</h6>
                                    <ul class="edux-selected-slot">
                                        <div class="row edux-padding-xs">
                                            <li class="edux-day-schedule">Monday</li>
                                            <li>01.00 AM</li>
                                        </div>
                                        <div class="row edux-padding-xs">
                                            <li class="edux-day-schedule">Friday</li>
                                            <li>01.00 AM</li>
                                            <li>10:00 AM</li>
                                            <li>04:00 PM</li>
                                            <li>05:00 PM</li>
                                            <li>09:00 PM</li>
                                            <li>09:00 PM</li>
                                        </div>

                                        <div class="row edux-padding-xs">
                                            <li class="edux-day-schedule">Saturday</li>
                                            <li>01.00 AM</li>
                                            <li>10:00 AM</li>
                                            <li>04:00 PM</li>
                                            <li>05:00 PM</li>
                                            <li>09:00 PM</li>
                                            <li>09:00 PM</li>
                                        </div>
                                        <div class="row edux-padding-xs">
                                            <li class="edux-day-schedule">Sunday</li>
                                            <li>01.00 AM</li>
                                        </div>
                                    </ul>
                                </div>

                            </div>

                        </div>


                        <div class="mb-40">
                            <x-form.choice-static wire:model="titles" class="edux-timezoon" label="Select day" multiple>
                                <option value="Mr">Monday</option>
                                <option value="Mrs">Sunday</option>
                                <option value="Dr">Friday</option>
                                <option value="Prof">Wednesday</option>
                            </x-form.choice-static>
                            <div class="available-schedule-input-wrapper edux-schedule-input mb-40">

                                <div class="available-time-select-col eudx-time-select">

                                    <ul class="edux-selected-slot edux-selected-slot-more">
                                        <li>01.00 AM</li>
                                        <li class="selected-date-bg">10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>01.00 AM</li>

                                        <li>10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li class="selected-date-bg">09:00 PM</li>
                                        <li class="selected-date-bg">09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>

                                        <li>10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li class="selected-date-bg">09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>

                                        <li>10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li class="selected-date-bg">09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>

                                        <li>10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li class="selected-date-bg">09:00 PM</li>
                                        <li>09:00 PM</li>

                                        <li class="selected-date-bg">10:00 AM</li>
                                        <li>04:00 PM</li>
                                        <li>05:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>
                                        <li>09:00 PM</li>


                                    </ul>
                                </div>

                                <button type="button" class="btn btn-primary eudx-btn-save">Confirm</button>

                            </div>

                        </div>


                        <div class="progress-step-content mt-40">
                            <h6 class="mb-2">Consultation Summery
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>

                            <div class="edux-select-options position-relative">
                            <textarea rows="5" cols="10" name="bio" id="bio"
                                      class="input-field-control h-auto"
                                      placeholder="e.g. Brief 300 words summary about your expertise."></textarea>
                                <span class="edux-total-select-count">0/200</span>
                            </div>

                            <h6 class="mb-2 mt-5">Upload Consultation Service Picture
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>


                            <div class="image-upload-preview">
                                <div class="">
                                    <div class="uploaded-img-preview">


                                    <x-icon.user-fill width="132" height="133"  fill="#B3C1CF"/>
                                    </div>
                                    <p class="text-sm fst-italic my-1">
                                        Max 2MB 500px 500px
                                    </p>
                                </div>
                                <div>
                                    <label for="upload-file"
                                           class="btn btn-outline-primary d-inline-flex align-items-center">
                                        <x-icon.upload fill="#0059C999"/>
                                        Upload Photo</label>
                                    <input type="file" id="upload-file" class="d-none">
                                </div>
                            </div>
                        </div>


                        <div class="progress-step-content mt-40">
                            <div class="offered-service-card mb-40">
                                <div>
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"/>
                                </div>
                                <div>
                                    <div class="d-flex gap-3 justify-content-sm-between">
                                        <h6 class="">Architecture history</h6>
                                        <p class="h6 mb-0">$120/1 hrs</p>
                                    </div>
                                    <p>Prof. Jhon dowe offers consultation services to educational institutions,
                                        businesses and individuals seeking expertise in curriculum development. <span
                                            class="edux-more"> More...</span></p>
                                    <ul class="button-list edux-button-list">
                                        <li class="button-list-item">
                                            Accreditation Documentation
                                        </li>
                                        <li class="button-list-item">
                                            Accreditation Process
                                        </li>

                                        <li class="button-list-item">
                                            Educational Expertise
                                        </li>

                                        <li class="button-list-item">
                                            Instructionḁl Design
                                        </li>

                                        <li class="button-list-item">
                                            +10 More
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="mb-40">

                                <div class="available-schedule-input-wrapper edux-schedule-input mb-40">
                                    <div class="available-time-select-col eudx-time-select">
                                        <h6>Selected slot</h6>
                                        <ul class="edux-selected-slot">

                                            <div class="row">
                                                <li class="edux-day-schedule">Friday</li>
                                                <li>01.00 AM</li>
                                                <li>10:00 AM</li>
                                                <li>04:00 PM</li>
                                                <li>05:00 PM</li>
                                                <li>09:00 PM</li>
                                                <li>09:00 PM</li>
                                            </div>

                                            <div class="row">
                                                <li class="edux-day-schedule">Saturday</li>
                                                <li>01.00 AM</li>
                                                <li>10:00 AM</li>
                                                <li>04:00 PM</li>
                                                <li>05:00 PM</li>
                                                <li>09:00 PM</li>
                                                <li>09:00 PM</li>
                                            </div>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>


                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-secondary edux-btn-cancel" data-bs-dismiss="modal">Cancel
                        </button>
                        <button type="button" class="btn btn-primary eudx-btn-save">Save & Continue</button>
                        <button type="button" class="btn  eudx-btn-back d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z"
                                      fill="#191D24" fill-opacity="0.7"/>
                            </svg>
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Modal -->


        <!-- Date time Picker js -->
@endsection
