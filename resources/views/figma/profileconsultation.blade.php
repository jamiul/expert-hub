@extends('frontend.layouts.front-layout')

@section('content')
    <section class=" profile-setup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <ul class="progress-bar-nav-horizontal">
                                <li class="done-item"><strong> Expertise </strong></li>
                                <li class="running-item"><strong> Service fees </strong></li>
                                <li><strong> Availability </strong></li>
                                <li><strong> Summery </strong></li>
                            </ul>
                            <div class="progress-step-content">
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
                            <div class="progress-step-content">
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
                                    <h6 class="mb-2">Calendar</h6>
                                </div>
                                <div class="mb-40"><h6 class="mb-2">Opening hours</h6></div>
                            </div>
                            <div class="progress-step-content ">
                                <h5 class="mb-2">Hourly rate</h5>
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
                            <div class="progress-step-content">
                                <h5 class="mb-2">Consultation Summery</h5>

                                <textarea rows="5" cols="10" name="bio" id="bio"
                                          class="input-field-control h-auto"
                                          placeholder="e.g. Brief 300 words summary about your expertise."></textarea>

                                <h5 class="mb-2 mt-5">Upload Consultation Service Picture</h5>

                                <div class="image-upload-preview">
                                    <div class="">
                                        <div class="uploaded-img-preview">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133"
                                                 viewBox="0 0 132 133" fill="none">
                                                <g clip-path="url(#clip0_38_2)">
                                                    <path
                                                        d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z"
                                                        fill="#B3C1CF"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_38_2">
                                                        <rect width="132" height="132" fill="white"
                                                              transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="text-sm fst-italic my-1">
                                            Max 2MB 500px 500px
                                        </p>
                                    </div>
                                    <div>
                                        <label for="upload-file"
                                               class="btn btn-outline-primary d-inline-flex align-items-center">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                 viewBox="0 0 25 24"
                                                 fill="none">
                                                <path
                                                    d="M11.5 16V7.85L8.9 10.45L7.5 9L12.5 4L17.5 9L16.1 10.45L13.5 7.85V16H11.5ZM6.5 20C5.95 20 5.47917 19.8042 5.0875 19.4125C4.69583 19.0208 4.5 18.55 4.5 18V15H6.5V18H18.5V15H20.5V18C20.5 18.55 20.3042 19.0208 19.9125 19.4125C19.5208 19.8042 19.05 20 18.5 20H6.5Z"
                                                    fill="#0036E3"/>
                                            </svg>
                                            Upload Photo</label>
                                        <input type="file" id="upload-file" class="d-none">
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
