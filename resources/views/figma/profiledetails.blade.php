@extends('frontend.layouts.front-layout')

@section('content')
    {{--    @vite('resources/default/css/consultantreg.css')--}}
    <section class="profile-setup">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="card card-40 card-shadow border-0">
                        <div class="card-body">
                            <ul class="profile-progress-bar-nav">
                                <li class="done-item"><strong>Expertise</strong> Expertise area</li>
                                <li class="running-item"><strong>Education</strong> Academic details</li>
                                <li><strong>Work Experience</strong> Add work experience</li>
                                <li><strong>Proficiency</strong> Add language</li>
                                <li><strong>Service Fees</strong> Per hour rate</li>
                                <li><strong>Profile Summary</strong> Personal information</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 ps-lg-5 mt-5 mt-lg-0">

                    <div class="progress-step-content  ">
                        <h5 class="mb-2">Expert by Field</h5>
                        <x-form.select label="Expert by Field" name="title">
                            <option value="">Architecture History</option>
                            <option value="Mr">Architecture</option>
                            <option value="Mrs">- Architecture History</option>
                            <option value="Dr">- Architectural Restoration</option>
                            <option value="Prof">Construction</option>
                            <option value="Prof">-Art</option>
                            <option value="Prof">-Animation</option>
                        </x-form.select>
                        <h5 class="mb-2">Expert skillset</h5>
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
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Accreditation Specialists
                                            </button>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-collapseOne"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation Documentation</button>
                                                <button class="btn btn-light w-100">Accreditation Process</button>
                                                <button class="btn btn-light w-100">Accreditation Renewal</button>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed px-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Curriculum Experts
                                            </button>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-collapseTwo"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation Documentation</button>
                                                <button class="btn btn-light w-100 selected-skill">Accreditation Process
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Renewal</button>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed px-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Course Accreditation Specialists
                                            </button>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingThree"
                                                 data-bs-parent="#accordionFlushExample">
                                                <button class="btn btn-light w-100">Accreditation Documentation</button>
                                                <button class="btn btn-light w-100 selected-skill">Accreditation Process
                                                </button>
                                                <button class="btn btn-light w-100">Accreditation Renewal</button>
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
                        <h5 class="mb-2">Expert by Field</h5>
                        <p>Add your educational background to let employers know where you studied or are currently
                            studying. Even if you didn't finish, it's important to include it here. And if you've earned
                            a college degree, you don't need to add your high school/GED.</p>
                        <h6>Educations</h6>
                        <div class="d-grid grid-cols-sm-6 gap-3">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <p class="fw-medium mb-0"> University of California Business Studies</p>

                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless mb-0">
                                        <tr>
                                            <td>Degree</td>
                                            <td class="fw-medium">: Bachelor</td>
                                        </tr>
                                        <tr>
                                            <td>Start Year</td>
                                            <td class="fw-medium">: 2016</td>
                                        </tr>
                                        <tr>
                                            <td>End Year</td>
                                            <td class="fw-medium">: 2020</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                                    <button class="icon-btn icon-btn-sm p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5.15425 19H6.39077L15.6504 9.74036L14.4139 8.50381L5.15425 17.7635V19ZM18.858 8.65576L15.4831 5.31158L16.787 4.00776C17.0806 3.71417 17.4376 3.56738 17.8581 3.56738C18.2786 3.56738 18.6356 3.71417 18.9292 4.00776L20.1465 5.22503C20.4401 5.51862 20.592 5.87053 20.6023 6.28078C20.6125 6.69103 20.4709 7.04295 20.1773 7.33653L18.858 8.65576ZM17.7735 9.75573L7.02922 20.5H3.6543V17.125L14.3985 6.38078L17.7735 9.75573ZM15.0274 9.11728L14.4139 8.50381L15.6504 9.74036L15.0274 9.11728Z" fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                    <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                                            data-bs-target="#deleteEducation">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.3077 20.5C6.80898 20.5 6.38302 20.3234 6.02982 19.9702C5.67661 19.617 5.5 19.191 5.5 18.6923V6.00005H4.5V4.50008H8.99997V3.61548H15V4.50008H19.5V6.00005H18.5V18.6923C18.5 19.1975 18.325 19.625 17.975 19.975C17.625 20.325 17.1974 20.5 16.6922 20.5H7.3077ZM17 6.00005H6.99997V18.6923C6.99997 18.7821 7.02883 18.8558 7.08652 18.9135C7.14423 18.9712 7.21795 19.0001 7.3077 19.0001H16.6922C16.7692 19.0001 16.8397 18.968 16.9038 18.9039C16.9679 18.8398 17 18.7693 17 18.6923V6.00005ZM9.40385 17.0001H10.9038V8.00005H9.40385V17.0001ZM13.0961 17.0001H14.5961V8.00005H13.0961V17.0001Z" fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <p class="fw-medium mb-0"> University of California Business Studies</p>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless  mb-0">
                                        <tr>
                                            <td>Degree</td>
                                            <td class="fw-medium">: Bachelor</td>
                                        </tr>
                                        <tr>
                                            <td>Start Year</td>
                                            <td class="fw-medium">: 2016</td>
                                        </tr>
                                        <tr>
                                            <td>End Year</td>
                                            <td class="fw-medium">: 2020</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                                    <button class="icon-btn icon-btn-sm p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5.15425 19H6.39077L15.6504 9.74036L14.4139 8.50381L5.15425 17.7635V19ZM18.858 8.65576L15.4831 5.31158L16.787 4.00776C17.0806 3.71417 17.4376 3.56738 17.8581 3.56738C18.2786 3.56738 18.6356 3.71417 18.9292 4.00776L20.1465 5.22503C20.4401 5.51862 20.592 5.87053 20.6023 6.28078C20.6125 6.69103 20.4709 7.04295 20.1773 7.33653L18.858 8.65576ZM17.7735 9.75573L7.02922 20.5H3.6543V17.125L14.3985 6.38078L17.7735 9.75573ZM15.0274 9.11728L14.4139 8.50381L15.6504 9.74036L15.0274 9.11728Z" fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                    <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                                            data-bs-target="#deleteEducation">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.3077 20.5C6.80898 20.5 6.38302 20.3234 6.02982 19.9702C5.67661 19.617 5.5 19.191 5.5 18.6923V6.00005H4.5V4.50008H8.99997V3.61548H15V4.50008H19.5V6.00005H18.5V18.6923C18.5 19.1975 18.325 19.625 17.975 19.975C17.625 20.325 17.1974 20.5 16.6922 20.5H7.3077ZM17 6.00005H6.99997V18.6923C6.99997 18.7821 7.02883 18.8558 7.08652 18.9135C7.14423 18.9712 7.21795 19.0001 7.3077 19.0001H16.6922C16.7692 19.0001 16.8397 18.968 16.9038 18.9039C16.9679 18.8398 17 18.7693 17 18.6923V6.00005ZM9.40385 17.0001H10.9038V8.00005H9.40385V17.0001ZM13.0961 17.0001H14.5961V8.00005H13.0961V17.0001Z" fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
                                data-bs-target="#addEducation">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3"/>
                            </svg>
                            <span>Add Education</span>
                        </button>
                    </div>

                    <div class="progress-step-content ">
                        <h5 class="mb-2">Work Experience History</h5>
                        <p>Add your working experience.</p>

                        <div class="d-grid grid-cols-sm-6 gap-3">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <p class="fw-medium mb-0"> Director of Curriculum Development</p>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div><p class="text-lg">ABB Company</p></div>
                                        <div><p class="text-sm fw-medium">2015 - 2020</p></div>
                                    </div>
                                    <p class="fst-italic"> Public Health Institute of Sydney, Sydney, Australia</p>
                                    <p>As a Director of Curriculum Development at the Public Health Institute of
                                        Sydney</p>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                                    <button class="icon-btn icon-btn-sm p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M2.15425 16H3.39077L12.6504 6.74036L11.4139 5.50381L2.15425 14.7635V16ZM15.858 5.65576L12.4831 2.31158L13.787 1.00776C14.0806 0.714174 14.4376 0.567383 14.8581 0.567383C15.2786 0.567383 15.6356 0.714174 15.9292 1.00776L17.1465 2.22503C17.4401 2.51862 17.592 2.87053 17.6023 3.28078C17.6125 3.69103 17.4709 4.04295 17.1773 4.33653L15.858 5.65576ZM14.7735 6.75573L4.02922 17.5H0.654297V14.125L11.3985 3.38078L14.7735 6.75573ZM12.0274 6.11728L11.4139 5.50381L12.6504 6.74036L12.0274 6.11728Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                    <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                                            data-bs-target="#deleteWorkExperience">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M7.3077 20.4998C6.80898 20.4998 6.38302 20.3232 6.02982 19.97C5.67661 19.6168 5.5 19.1908 5.5 18.6921V5.99981H4.5V4.49983H8.99997V3.61523H15V4.49983H19.5V5.99981H18.5V18.6921C18.5 19.1972 18.325 19.6248 17.975 19.9748C17.625 20.3248 17.1974 20.4998 16.6922 20.4998H7.3077ZM17 5.99981H6.99997V18.6921C6.99997 18.7818 7.02883 18.8556 7.08652 18.9133C7.14423 18.971 7.21795 18.9998 7.3077 18.9998H16.6922C16.7692 18.9998 16.8397 18.9678 16.9038 18.9037C16.9679 18.8395 17 18.769 17 18.6921V5.99981ZM9.40385 16.9998H10.9038V7.99981H9.40385V16.9998ZM13.0961 16.9998H14.5961V7.99981H13.0961V16.9998Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <p class="fw-medium mb-0"> Director of Curriculum Development</p>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div><p class="text-lg">ABB Company</p></div>
                                        <div><p class="text-sm fw-medium">2015 - 2020</p></div>
                                    </div>
                                    <p class="fst-italic"> Public Health Institute of Sydney, Sydney, Australia</p>
                                    <p>As a Director of Curriculum Development at the Public Health Institute of
                                        Sydney</p>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                                    <button class="icon-btn icon-btn-sm p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M2.15425 16H3.39077L12.6504 6.74036L11.4139 5.50381L2.15425 14.7635V16ZM15.858 5.65576L12.4831 2.31158L13.787 1.00776C14.0806 0.714174 14.4376 0.567383 14.8581 0.567383C15.2786 0.567383 15.6356 0.714174 15.9292 1.00776L17.1465 2.22503C17.4401 2.51862 17.592 2.87053 17.6023 3.28078C17.6125 3.69103 17.4709 4.04295 17.1773 4.33653L15.858 5.65576ZM14.7735 6.75573L4.02922 17.5H0.654297V14.125L11.3985 3.38078L14.7735 6.75573ZM12.0274 6.11728L11.4139 5.50381L12.6504 6.74036L12.0274 6.11728Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                    <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                                            data-bs-target="#deleteWorkExperience">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M7.3077 20.4998C6.80898 20.4998 6.38302 20.3232 6.02982 19.97C5.67661 19.6168 5.5 19.1908 5.5 18.6921V5.99981H4.5V4.49983H8.99997V3.61523H15V4.49983H19.5V5.99981H18.5V18.6921C18.5 19.1972 18.325 19.6248 17.975 19.9748C17.625 20.3248 17.1974 20.4998 16.6922 20.4998H7.3077ZM17 5.99981H6.99997V18.6921C6.99997 18.7818 7.02883 18.8556 7.08652 18.9133C7.14423 18.971 7.21795 18.9998 7.3077 18.9998H16.6922C16.7692 18.9998 16.8397 18.9678 16.9038 18.9037C16.9679 18.8395 17 18.769 17 18.6921V5.99981ZM9.40385 16.9998H10.9038V7.99981H9.40385V16.9998ZM13.0961 16.9998H14.5961V7.99981H13.0961V16.9998Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
                                data-bs-target="#addWorkExperience">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3"/>
                            </svg>
                            <span>Add Work Experience</span>
                        </button>
                    </div>

                    <div class="progress-step-content ">
                        <h5 class="mb-2">What languages do you speak?</h5>
                        <p>We will use this to help match you with clients who are fluent in their language.</p>

                        <div class="d-grid grid-cols-sm-6 gap-3">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>Language</td>
                                            <td class="fw-medium">: English</td>
                                        </tr>
                                        <tr>
                                            <td>Proficiency</td>
                                            <td class="fw-medium">: Fluent</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                                    <button class="icon-btn icon-btn-sm p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M2.15425 16H3.39077L12.6504 6.74036L11.4139 5.50381L2.15425 14.7635V16ZM15.858 5.65576L12.4831 2.31158L13.787 1.00776C14.0806 0.714174 14.4376 0.567383 14.8581 0.567383C15.2786 0.567383 15.6356 0.714174 15.9292 1.00776L17.1465 2.22503C17.4401 2.51862 17.592 2.87053 17.6023 3.28078C17.6125 3.69103 17.4709 4.04295 17.1773 4.33653L15.858 5.65576ZM14.7735 6.75573L4.02922 17.5H0.654297V14.125L11.3985 3.38078L14.7735 6.75573ZM12.0274 6.11728L11.4139 5.50381L12.6504 6.74036L12.0274 6.11728Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                    <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                                            data-bs-target="#deleteLanguage">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M7.3077 20.4998C6.80898 20.4998 6.38302 20.3232 6.02982 19.97C5.67661 19.6168 5.5 19.1908 5.5 18.6921V5.99981H4.5V4.49983H8.99997V3.61523H15V4.49983H19.5V5.99981H18.5V18.6921C18.5 19.1972 18.325 19.6248 17.975 19.9748C17.625 20.3248 17.1974 20.4998 16.6922 20.4998H7.3077ZM17 5.99981H6.99997V18.6921C6.99997 18.7818 7.02883 18.8556 7.08652 18.9133C7.14423 18.971 7.21795 18.9998 7.3077 18.9998H16.6922C16.7692 18.9998 16.8397 18.9678 16.9038 18.9037C16.9679 18.8395 17 18.769 17 18.6921V5.99981ZM9.40385 16.9998H10.9038V7.99981H9.40385V16.9998ZM13.0961 16.9998H14.5961V7.99981H13.0961V16.9998Z"
                                                fill="#191D24" fill-opacity="0.7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>


                        </div>

                        <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
                                data-bs-target="#addLanguage">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3"/>
                            </svg>
                            <span>Add Language</span>
                        </button>
                    </div>

                    <div class="progress-step-content ">
                        <h5 class="mb-2">Hourly rate</h5>
                        <p>Clients will see this rate on your profile and in search results once you publish your
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
                                    <p class="mb-1">The Eduexhub Service Fee Is 10% when you begin a contract with a new
                                        client. Once you will over $500 with your client, the fee will be 5%.</p>
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

                    <div class="progress-step-content ">
                        <h5 class="mb-2">Biography</h5>
                        <p class="mb-5">Please provide a brief biography, limited to 300 words, which will be used in
                            your public
                            profile. Ensure that it conveys meaningful information you would like the client to know
                            about you before engaging in your project</p>
                        <textarea rows="5" cols="10" name="bio" id="bio"
                                  class="input-field-control h-auto"
                                  placeholder="e.g. Brief 300 words summary about your expertise."></textarea>

                        <h5 class="mb-2 mt-5">Upload your profile picture</h5>
                        <p class="mb-5">Please upload the image you would like to appear in your profile</p>
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

                    <hr class="my-40">
                    <div class="d-flex justify-content-between gap-5">
                        <button class="btn btn-outline-primary">
                            Back
                        </button>
                        <button class="btn btn-primary">
                            Next
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Modal : Add Education-->
    <div class="modal fade" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">
                        <x-form.input type="text" readonly label="Name of Institution" name="type"
                                      placeholder="Type institution name" value=""/>
                        <x-form.input type="text" readonly label="Degree" name="type" placeholder="Ex: Bachelor"
                                      value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.check name="terms">
                            I currently study here
                        </x-form.check>
                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Education-->
    <div class="modal fade" id="deleteEducation" tabindex="-1" aria-labelledby="deleteEducationLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Add Work Experience-->
    <div class="modal fade" id="addWorkExperience" tabindex="-1" aria-labelledby="addWorkExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">
                        <x-form.input type="text" readonly label="Job Title" name="type"
                                      placeholder="Type Here" value=""/>
                        <x-form.input type="text" readonly label="Institute" name="type" placeholder="Type"
                                      value=""/>
                        <x-form.input type="text" readonly label="Address" name="type" placeholder="Type"
                                      value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="bio" placeholder="Type"/>
                        <x-form.check name="terms">
                            I currently work here
                        </x-form.check>
                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Work Experience-->
    <div class="modal fade" id="deleteWorkExperience" tabindex="-1" aria-labelledby="deleteWorkExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Add Language-->
    <div class="modal fade" id="addLanguage" tabindex="-1" aria-labelledby="addLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">

                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Language" name="title">
                                    <option value="">Select</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="Proficiency" name="title">
                                    <option value="">Select</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Language-->
    <div class="modal fade" id="deleteLanguage" tabindex="-1" aria-labelledby="deleteLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

@endsection
