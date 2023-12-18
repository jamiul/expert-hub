@extends('frontend.layouts.front-layout')

@section('content')
    <section class=" profile-setup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card card-shadow">
                        <div class="card-body p-40">
                            <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
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
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Consultation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0 pb-4">
                    <ul class="progress-bar-nav-horizontal">
                        <li class="done-item"><strong> Expertise </strong></li>
                        <li class="running-item"><strong> Service fees </strong></li>
                        <li><strong> Availability </strong></li>
                        <li><strong> Summery </strong></li>
                    </ul>
                    <div class="progress-step-content mt-40 ">
                        <h6 class="mb-2">Expert by Field</h6>
                        <x-form.select label="Expert by Field" name="title">
                            <option value="">Architecture History</option>
                            <option value="Mr">Architecture</option>
                            <option value="Mrs">- Architecture History</option>
                            <option value="Dr">- Architectural Restoration</option>
                            <option value="Prof">Construction</option>
                            <option value="Prof">-Art</option>
                            <option value="Prof">-Animation</option>
                        </x-form.select>

                        <h6 class="mb-2">Expert skillset</h6>
                        <div class="accordion-items-select-wrapper skillset-selection-area">
                            <div class="card card-24">
                                <div class="card-header bg-white">
                                    <div class="form-input-group form-input-has-icon input-icon-left my-0">
                                        <input name="skill" id="skill" class="form-input-field"
                                               placeholder="Search by categories....">
                                        <span class="form-input-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                          <path
                                              d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.14583 15.3708 4.8875 14.1125C3.62917 12.8542 3 11.3167 3 9.5C3 7.68333 3.62917 6.14583 4.8875 4.8875C6.14583 3.62917 7.68333 3 9.5 3C11.3167 3 12.8542 3.62917 14.1125 4.8875C15.3708 6.14583 16 7.68333 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8125 13.5625 12.6875 12.6875C13.5625 11.8125 14 10.75 14 9.5C14 8.25 13.5625 7.1875 12.6875 6.3125C11.8125 5.4375 10.75 5 9.5 5C8.25 5 7.1875 5.4375 6.3125 6.3125C5.4375 7.1875 5 8.25 5 9.5C5 10.75 5.4375 11.8125 6.3125 12.6875C7.1875 13.5625 8.25 14 9.5 14Z"
                                              fill="#303744" fill-opacity="0.7"/>
                                        </svg>
                                    </span>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed px-0" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Accreditation Specialists
                                            </button>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-collapseOne"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation
                                                    Documentation
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Process
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Renewal
                                                </button>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed px-0" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Curriculum Experts
                                            </button>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-collapseTwo"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation
                                                    Documentation
                                                </button>
                                                <button class="btn btn-light w-100 selected-skill">Accreditation
                                                    Process
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Renewal
                                                </button>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed px-0" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Course Accreditation Specialists
                                            </button>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingThree"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation
                                                    Documentation
                                                </button>
                                                <button class="btn btn-light w-100 selected-skill">Accreditation
                                                    Process
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Renewal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-24">
                                <div class="card-body">
                                    <ul class="button-list has-title">
                                        <li class="button-list-title">
                                            Course Accreditation Specialists
                                        </li>
                                        <li class="button-list-item">
                                            Accreditation Documentation
                                            <span class="button-list-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                 viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                                                fill="#303744" fill-opacity="0.49"/>
                                        </svg>
                                        </span>

                                        </li>
                                        <li class="button-list-item">
                                            Accreditation Process
                                            <span class="button-list-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                 viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                                                fill="#303744" fill-opacity="0.49"/>
                                        </svg>
                                        </span>
                                        </li>
                                        <li class="button-list-title">
                                            Program Design
                                        </li>
                                        <li class="button-list-item">
                                            Educational Expertise
                                            <span class="button-list-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                 viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                                                fill="#303744" fill-opacity="0.49"/>
                                        </svg>
                                        </span>

                                        </li>
                                        <li class="button-list-item">
                                            Instructionḁl Design
                                            <span class="button-list-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                 viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M6.3 12.75L9 10.05L11.7 12.75L12.75 11.7L10.05 9L12.75 6.3L11.7 5.25L9 7.95L6.3 5.25L5.25 6.3L7.95 9L5.25 11.7L6.3 12.75ZM9 16.5C7.9625 16.5 6.9875 16.3031 6.075 15.9094C5.1625 15.5156 4.36875 14.9813 3.69375 14.3063C3.01875 13.6313 2.48438 12.8375 2.09063 11.925C1.69688 11.0125 1.5 10.0375 1.5 9C1.5 7.9625 1.69688 6.9875 2.09063 6.075C2.48438 5.1625 3.01875 4.36875 3.69375 3.69375C4.36875 3.01875 5.1625 2.48438 6.075 2.09063C6.9875 1.69688 7.9625 1.5 9 1.5C10.0375 1.5 11.0125 1.69688 11.925 2.09063C12.8375 2.48438 13.6313 3.01875 14.3063 3.69375C14.9813 4.36875 15.5156 5.1625 15.9094 6.075C16.3031 6.9875 16.5 7.9625 16.5 9C16.5 10.0375 16.3031 11.0125 15.9094 11.925C15.5156 12.8375 14.9813 13.6313 14.3063 14.3063C13.6313 14.9813 12.8375 15.5156 11.925 15.9094C11.0125 16.3031 10.0375 16.5 9 16.5ZM9 15C10.675 15 12.0938 14.4188 13.2563 13.2563C14.4188 12.0938 15 10.675 15 9C15 7.325 14.4188 5.90625 13.2563 4.74375C12.0938 3.58125 10.675 3 9 3C7.325 3 5.90625 3.58125 4.74375 4.74375C3.58125 5.90625 3 7.325 3 9C3 10.675 3.58125 12.0938 4.74375 13.2563C5.90625 14.4188 7.325 15 9 15Z"
                                                fill="#303744" fill-opacity="0.49"/>
                                        </svg>
                                        </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-step-content mt-40 d-none">
                        <div class="mb-40">
                            <h6 class="mb-2">Expert skillset</h6>
                            <p>Time zone for opening hours and new events. Your invitees will see your
                                availability
                                in their local time zone.</p>
                            <select name="" id="" class="input-field-control">
                                <option value="">Europe/Australia</option>
                                <option value="">Dhaka/Asia</option>
                            </select>
                        </div>
                        <div class="mb-40">
                            <h6 class="mb-2">Calendar
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content">Paragraph: Archetype lets designers like you
                                        very quickly and easily create consistent typography styling and spacing
                                        live, in the browser.
                                    </div>
                                </div>
                            </h6>
                            <p><a class="fw-bold" href="">View calendar</a></p>
                        </div>
                        <div class="mb-40">
                            <h6 class="mb-2">Opening hours
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>
                            <p><a class="fw-bold" href="">Schedule Your Consultation</a></p>
                            <div class="available-schedule-input-wrapper mb-40">
                                <div>
                                    <input type="date" class="input-field-control">
                                </div>
                                <div class="available-time-select-col">
                                    <ul>
                                        <li class="selected-date">01.00 AM</li>
                                        <li>02.00 AM</li>
                                        <li>03.00 AM</li>
                                        <li>04.00 AM</li>
                                        <li>05.00 AM</li>
                                        <li>06.00 AM</li>
                                        <li class="selected-date">07.00 AM</li>
                                        <li>08.00 AM</li>
                                        <li>09.00 AM</li>
                                        <li>10.00 AM</li>
                                        <li>11.00 AM</li>
                                        <li>12.00 AM</li>
                                        <li>01.00 PM</li>
                                        <li>02.00 PM</li>
                                        <li>03.00 PM</li>
                                        <li>04.00 PM</li>
                                        <li>05.00 PM</li>
                                        <li>06.00 PM</li>
                                        <li>07.00 PM</li>
                                        <li>08.00 PM</li>
                                        <li>09.00 PM</li>
                                        <li>10.00 PM</li>
                                        <li>11.00 PM</li>
                                        <li>12.00 PM</li>
                                    </ul>
                                </div>

                            </div>
                            <x-form.check name="terms">
                                I you want to make same schedule for the next 15 days
                            </x-form.check>

                        </div>
                    </div>
                    <div class="progress-step-content mt-40 d-none">
                        <h6 class="mb-2">Hourly rate</h6>
                        <p>Clients will see this rate on your profile and in search results once you publish
                            your
                            profile. You can adjust your rate every time you submit a proposal.</p>


                        <div class="service-fee-input-area">
                            <div class="service-fee-input-row">
                                <div class="service-fee-description">
                                    <p class="fw-medium mb-1">Hourly Rate</p>
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
                                    <p class="mb-1">The Eduexhub Service Fee Is 10% when you begin a contract
                                        with a new
                                        client. Once you will over $500 with your client, the fee will be
                                        5%.</p>
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
                                    <p class="fw-medium mb-1">Hourly Rate</p>
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
                        </div>
                    </div>
                    <div class="progress-step-content mt-40 d-none">
                        <h6 class="mb-2">Consultation Summery</h6>

                        <textarea rows="5" cols="10" name="bio" id="bio"
                                  class="input-field-control h-auto"
                                  placeholder="e.g. Brief 300 words summary about your expertise."></textarea>

                        <h6 class="mb-2 mt-5">Upload Consultation Service Picture
                            <div class="tooltip-wrapper bottom-left">
                                <i class="tooltip-icon"></i>
                                <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eum, placeat!
                                </div>
                            </div>
                        </h6>

                        <div class="image-upload-flat">


                            <label for="upload-file" class="text-center">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="40"
                                                 viewBox="0 0 36 40" fill="none">
                                                <path
                                                    d="M2.68994 0.606754C1.54528 0.890999 0.692545 1.74373 0.385254 2.91912C0.285384 3.3186 0.27002 5.02407 0.27002 17.2082C0.27002 29.3923 0.285384 31.0978 0.385254 31.4972C0.715592 32.7571 1.6682 33.6329 2.93577 33.8403C3.32757 33.9095 14.0981 33.9556 14.0981 33.8941C14.0981 33.8787 14.0136 33.6483 13.9061 33.3717C13.2608 31.7354 13.0073 29.2771 13.2915 27.464C13.3606 27.0646 13.4298 26.6036 13.4605 26.4423L13.5066 26.158H9.51181H5.51702L5.36338 25.989C5.14059 25.7355 5.0945 25.5511 5.19437 25.2592C5.35569 24.7676 5.27119 24.7752 9.85752 24.7752H13.9906L14.2748 24.176C14.5975 23.4923 15.0738 22.678 15.4963 22.1095L15.7882 21.71L10.6795 21.687L5.5708 21.6639L5.36338 21.4565C5.07913 21.1722 5.07913 20.7728 5.36338 20.4885L5.5708 20.2811L11.3863 20.258L17.1941 20.2427L17.5475 19.9431C19.6217 18.2299 22.3643 17.2543 25.1069 17.2466H26.0825L26.0671 13.6129L26.0441 9.98683L22.9712 9.94842C20.0519 9.91001 19.8752 9.90232 19.4988 9.741C18.2543 9.23396 17.4783 8.38123 17.1634 7.16743C17.0328 6.67576 17.0174 6.29933 17.0174 3.55675V0.499203L10.0496 0.506886C4.77952 0.506886 2.98187 0.537613 2.68994 0.606754ZM15.2889 16.0558C15.5808 16.3401 15.5578 16.7857 15.2428 17.0469L15.0046 17.2466H10.3645C5.21741 17.2466 5.35569 17.262 5.19437 16.7626C5.08681 16.4476 5.17132 16.1634 5.43252 15.9867C5.58616 15.8791 6.12392 15.8638 10.3569 15.8638H15.1045L15.2889 16.0558Z"
                                                    fill="#0059C9" fill-opacity="0.6"/>
                                                <path
                                                    d="M18.3997 3.85658C18.3997 5.07038 18.4381 6.29186 18.4842 6.56843C18.6148 7.39043 19.0757 8.0127 19.8209 8.35072C20.1896 8.51973 20.2895 8.52741 22.6096 8.55046C23.9232 8.56582 25.0064 8.55046 25.0064 8.52741C25.0064 8.46595 18.561 1.69785 18.4765 1.66713C18.4304 1.65176 18.3997 2.46608 18.3997 3.85658Z"
                                                    fill="#0059C9" fill-opacity="0.6"/>
                                                <path
                                                    d="M24.2312 18.7143C19.522 19.1061 15.581 22.7168 14.7359 27.4184C14.5669 28.3633 14.5669 30.1149 14.7436 31.0751C15.1277 33.2108 16.1571 35.1852 17.7013 36.7139C21.0047 40.002 25.9597 40.7548 30.0698 38.5961C32.3821 37.3823 34.2336 35.2697 35.1017 32.8421C37.245 26.9037 33.7035 20.3891 27.573 18.9448C27.0122 18.8142 25.1838 18.5991 25.0071 18.6452C24.9841 18.6452 24.6384 18.6759 24.2312 18.7143ZM25.7984 22.955C26.4284 23.5926 30.8841 28.4017 30.9532 28.5169C31.0838 28.7474 31.0224 29.1699 30.8226 29.362C30.5922 29.6001 30.1466 29.6232 29.9084 29.4158C29.8239 29.3313 28.879 28.3403 27.8189 27.2033L25.8906 25.1291L25.8676 30.3223L25.8522 35.5078L25.6525 35.7152C25.3759 35.9918 24.9534 35.9918 24.6922 35.7152L24.5078 35.5155L24.4694 30.33L24.431 25.1367L22.3721 27.3416C20.3286 29.531 20.2595 29.5848 19.8216 29.5387C19.4298 29.5003 19.1456 28.9472 19.3376 28.5938C19.4221 28.4248 23.609 23.8768 24.5232 22.955C24.7997 22.6707 24.8996 22.6246 25.1608 22.6246C25.422 22.6246 25.5219 22.6707 25.7984 22.955Z"
                                                    fill="#0059C9" fill-opacity="0.6"/>
                                            </svg>
                                        </span>
                                <span class="fw-bold">Clik to upload or drag & drop</span>
                                <span class="text-sm"> Drag & drop your images. </span>
                                <span class="text-sm">Image Recommendation : 200x200 & </span>
                                <span class="text-sm"> Format : jpg, png</span>
                            </label>
                            <input type="file" id="upload-file" class="d-none">

                        </div>
                    </div>
                    <div class="progress-step-content mt-40 d-none">
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
                                    businesses and individuals seeking expertise in curriculum development.</p>
                                <ul class="button-list">
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
                                </ul>
                            </div>
                        </div>
                        <div class="mb-40">
                            <h6 class="mb-2">Opening hours
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>
                            <p><a class="fw-bold" href="">Schedule Your Consultation</a></p>
                            <div class="available-schedule-input-wrapper mb-40">
                                <div>
                                    <input type="date" class="input-field-control">
                                </div>
                                <div class="available-time-select-col">
                                    <ul>
                                        <li class="selected-date">01.00 AM</li>
                                        <li>02.00 AM</li>
                                        <li>03.00 AM</li>
                                        <li>04.00 AM</li>
                                        <li>05.00 AM</li>
                                        <li>06.00 AM</li>
                                        <li class="selected-date">07.00 AM</li>
                                        <li>08.00 AM</li>
                                        <li>09.00 AM</li>
                                        <li>10.00 AM</li>
                                        <li>11.00 AM</li>
                                        <li>12.00 AM</li>
                                        <li>01.00 PM</li>
                                        <li>02.00 PM</li>
                                        <li>03.00 PM</li>
                                        <li>04.00 PM</li>
                                        <li>05.00 PM</li>
                                        <li>06.00 PM</li>
                                        <li>07.00 PM</li>
                                        <li>08.00 PM</li>
                                        <li>09.00 PM</li>
                                        <li>10.00 PM</li>
                                        <li>11.00 PM</li>
                                        <li>12.00 PM</li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save & Continue</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
@endsection
