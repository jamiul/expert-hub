@extends('frontend.layouts.figma', ['header' => 'client'])
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="sidebar-layout left-sidebar-layout expert-profile-layout">
                <div class="page-sidebar">
                    <div class="profile-widget user-bio-widget">
                        <div class="user-profile-picture">
                            <img src="{{ asset('assets/frontend/img/Mask-img1.png') }}">
                        </div>
                        <div class="user-profile-info">
                            <h3 class="h6">Professor Michael Kassiou</h3>
                            <p class="text-primary">Public Health</p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <x-icon.location fill="#8B8D92"/>
                                <sapn class="ms-2"> Sydney, Australia</sapn>
                            </p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <x-icon.clock fill="#8B8D92"/>
                                <span class="ms-2"> 10.15am AEST</span>
                            </p>

                            <button class="btn btn-outline-primary btn-md w-100 mt-3 btn-has-icon">
                                Invite to Project
                            </button>
                            <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24" fill="none">
                                    <path
                                        d="M6.5 14H14.5V12H6.5V14ZM6.5 11H18.5V9H6.5V11ZM6.5 8H18.5V6H6.5V8ZM2.5 22V4C2.5 3.45 2.69583 2.97917 3.0875 2.5875C3.47917 2.19583 3.95 2 4.5 2H20.5C21.05 2 21.5208 2.19583 21.9125 2.5875C22.3042 2.97917 22.5 3.45 22.5 4V16C22.5 16.55 22.3042 17.0208 21.9125 17.4125C21.5208 17.8042 21.05 18 20.5 18H6.5L2.5 22ZM5.65 16H20.5V4H4.5V17.125L5.65 16Z"
                                        fill="#0036E3"/>
                                </svg>
                                Chat with Michael
                            </button>

                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h4 class="widget-title">Languages</h4>
                        <div class="widget-content text-sm">
                            <div class="d-flex gap-2 align-items-center py-1">
                                <x-icon.globe fill="#0036E3"/>
                                <div>
                                    <p class="m-0 fw-medium">Proficient in English</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget user-skills-widget">
                        <h4 class="widget-title">Skillsets</h4>

                        <div class="tag-list expert-tag-list">
                            <a href="#">Public Health</a>
                            <a href="#">Infectious Diseases</a>
                            <a href="#">Curriculum Development</a>
                            <a href="#">Educational Assessment</a>
                        </div>
                    </div>

                    <div class="profile-widget user-education-widget">
                        <h4 class="widget-title">Education </h4>
                        <div class="widget-content">
                            <div class="user-education-box-item edux-border-bottom">
                                <p class="text-sm fw-medium mt-1 mb-0">PhD in Public Health</p>
                                <p class="text-sm fst-italic mb-0">Expert Gate University</p>
                                <p class="text-sm mb-1"><strong>1995 - 2000</strong></p>
                            </div>
                            <div class="user-education-box-item edux-border-bottom">
                                <p class="text-sm fw-medium mt-1 mb-0">Master’s in Public Health</p>
                                <p class="text-sm fst-italic mb-0">Expert Gate University</p>
                                <p class="text-sm mb-1"><strong>1993 -1995</strong></p>
                            </div>
                            <div class="user-education-box-item mb-0">
                                <p class="text-sm fw-medium mt-1 mb-0">Bachelor in Public Health</p>
                                <p class="text-sm fst-italic mb-0">Expert Gate University</p>
                                <p class="text-sm mb-1"><strong>1989 - 1993</strong></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="page-content">
                    <div class="card card-24 mb-40" style="background-color: #F4F6F9;">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                                <h3 class="mb-0 h5">
                                    EOI Details
                                </h3>

                                <p class="mb-0">
                                    Proposed <span class="fw-medium">$200/hour</span>
                                </p>
                            </div>
                            <p>
                                Dear Mohammad Hafiz, I hope this message finds you well. I am writing to express my
                                strong
                                interest in your Curriculum Development project as advertised on ExpertGate. With a
                                background in [relevant field] and 10 years of experience in curriculum design, I am
                                confident in my ability to contribute to the success of your project.
                            </p>
                            <p>
                                Why Choose Me:
                            </p>
                            <p>
                                Expertise: I have successfully designed and implemented curriculum materials for
                                [mention
                                specific projects or industries]. My expertise lies in [highlight key skills or
                                subjects].
                            </p>
                            <p>
                                Customization: I understand the importance of tailoring curriculum to meet the unique
                                needs
                                of learners. I am committed to developing engaging and effective materials that align
                                with
                                your objectives.
                            </p>
                            <p class="mb-0">
                                Collaboration: I believe in open communication and collaboration. I am eager to work
                                closely
                                with you to ensure the curriculum not only meets but exceeds your expectations.</p>
                        </div>
                    </div>
                    <div class="card card-24">
                        <div class="card-body">
                            <div class="d-flex gap-2 align-items-center">
                                <x-icon.briefcase-time fill="#0036E3"/>
                                <h3 class="h5 mb-0">Consultation</h3>
                                <div class="tooltip-wrapper">
                                    <x-icon.info fill="#C8C5D4"/>
                                    <div class="tooltip-content">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </div>
                            <div class="consultation-card">
                                <div>
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"/>
                                    <button class="btn btn-primary w-100 mt-2">Book Now</button>
                                </div>
                                <div>
                                    <div class="consultation-card-header">
                                        <h6 class="">Architecture history</h6>
                                        <p class="fw-medium mb-0">$120/1 hrs</p>
                                    </div>
                                    <p>Prof. Jhon dowe offers consultation services to educational institutions,
                                        businesses and individuals seeking expertise in curriculum development.</p>
                                    <div class="tag-list">
                                        <a href="#" class="button-list-item"> Accreditation Documentation </a>
                                        <a href="#" class="button-list-item"> Accreditation Process </a>
                                        <a href="#" class="button-list-item"> Educational Expertise </a>
                                        <a href="#" class="button-list-item"> Instructionḁl Design </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="consultation-card">
                                <div>
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"/>
                                    <button class="btn btn-primary w-100 mt-2">Book Now</button>
                                </div>
                                <div>
                                    <div class="consultation-card-header">
                                        <h6 class="">Architecture history</h6>
                                        <p class="fw-medium mb-0">$120/1 hrs</p>
                                    </div>
                                    <p>Prof. Jhon dowe offers consultation services to educational institutions,
                                        businesses and individuals seeking expertise in curriculum development.</p>
                                    <div class="tag-list">
                                        <a href="#" class="button-list-item"> Accreditation Documentation </a>
                                        <a href="#" class="button-list-item"> Accreditation Process </a>
                                        <a href="#" class="button-list-item"> Educational Expertise </a>
                                        <a href="#" class="button-list-item"> Instructionḁl Design </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="page-block mt-40">
                        <div class="card card-24">
                            <div class="card-body">
                                <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                    <div class="d-flex gap-2 align-items-center">
                                        <x-icon.user-tie/>
                                        <h3 class="h5 mb-0">Work Experience</h3>
                                        <div class="tooltip-wrapper">
                                            <x-icon.info fill="#C8C5D4"/>
                                            <div class="tooltip-content">
                                                Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-24 mb-3 border-0">
                                    <div class="card-body py-3 ps-0 pb-2">
                                        <div class="d-flex gap-3 justify-content-sm-between">
                                            <div class="mb-2">
                                                <h6 class="">Director of Curriculum Development</h6>
                                                <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                        Australia </i> | <strong>Mar 2015 - Mar 2020</strong>
                                                </p>
                                            </div>

                                        </div>
                                        <p class="mb-0">As a Director of Curriculum Development at the Public
                                            Health
                                            Institute of Sydney, I have played a pivotal
                                            role in shaping the education landscape. My responsibilities include
                                            <span class="edux-read-more"> ... More</span></p>
                                    </div>

                                </div>

                                <div class="card card-24 border-0">
                                    <div class="card-body pt-0 ps-0">
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
                                            <span class="edux-read-more"> ... More</span></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="consultant-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path
                                    d="M16 4C12.145 4 9 7.145 9 11C9 13.379 10.21 15.484 12.031 16.75C7.926 18.352 5 22.352 5 27H7C7 22.602 10.191 18.926 14.375 18.156L15 20H17L17.625 18.156C21.809 18.926 25 22.602 25 27H27C27 22.352 24.074 18.352 19.969 16.75C21.789 15.484 23 13.379 23 11C23 7.145 19.855 4 16 4ZM16 6C18.773 6 21 8.227 21 11C21 13.773 18.773 16 16 16C13.227 16 11 13.773 11 11C11 8.227 13.227 6 16 6ZM15 21L14 27H18L17 21H15Z"
                                    fill="#0036E3"/>
                            </svg>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">Work in Progress (0)
                                </button>
                            </li>
                            <span>|</span>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false"> Completed
                                    Projects (0)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"
                                            fill="#C8C5D4"/>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                 aria-labelledby="home-tab" tabindex="0">
                                <div class="consultant-work-b">
                                    <h4>Development of Innovative Public Health Curriculum</h4>
                                    <h5>Public Health Institute of Sydney, Sydney, Australia <strong>| 2015 -
                                            Present</strong></h5>
                                    <p>I led a groundbreaking project in collaboration with Public Health
                                        Institute of Sydney to develop an innovative public health curriculum.
                                        This project aimed to revamp the university's existing curriculum to
                                        align with the latest research, pedagogical trends, and industry
                                        demands. Key highlights of this project included:</p>
                                    <p>Conducting a comprehensive needs assessment to identify gaps in the
                                        current curriculum and the evolving requirements of the public health
                                        field.</p>
                                    <p>Collaborating with a team of subject matter experts to design a
                                        competency-based curriculum that emphasised practical skills and
                                        interdisciplinary learning.</p>
                                </div>
                                <div class="consultant-work-b">
                                    <h4>Comparative Analysis of Public Health Curricula</h4>
                                    <h5> International Public Health Education Consortium <strong>| 2018 -
                                            Present</strong></h5>
                                    <p>In this role, I contributed to the advancement of public health education
                                        and curriculum development by:</p>
                                    <p>Collaborating with a diverse team of international researchers to collect
                                        and analyse data from a wide range of universities and public health
                                        programs. Evaluating curriculum structures, content, pedagogical
                                        approaches, and assessment methods to identify commonalities,
                                        differences, and best practices. Conducting surveys and interviews with
                                        faculty members and students to gather
                                        qualitative insights into the effectiveness of various curricular
                                        models.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                 aria-labelledby="profile-tab" tabindex="0">
                                <div class="consultant-work-b">
                                    <h4>Development of Innovative Public Health Curriculum</h4>
                                    <h5>Public Health Institute of Sydney, Sydney, Australia <strong>| 2015 -
                                            Present</strong></h5>
                                    <p>I led a groundbreaking project in collaboration with Public Health
                                        Institute of Sydney to develop an innovative public health curriculum.
                                        This project aimed to revamp the university's existing curriculum to
                                        align with the latest research, pedagogical trends, and industry
                                        demands. Key highlights of this project included:</p>
                                    <p>Conducting a comprehensive needs assessment to identify gaps in the
                                        current curriculum and the evolving requirements of the public health
                                        field.</p>
                                    <p>Collaborating with a team of subject matter experts to design a
                                        competency-based curriculum that emphasised practical skills and
                                        interdisciplinary learning.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="consultant-work mb-5">

                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path
                                    d="M23 2L24.593 5L28 5.414L25.5 7.667L26 11L23 9.125L20 11L20.5 7.667L18 5.414L21.5 5L23 2Z"
                                    fill="#0036E3"/>
                                <path
                                    d="M22.7201 13.2477L20.7821 12.7497C20.4347 14.0879 19.6985 15.2932 18.6664 16.2132C17.6344 17.1332 16.3528 17.7267 14.9836 17.9186C13.6144 18.1106 12.219 17.8925 10.9737 17.2918C9.72846 16.691 8.68917 15.7347 7.98715 14.5436C7.28514 13.3525 6.9519 11.9801 7.02954 10.5996C7.10718 9.21923 7.59222 7.8928 8.42337 6.78792C9.25452 5.68305 10.3945 4.8493 11.6993 4.39201C13.0041 3.93473 14.4151 3.87442 15.7541 4.21871L16.2531 2.28171C14.3011 1.77396 12.2351 1.93739 10.3871 2.74572C8.53923 3.55405 7.01683 4.96032 6.06471 6.73842C5.11258 8.51652 4.78606 10.5632 5.13764 12.5492C5.48922 14.5353 6.49848 16.3455 8.00313 17.6887V29.9987L14.0031 25.9987L20.0031 29.9987V17.7067C21.3313 16.523 22.2771 14.9708 22.7201 13.2477ZM18.0031 26.2617L14.0031 23.5947L10.0031 26.2617V19.0487C11.2442 19.6722 12.6136 19.9973 14.0024 19.9984C15.3913 19.9994 16.7612 19.6763 18.0031 19.0547V26.2617Z"
                                    fill="#0036E3"/>
                            </svg>
                            <h3 class="h5 mb-0">Portfolio</h3>
                            <button class="icon-btn">
                                <x-icon.info fill="#C8C5D4"/>
                            </button>
                        </div>


                        <div class="mt-4">
                            <div class="owl-carousel portfolioCaousel">
                                <div class="portfolio__card">
                                    <figure class="position-relative">
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
                                            class="img-fluid rounded" alt="Portfolio Thumbnail">
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
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/port2.jpg') }}"
                                            class="img-fluid rounded" alt="Portfolio Thumbnail">
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
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
                                            class="img-fluid rounded" alt="Portfolio Thumbnail">
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
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
                                            class="img-fluid rounded" alt="Portfolio Thumbnail">
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
                                        <img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
                                            class="img-fluid rounded" alt="Portfolio Thumbnail">
                                    </figure>
                                    <h4 class="fs-6 fw-medium title">
                                        <a href="#">Comparative Analysis of Public Health Curricula</a>
                                    </h4>
                                    <div class="tags">
                                        <span>Public Health</span>
                                        <span>Infectious Diseases</span>
                                    </div>
                                </div>
                            </div><!--.//carousel-->
                        </div>


                    </div> <!-- Consultant work-->


                    <div class="consultant-testimonial">
                        <h3 class="mb-1"><img
                                src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}"></img>Rating
                            and Review
                            <button class="icon-btn">
                                <x-icon.info fill="#C8C5D4"/>
                            </button>
                        </h3>
                        <div class="star-ratings">
                            <x-icon.star-fill/>
                            <x-icon.star-fill/>
                            <x-icon.star-fill/>
                            <x-icon.star-fill/>
                            <x-icon.star-fill/>
                        </div>

                        <div class="testimonial-text">
                            <p>Prof. Michael Kassiou played a pivotal role in the development of our university
                                curriculum. His expertise, creativity, and dedication to ensuring our program
                                met the highest standards were truly outstanding. We are grateful for his
                                contributions and highly recommend his services to any educational
                                institution.</p>
                            <div class="testimonial-block">
                                <div class="testimonial-img">
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                </div>
                                <div class="testimonial-con">
                                    <h4>Prof. David Smith</h4>
                                    <p>Dean | School of Business | Sydney Islamic Business School</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text testimonialnone">
                            <div class="star-ratings mb-4">
                                <x-icon.star-fill/>
                                <x-icon.star-fill/>
                                <x-icon.star-fill/>
                                <x-icon.star-fill/>
                                <x-icon.star-fill/>
                            </div>
                            <p>Prof. Michael Kassiou played a pivotal role in the development of our university
                                curriculum. His expertise, creativity, and dedication to ensuring our program
                                met the highest standards were truly outstanding. We are grateful for his
                                contributions and highly recommend his services to any educational
                                institution.</p>
                            <div class="testimonial-block">
                                <div class="testimonial-img">
                                    <img
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                </div>
                                <div class="testimonial-con">
                                    <h4>Prof. David Smith</h4>
                                    <p>Dean | School of Business | Sydney Islamic Business School</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-button">
                            <a href="#">More Review & Rating
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24" fill="none">
                                    <path
                                        d="M13.4437 11.9976L8.84375 7.39758L9.89758 6.34375L15.5514 11.9976L9.89758 17.6514L8.84375 16.5976L13.4437 11.9976Z"
                                        fill="#0036E3"/>
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
                <!-- page Content end here -->

            </div>
        </div>
    </section>
@endsection


@push('bottom_scripts')
    <!-- Expert profile Portfolio slide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".portfolioCaousel").owlCarousel({
            items: 3,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            smartSpeed: 550,
            loop: false,
            margin: 20,
            nav: true,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {items: 1},
                600: {items: 2},
                992: {items: 3},
                1200: {items: 3}
            },

        });

    </script>
@endpush

