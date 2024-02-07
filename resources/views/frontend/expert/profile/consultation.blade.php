@extends('frontend.layouts.app')
@section('content')
@vite('resources/default/css/expert-profile.css')

<div class="container profile__page edux-profile-page">
    <div class="edux-billing-method-area-right">

        <div class="col-md-8">
            <div class="edux-no-available-booking mt-5">
                <div class="page-content">

                    <div class="book-expert-profile pb-3">
                        <img src="{{ asset('assets/frontend/img/book-exprt1.jpg') }}" alt="">


                        <div class="edux-course-curriculum-area">
                            <div class="edux-course-curriculum-item">
                                <h3>{{ $consultation->expertField->name }}</h3>
                                <div class="consultant-reviw">
                                    <ul class="mb-0">
                                        <li class="me-3">12 Ratings</li>
                                        <li> <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                    <path d="M7.99994 12.3916L11.4583 14.4833C12.0916 14.8666 12.8666 14.3 12.6999 13.5833L11.7833 9.64997L14.8416 6.99997C15.3999 6.51663 15.0999 5.59997 14.3666 5.54163L10.3416 5.19997L8.76661 1.4833C8.48327 0.808301 7.51661 0.808301 7.23327 1.4833L5.65827 5.19163L1.63327 5.5333C0.899939 5.59163 0.599938 6.5083 1.15827 6.99163L4.21661 9.64163L3.29994 13.575C3.13327 14.2916 3.90827 14.8583 4.5416 14.475L7.99994 12.3916Z" fill="#E9B911"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li> <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                    <path d="M7.99994 12.3916L11.4583 14.4833C12.0916 14.8666 12.8666 14.3 12.6999 13.5833L11.7833 9.64997L14.8416 6.99997C15.3999 6.51663 15.0999 5.59997 14.3666 5.54163L10.3416 5.19997L8.76661 1.4833C8.48327 0.808301 7.51661 0.808301 7.23327 1.4833L5.65827 5.19163L1.63327 5.5333C0.899939 5.59163 0.599938 6.5083 1.15827 6.99163L4.21661 9.64163L3.29994 13.575C3.13327 14.2916 3.90827 14.8583 4.5416 14.475L7.99994 12.3916Z" fill="#E9B911"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                    <path d="M7.99994 12.3916L11.4583 14.4833C12.0916 14.8666 12.8666 14.3 12.6999 13.5833L11.7833 9.64997L14.8416 6.99997C15.3999 6.51663 15.0999 5.59997 14.3666 5.54163L10.3416 5.19997L8.76661 1.4833C8.48327 0.808301 7.51661 0.808301 7.23327 1.4833L5.65827 5.19163L1.63327 5.5333C0.899939 5.59163 0.599938 6.5083 1.15827 6.99163L4.21661 9.64163L3.29994 13.575C3.13327 14.2916 3.90827 14.8583 4.5416 14.475L7.99994 12.3916Z" fill="#E9B911"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                    <path d="M7.99994 12.3916L11.4583 14.4833C12.0916 14.8666 12.8666 14.3 12.6999 13.5833L11.7833 9.64997L14.8416 6.99997C15.3999 6.51663 15.0999 5.59997 14.3666 5.54163L10.3416 5.19997L8.76661 1.4833C8.48327 0.808301 7.51661 0.808301 7.23327 1.4833L5.65827 5.19163L1.63327 5.5333C0.899939 5.59163 0.599938 6.5083 1.15827 6.99163L4.21661 9.64163L3.29994 13.575C3.13327 14.2916 3.90827 14.8583 4.5416 14.475L7.99994 12.3916Z" fill="#E9B911"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                    <path d="M7.99994 12.3916L11.4583 14.4833C12.0916 14.8666 12.8666 14.3 12.6999 13.5833L11.7833 9.64997L14.8416 6.99997C15.3999 6.51663 15.0999 5.59997 14.3666 5.54163L10.3416 5.19997L8.76661 1.4833C8.48327 0.808301 7.51661 0.808301 7.23327 1.4833L5.65827 5.19163L1.63327 5.5333C0.899939 5.59163 0.599938 6.5083 1.15827 6.99163L4.21661 9.64163L3.29994 13.575C3.13327 14.2916 3.90827 14.8583 4.5416 14.475L7.99994 12.3916Z" fill="#E9B911"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="edux-order-stream">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M1.98438 8.00283V14.7428C1.99038 16.2668 3.34538 17.4928 4.99838 17.4878H15.6914C15.9944 17.4878 16.2404 17.2628 16.2404 16.9898V10.2498C16.2324 8.72683 14.8774 7.49983 13.2264 7.50583H2.53137C2.22937 7.50583 1.98438 7.72983 1.98438 8.00283ZM16.9204 10.6328L21.3364 7.66983C21.7194 7.37783 22.0164 7.45083 22.0164 7.97883V17.0148C22.0164 17.6158 21.6534 17.5428 21.3364 17.3238L16.9204 14.3668V10.6328Z" fill="#0036E3" />
                                </svg>
                                <p class="mb-0"><strong>2</strong> Order</p>
                            </div>

                        </div>


                    </div>


                    <div class="prof-text mt-3">
                        <p>{{ $consultation->description }}</p>

                        <div class="tag-list">
                            @foreach ($consultation->skills as $skill)
                                <a href="#" class="expert-profile-tag">{{ $skill->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="edux-expert-card-area">
                        <h5>Expert Profile</h5>

                        <div class="project-expert-card p-0 border-0">

                            <div class="eudx-project-expert-thumb">

                                <div class="project-expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}" />
                                    </div>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">
                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                Esther</h3>
                                            <ul class="project-expert-meta">
                                                <li>Public Health</li>
                                                <li>Melbourne University</li>
                                                <li>Australia</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="expert-card-body">
                                <div class="d-flex gap-3 align-items-center">
                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                    </div>
                                    <div class="star-ratings">
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                    </div>

                                </div>
                                <div class="project-expert-summary py-3">
                                    <p>Prof. Michael is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services. Holding a PhD in Curriculum and Instruction, Prof. Michael has dedicated expertise in designing innovative curricula, enhancing student engagement, and conducting research on educational best practices particularly in public health education. With a background in curriculum coordination, consultation, and a strong commitment to education, Prof. Michael has made significant contributions to the field. <a href="#" class="edux-read-more">More</a></p>
                                </div>

                            </div>
                        </div>

                        <div class="page-block">
                            <div class="card card-24 border-0">
                                <div class="card-body px-0">
                                    <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <x-icon.user-tie />
                                            <h3 class="h5 mb-0">Work Experience</h3>
                                            <button class="icon-btn">
                                                <x-icon.info fill="#C8C5D4" />
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card card-24 mb-3 border-0">
                                        <div class="card-body pb-0 pt-0">
                                            <div class="d-flex gap-3 justify-content-sm-between">
                                                <div class="mb-2">
                                                    <h6 class="">Director of Curriculum Development</h6>
                                                    <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                            Australia </i> | <strong>Mar 2015 - Mar 2020</strong>
                                                    </p>
                                                </div>

                                            </div>
                                            <p>As a Director of Curriculum Development at the Public Health
                                                Institute of Sydney, I have played a pivotal
                                                role in shaping the education landscape. My responsibilities include
                                                <span class="edux-more-read"> ... More</span></p>
                                        </div>

                                    </div>

                                    <div class="card card-24 border-0">
                                        <div class="card-body pt-0 pb-0">
                                            <div class="d-flex gap-3 justify-content-sm-between">
                                                <div class="mb-2">
                                                    <h6 class="">Director of Curriculum Development</h6>
                                                    <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                            Australia </i> | <strong>Mar 2015 - Mar 2020</strong>
                                                    </p>
                                                </div>

                                            </div>
                                            <p>As a Director of Curriculum Development at the Public Health
                                                Institute of Sydney, I have played a pivotal
                                                role in shaping the education landscape. My responsibilities include
                                                <span class="edux-more-read"> ... More</span></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>




                        <div class="consultant-work mb-0 border-0 p-0">

                            <div class="d-flex gap-2 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M23 2L24.593 5L28 5.414L25.5 7.667L26 11L23 9.125L20 11L20.5 7.667L18 5.414L21.5 5L23 2Z" fill="#0036E3" />
                                    <path d="M22.7201 13.2477L20.7821 12.7497C20.4347 14.0879 19.6985 15.2932 18.6664 16.2132C17.6344 17.1332 16.3528 17.7267 14.9836 17.9186C13.6144 18.1106 12.219 17.8925 10.9737 17.2918C9.72846 16.691 8.68917 15.7347 7.98715 14.5436C7.28514 13.3525 6.9519 11.9801 7.02954 10.5996C7.10718 9.21923 7.59222 7.8928 8.42337 6.78792C9.25452 5.68305 10.3945 4.8493 11.6993 4.39201C13.0041 3.93473 14.4151 3.87442 15.7541 4.21871L16.2531 2.28171C14.3011 1.77396 12.2351 1.93739 10.3871 2.74572C8.53923 3.55405 7.01683 4.96032 6.06471 6.73842C5.11258 8.51652 4.78606 10.5632 5.13764 12.5492C5.48922 14.5353 6.49848 16.3455 8.00313 17.6887V29.9987L14.0031 25.9987L20.0031 29.9987V17.7067C21.3313 16.523 22.2771 14.9708 22.7201 13.2477ZM18.0031 26.2617L14.0031 23.5947L10.0031 26.2617V19.0487C11.2442 19.6722 12.6136 19.9973 14.0024 19.9984C15.3913 19.9994 16.7612 19.6763 18.0031 19.0547V26.2617Z" fill="#0036E3" />
                                </svg>
                                <h3 class="h5 mb-0">Portfolio</h3>
                                <button class="icon-btn">
                                    <x-icon.info fill="#C8C5D4" />
                                </button>
                            </div>


                            <div class="mt-4">
                                <div class="owl-carousel portfolioCaousel">
                                    <div class="portfolio__card">
                                        <figure class="position-relative">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">

                                        </figure>
                                        <h4 class="fs-6 fw-medium title">
                                            <a href="#">Comparative Analysis of Public Health Curricula</a>
                                        </h4>
                                        <div class="tags">
                                            <span>Public Health</span>
                                            <span>Infectious Diseases</span>
                                        </div>
                                    </div>
                                    <div class="portfolio__card">
                                        <figure class="position-relative">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port2.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">

                                        </figure>
                                        <h4 class="fs-6 fw-medium title">
                                            <a href="#">Comparative Analysis of Public Health Curricula</a>
                                        </h4>
                                        <div class="tags">
                                            <span>Public Health</span>
                                            <span>Infectious Diseases</span>
                                        </div>
                                    </div>
                                    <div class="portfolio__card">
                                        <figure class="position-relative">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">

                                        </figure>



                                        <h4 class="fs-6 fw-medium title">
                                            <a href="#">Comparative Analysis of Public Health Curricula</a>
                                        </h4>
                                        <div class="tags">
                                            <span>Public Health</span>
                                            <span>Infectious Diseases</span>
                                        </div>
                                    </div>
                                    <div class="portfolio__card">
                                        <figure class="position-relative">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">

                                        </figure>
                                        <h4 class="fs-6 fw-medium title">
                                            <a href="#">Comparative Analysis of Public Health Curricula</a>
                                        </h4>
                                        <div class="tags">
                                            <span>Public Health</span>
                                            <span>Infectious Diseases</span>
                                        </div>
                                    </div>
                                    <div class="portfolio__card">
                                        <figure class="position-relative">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">

                                        </figure>
                                        <h4 class="fs-6 fw-medium title">
                                            <a href="#">Comparative Analysis of Public Health Curricula</a>
                                        </h4>
                                        <div class="tags">
                                            <span>Public Health</span>
                                            <span>Infectious Diseases</span>
                                        </div>
                                    </div>
                                </div>
                                <!--.//carousel-->
                            </div>



                        </div> <!-- Consultant work-->


                        <div class="consultant-testimonial border-0 p-0">
                            <h3 class="mb-1"><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}"></img>Rating and Review</h3>


                            <div class="star-ratings mt-3">
                                <x-icon.star-fill />
                                <x-icon.star-fill />
                                <x-icon.star-fill />
                                <x-icon.star-fill />
                                <x-icon.star-fill />
                            </div>

                            <div class="testimonial-text">
                                <p>Prof. Michael Kassiou played a pivotal role in the development of our university curriculum. His expertise, creativity, and dedication to ensuring our program met the highest standards were truly outstanding. We are grateful for his contributions and highly recommend his services to any educational institution.</p>
                                <div class="testimonial-block">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                    </div>
                                    <div class="testimonial-con">
                                        <h4>Prof. David Smith</h4>
                                        <p>Dean | School of Business | Sydney Islamic Business School</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-text testimonialnone">
                                <p>Prof. Michael Kassiou played a pivotal role in the development of our university curriculum. His expertise, creativity, and dedication to ensuring our program met the highest standards were truly outstanding. We are grateful for his contributions and highly recommend his services to any educational institution.</p>
                                <div class="testimonial-block">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                    </div>
                                    <div class="testimonial-con">
                                        <h4>Prof. David Smith</h4>
                                        <p>Dean | School of Business | Sydney Islamic Business School</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-button">
                                <a href="#">More Review & Rating <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M13.4437 11.9976L8.84375 7.39758L9.89758 6.34375L15.5514 11.9976L9.89758 17.6514L8.84375 16.5976L13.4437 11.9976Z" fill="#0036E3" />
                                    </svg> </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- page Content end here -->

            </div>
        </div>

        <div class="col-md-4 mt-5">

            <div class="edux-sidebar-expert edux-billing-method-right-sidebar">


                <div class="eudx-total-slot-area py-1">
                    <ul>

                        <li> <span><strong class="edux-booking">Booking for 1 hour</strong></span> <span><strong class="edux-booking">$100</strong></span> </li>

                    </ul>
                </div>

                <div class="edux-right-schedule mt-3">
                    <h6>Scheduling</h6>
                    <div class="form-radio-option edux-radio-option-right">
                        <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                        <label class="form-radio-title  edux-form-radio-title-right me-4" for="Male"> <span class="me-1 edux-meeting-title"> Meeting now</span>
                            <span>Michel is not available right now</span>
                        </label>
                    </div>

                    <div class="form-radio-option edux-radio-option-right">
                        <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                        <label class="form-radio-title  edux-form-radio-title-right me-4" for="Male"> <span class="me-1 edux-meeting-title"> Meeting now</span>
                            <span>Michel is not available right now</span>
                        </label>
                    </div>


                    <div class="tag-list mt-2">

                        <a href="#" class="expert-profile-tag">1:00 AM</a>
                        <a href="#" class="expert-profile-tag">2:00 AM</a>
                        <a href="#" class="expert-profile-tag">3:00 AM</a>

                    </div>

                    <div class="edux-check-and-fund">
                        <p><a href="#">See more times</a> </p>
                        <button type="button" class="btn btn-primary edux-btn-primary">Continue</button>
                        <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M6.5 14H14.5V12H6.5V14ZM6.5 11H18.5V9H6.5V11ZM6.5 8H18.5V6H6.5V8ZM2.5 22V4C2.5 3.45 2.69583 2.97917 3.0875 2.5875C3.47917 2.19583 3.95 2 4.5 2H20.5C21.05 2 21.5208 2.19583 21.9125 2.5875C22.3042 2.97917 22.5 3.45 22.5 4V16C22.5 16.55 22.3042 17.0208 21.9125 17.4125C21.5208 17.8042 21.05 18 20.5 18H6.5L2.5 22ZM5.65 16H20.5V4H4.5V17.125L5.65 16Z" fill="#0036E3"></path>
                            </svg>
                            Chat with Michael
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
<!-- ===================== Work Experience Modal start Here ====================== -->

<div class="modal fade" id="WorkExperienceForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-add-expert">
        <div class="modal-content modal-content-expert">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 pt-0">

                <div class="consultant-work-add">
                    <h3>
                        <span class="add-exp-img"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img></span>
                        <span class="add-exp-text">Add Work Experience</span>
                    </h3>
                </div>
                <form>
                    <div class="mb-4">
                        <label for="recipient-name" class="col-form-label expert-for-label">Name of institution</label>
                        <select class="form-select form-select-lg mb-3 add-expert-select" aria-label=".form-select-lg example">
                            <option selected>Select an institution</option>
                            <option value="1">Select an institution</option>
                            <option value="2">Select an institution</option>
                            <option value="3">Select an institution</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="recipient-name" class="col-form-label expert-for-label pt-0">Role / Job title</label>
                        <select class="form-select form-select-lg mb-3  add-expert-select" aria-label=".form-select-lg example">
                            <option selected>Select an institution</option>
                            <option value="1">Select an institution</option>
                            <option value="2">Select an institution</option>
                            <option value="3">Select an institution</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <h3 class="start-end">Start date</h3>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label expert-for-label">Month</label>
                            <select class="form-select form-select-lg mb-3  add-expert-select" aria-label=".form-select-lg example">
                                <option selected>Select month</option>
                                <option value="1">Select month</option>
                                <option value="2">Select month</option>
                                <option value="3">Select month</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label expert-for-label">Year</label>
                            <select class="form-select form-select-lg mb-3  add-expert-select" aria-label=".form-select-lg example">
                                <option selected>Select Year</option>
                                <option value="1">Select Year</option>
                                <option value="2">Select Year</option>
                                <option value="3">Select Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <h3 class="start-end">End date</h3>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label expert-for-label">Month</label>
                            <select class="form-select form-select-lg mb-3  add-expert-select" aria-label=".form-select-lg example">
                                <option selected>Select month</option>
                                <option value="1">Select month</option>
                                <option value="2">Select month</option>
                                <option value="3">Select month</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label expert-for-label">Year</label>
                            <select class="form-select form-select-lg mb-3  add-expert-select" aria-label=".form-select-lg example">
                                <option selected>Select Year</option>
                                <option value="1">Select Year</option>
                                <option value="2">Select Year</option>
                                <option value="3">Select Year</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <div class="form-check form-check-all">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label expert-for-label" for="gridCheck">
                                    I currently work here
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <h3 class="start-end">Description</h3>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label textarea-for-label">Add a simple description of your responsibilities and achievements in this role.</label>
                            <textarea class="form-control expert-text-area" id="exampleFormControlTextarea1" rows="3">Include a few brief details about what you did in this role.
                          </textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn btn-primary btn-exp-save">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- ===================== Work Experience Modal start Here ====================== -->




<!-- ===================== Work Experience Modal start Here ====================== -->

<div class="modal fade" id="addPortfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-add-expert">
        <div class="modal-content modal-content-expert">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 pt-0">
                <div class="consultant-work-add">
                    <h3>
                        <span class="add-exp-img"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img></span>
                        <span class="add-exp-text">Add Portfolio</span>
                    </h3>
                </div>
                <form>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="upload-area">
                                <label>
                                    <div class="upload-item">
                                        <img src="{{ asset('/assets/frontend/img/upload.png') }}"></img>
                                        <h4>Clik to upload or drag & drop</h4>
                                        <p>Drag & drop any images or documents that might be helpful in explaining your brief here</p>
                                    </div>
                                    <input type="file" style="visibility: hidden;" />
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4 position-relative">
                                <label for="exampleInputEmail1" class="form-label position-absolute add-title-label">Title of the project</label>
                                <input type="text" class="form-control add-expert-select" id="" aria-describedby="emailHelp" placeholder="Type project title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 position-relative">
                                <label for="exampleInputEmail1" class="form-label position-absolute category-label">Category</label>
                                <input type="text" class="form-control add-expert-select" id="" aria-describedby="emailHelp" placeholder="Type the skills & hit enter">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="suggestion-area">
                                <p><span class="suggestion-skill">Suggestion skills: </span> Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn btn-primary btn-exp-save">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- ===================== Work Experience Modal start Here ====================== -->





@endsection


@push('bottom_scripts')
<!-- Expert profile Portfolio slide -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".portfolioCaousel").owlCarousel({
        items: 3
        , autoplay: false
        , autoplayTimeout: 5500
        , autoplayHoverPause: true
        , smartSpeed: 550
        , loop: false
        , margin: 20
        , nav: true
        , dots: true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 2
            }
            , 992: {
                items: 3
            }
            , 1200: {
                items: 3
            }
        },

    });

</script>
@endpush
