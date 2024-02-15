@extends('frontend.layouts.figma', ['header' => 'expert'])
@section('content')
@vite('resources/default/css/expert-profile.css')


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<div class="find-consultant-details">
      <div class="container profile__page edux-profile-page">
        <div class="edux-billing-method-area">
        <div class="col">
        <div class="sidebar-layout left-sidebar-layout find-projects-layout">
        <div class="page-sidebar">
                    <div class="profile-widget user-bio-widget">
                        <div class="user-profile-picture">
                            <img src="{{ asset('assets/frontend/img/Mask-img1.png') }}">
                            <button>Edit</button>
                        </div>
                        <div class="user-profile-info">
                            <h3 class="h6">Professor Michael Kassiou</h3>
                            <p class="text-primary">Public Health</p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                            <x-icon.location  fill="#191D24" fill-opacity="0.5"  width="25" height="24"/>
                                <sapn> Sydney, Australia</sapn>
                            </p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                            <x-icon.clock fill="#191D24"  width="25" height="24"/>
                                <span> 10.15am AEST</span>
                            </p>

                            <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                              Invite to Project
                            </button>
                              <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                              <x-icon.message-line fill="#0036E3" width="25" height="24"/>
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

                        <div class="user-profile-skills">
                            <ul>
                                <li>Public Health</li>
                                <li>Infectious Diseases</li>
                                <li>Curriculum Development</li>
                                <li>Educational Assessment</li>
                                <li>+5 More</li>
                            </ul>
                        </div>
                    </div>

                    <div class="profile-widget user-education-widget">
                        <h4 class="widget-title">Education </h4>
                        <div class="widget-content">
                            <div class="user-education-box-item edux-border-bottom">
                                <p class="text-sm fw-medium mt-1 mb-0">PhD in Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1"> <strong>1995 - 2000</strong> </p>
                            </div>
                            <div class="user-education-box-item edux-border-bottom">
                                <p class="text-sm fw-medium mt-1 mb-0">Master’s in Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1"> <strong>1993 -1995</strong> </p>
                            </div>
                            <div class="user-education-box-item mb-0">
                                <p class="text-sm fw-medium mt-1 mb-0">Bachelor in Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1"> <strong>1989 - 1993</strong> </p>
                            </div>

                            <div class="user-education-box-item mb-0 mt-4">
                                <p class="text-lg fw-medium mt-2 mb-0 edux-social"> <a href="#"><x-icon.logo-linkedin fill="#0036E3"/> LinkedIn</a> </p>
                                <p class="text-lg fw-medium mt-3 mb-0 edux-social"> <a href="#"><x-icon.briefcase fill="#0036E3"/> Work Profile</a> </p>
                                <p class="text-lg fw-medium mt-3 mb-0 edux-social"> <a href="#"><x-icon.briefcase fill="#0036E3"/> Google Scholar </a> </p>
                            </div>
                        </div>
                    </div>

                </div>


              <div class="page-content">

                <div class="consultant-details border-0 p-0 shadow-none">
                  <div class="consultant-details-left">
                    <h3 class="d-inline-flex align-items-center">
                      <span>About</span>
                    </h3>
                  </div>
                  <p>Prof. Michael is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services. Holding a PhD in Curriculum and Instruction, Prof. Michael has dedicated expertise in designing innovative curricula, enhancing student engagement, and conducting research on educational best practices particularly in public health education. With a background in curriculum coordination, consultation, and a strong commitment to education, Prof. Michael has made significant contributions to the field. <a href="#" class="edux-read-more">More</a></p>
                </div>



                <div class="consultant-prof edux-consultant-prof card card-24">

              <div class="d-flex gap-2 align-items-center">
              <x-icon.briefcase-time fill="#0036E3"/>
                    <h3 class="h5 mb-0">Consultation</h3>
                    <button class="icon-btn">
                        <x-icon.info fill="#C8C5D4"/>
                    </button>
                </div>
                <div class="consultant-prof1 card-body border-0 edux-border-bottom pt-3">
                  <div class="row">

                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt1.jpg') }}"></img>
                        <button class="btn btn-primary btn-md w-100 mt-2" data-bs-toggle="modal" data-bs-target="#bookConsultation">Book Now</button>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <h6>Architecture history</h6>
                        <strong><p>$120/1 hrs</p></strong>
                        <div class="profp1"><p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p></div>
                        <div class="user-profile-skills">
                            <ul>
                                <li>Accreditation Documentation</li>
                                <li>Accreditation Process</li>
                                <li>Educational Expertise</li>
                                <li>Instructionḁl Design</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="consultant-prof1 card-body border-0">
                  <div class="row">

                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt1.jpg') }}"></img>
                        <button class="btn btn-primary btn-md w-100 mt-2"  data-bs-toggle="modal" data-bs-target="#bookConsultation">Book Now</button>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <h6>Architecture history</h6>
                        <strong><p>$120/1 hrs</p></strong>
                        <div class="profp1"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p></div>
                        <div class="user-profile-skills">
                            <ul>
                                <li>Accreditation Documentation</li>
                                <li>Accreditation Process</li>
                                <li>Educational Expertise</li>
                                <li>Instructionḁl Design</li>
                            </ul>
                        </div>
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
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
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
                                                <p class="mb-0">As a Director of Curriculum Development at the Public Health
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


                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.user-tie/>
                                                <h3 class="h5 mb-0 current-project-active">Current Project</h3>
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card card-24 mb-3 border-0">
                                            <div class="card-body py-3 ps-0 pb-2">
                                                <div class="d-flex gap-3 justify-content-sm-between">
                                                    <div class="mb-2">
                                                        <h6 class=""> Public Health Institute of Sydney, Sydney, Australia</h6>
                                                        <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                                Australia </i> | <strong>2015 - Present</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>I led a groundbreaking project in collaboration with Public Health Institute of Sydney to develop an innovative public health curriculum. This project aimed to revamp the university's existing curriculum to align with the latest research, pedagogical trends, and industry demands. Key highlights of this project included:</p>
                                                <p>Conducting a comprehensive needs assessment to identify gaps in the current curriculum and the evolving requirements of the public health field.</p>
                                                <p>Collaborating with a team of subject matter experts to design a competency-based curriculum that emphasised practical skills and interdisciplinary learning.</p>
                                            </div>

                                        </div>

                                        <div class="card card-24 border-0">
                                            <div class="card-body pt-0 ps-0">
                                                <div class="d-flex gap-3 justify-content-sm-between">
                                                    <div class="mb-2">
                                                        <h6 class="">International Public Health Education Consortium</h6>
                                                        <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                                Australia </i> | <strong>2018- Present</strong>
                                                        </p>
                                                    </div>

                                                </div>
                                                <p>In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                                                <p>
                                                  Collaborating with a diverse team of international researchers to collect and analyse data from a wide range of universities and public health programs. Evaluating curriculum structures, content, pedagogical approaches, and assessment methods to identify commonalities, differences, and best practices. Conducting surveys and interviews with faculty members and students to gather
                                                  qualitative insights into the effectiveness of various curricular models.
                                                </p>
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
                                                <h3 class="h5 mb-0">Previous Projects (0)</h3>
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card card-24 mb-3 border-0">
                                            <div class="card-body py-3 ps-0 pb-2">
                                                <div class="d-flex gap-3 justify-content-sm-between">
                                                    <div class="mb-2">
                                                        <h6 class=""> Public Health Institute of Sydney, Sydney, Australia</h6>
                                                        <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                                Australia </i> | <strong>2015 - Present</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>I led a groundbreaking project in collaboration with Public Health Institute of Sydney to develop an innovative public health curriculum. This project aimed to revamp the university's existing curriculum to align with the latest research, pedagogical trends, and industry demands. Key highlights of this project included:</p>
                                                <p>Conducting a comprehensive needs assessment to identify gaps in the current curriculum and the evolving requirements of the public health field.</p>
                                                <p>Collaborating with a team of subject matter experts to design a competency-based curriculum that emphasised practical skills and interdisciplinary learning.</p>
                                            </div>

                                        </div>

                                        <div class="card card-24 border-0">
                                            <div class="card-body pt-0 ps-0">
                                                <div class="d-flex gap-3 justify-content-sm-between">
                                                    <div class="mb-2">
                                                        <h6 class="">International Public Health Education Consortium</h6>
                                                        <p class="mb-0"><i> Public Health Institute of Sydney, Sydney,
                                                                Australia </i> | <strong>2018- Present</strong>
                                                        </p>
                                                    </div>

                                                </div>
                                                <p>In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                                                <p>
                                                  Collaborating with a diverse team of international researchers to collect and analyse data from a wide range of universities and public health programs. Evaluating curriculum structures, content, pedagogical approaches, and assessment methods to identify commonalities, differences, and best practices. Conducting surveys and interviews with faculty members and students to gather
                                                  qualitative insights into the effectiveness of various curricular models.
                                                </p>
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
                                            <x-icon.listening fill="#0036E3"/>
                                                <h3 class="h5 mb-0">Conferences and Media Interview</h3>
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card card-24 mb-3 border-0">
                                            <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                              <p class="mb-2"><a href="#">Front Row & On the Mic: Climate Change Summit Highlights & Media Conversations
                                              with Activists</a></p>
                                              <p class="mb-2">Public Health Institute of Sydney</p>

                                                <div class="user-profile-skills">
                                                    <ul>
                                                    <li>Conference</li>
                                                    </ul>
                                                  </div>
                                            </div>

                                            <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                              <p class="mb-2"><a href="#">Mic Drop Moments: Elon Musk Unveils Bold Space Exploration Plans in Interview</a></p>
                                              <p class="mb-2">Public Health Institute of Sydney</p>

                                                <div class="user-profile-skills">
                                                    <ul>
                                                    <li>Conference</li>
                                                    </ul>
                                                  </div>
                                            </div>

                                            <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                              <p class="mb-2"><a href="#">Deep Dives & Hot Takes: Exploring AI Ethics at Industry Conference & Interview with Leading Expert</a></p>
                                              <p class="mb-2">Fox News</p>

                                                <div class="user-profile-skills">
                                                    <ul>
                                                    <li>Media</li>
                                                    </ul>
                                                  </div>
                                            </div>

                                            <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                              <p class="mb-2"><a href="#">Fireside Chats & Panel Discussions: Unveiling Cybersecurity Trends at DEF CON</a></p>
                                              <p class="mb-2">CNN</p>

                                                <div class="user-profile-skills">
                                                    <ul>
                                                    <li>Media</li>
                                                    </ul>
                                                  </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>




              <div class="consultant-work mb-5">

                <div class="d-flex gap-2 align-items-center">
                  <x-icon.batch width="32" height="32" fill="#0036E3"/>
                    <h3 class="h5 mb-0">Awards and Honors</h3>
                    <button class="icon-btn">
                        <x-icon.info fill="#C8C5D4"/>
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
                  </div><!--.//carousel-->
                </div>



              </div> <!-- Consultant work-->


              <div class="consultant-testimonial">
                <h3 class="mb-1"><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}"></img>Recommendation<button class="icon-btn">
                        <x-icon.info fill="#C8C5D4"/>
                    </button></h3>
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
                      <h4>Dr. Danial</h4>
                      <p>Dean | School of Business | Sydney Islamic Business School</p>
                    </div>
                  </div>
                </div>
                <div class="testimonial-button">
                  <a href="#">More Testimonial
                  <x-icon.chevron-right fill="#0036E3"/>
              </a>
                </div>
              </div>


              </div>
              <!-- page Content end here -->

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
                          <input type="file" style="visibility: hidden;"/>
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


        <!-- Modal : Add Work Experience-->
<div class="modal fade" id="bookConsultation" tabindex="-1" aria-labelledby="addConsultationLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg flat-modal">
    <div class="modal-content open-date-picker">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title pt-3 px-0" id="exampleModalLabel">Booking A Curriculum development</h5>
        <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-4">
        <div class="form-input-group form-input-has-icon ">
          <div class="icon-field-wrapper">
            <input name="skill" id="skill" class="form-input-field" wire:model="skill" placeholder="Total slot">
            <span class="form-input-icon edux-slot-count"> 3 </span>
          </div>
        </div>
        <div class="mb-40">
          <div class="available-schedule-slot mb-40">

            <x-form.flatpicker label="" inline="true" name="datepicker"/>

            <div class="slot-item-area">
              <h6>Wednesday, 15th Oct </h6>
              <div class="slot-item">
                <div class="single-slot">
                  <span>1:00 AM</span>
                </div>
                <div class="multi-slot">
                  <div class="single-slot slot-border">
                    <span>1:00 AM</span>
                  </div>
                  <div class="single-slot slot-fill">
                    <span>1:00 AM</span>
                  </div>
                </div>
                <div class="single-slot">
                  <span>3:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
                <div class="single-slot">
                  <span>4:00 AM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="edux-select-options position-relative d-none">
          <x-form.textarea label="Note" wire:model="bio" placeholder="Bio"> Select options </x-form.textarea>
          <span class="edux-total-select-count">0/200</span>
        </div>
        <div class="modal-footer px-0 pb-0 pt-3">
          <button type="button" class="btn btn-secondary edux-btn-cancel" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary eudx-btn-save">Book a Consultation</button>
          <button type="button" class="btn  eudx-btn-back d-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z" fill="#191D24" fill-opacity="0.7" />
            </svg> Back </button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--End Modal -->





@endsection


@push('bottom_scripts')
<!-- Expert profile Portfolio slide -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(".portfolioCaousel").owlCarousel({
        items: 3,
        autoplay:false,
        autoplayTimeout: 5500,
        autoplayHoverPause: true,
        smartSpeed: 550,
        loop: false,
        margin: 20,
        nav: true,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            992: { items: 3 },
            1200: { items: 3 }
        },

      });

    </script>
@endpush

