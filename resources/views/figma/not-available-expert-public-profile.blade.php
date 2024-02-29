@extends('frontend.layouts.figma' , ['header' => 'expert'])
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
                              <h3>Course Curriculum Development</h3>
                              <div class="consultant-reviw">
                                    <ul class="mb-0">
                                      <li class="me-3">12 Ratings</li>
                                        <li> <a href="#">
                                        <x-icon.star-fill fill="#E9B911" width="16" height="15"/>
                                          </a>
                                        </li>
                                        <li> <a href="#">
                                        <x-icon.star-fill fill="#E9B911" width="16" height="15"/>
                                          </a>
                                        </li>
                                        <li> <a href="#">
                                        <x-icon.star-fill fill="#E9B911" width="16" height="15"/>
                                          </a>
                                        </li>
                                        <li> <a href="#">
                                        <x-icon.star-fill fill="#E9B911" width="16" height="15"/>
                                          </a>
                                        </li>
                                        <li> <a href="#">
                                        <x-icon.star-fill fill="#E9B911" width="16" height="15"/>
                                          </a>
                                        </li>
                                    </ul>
                                  </div>
                          </div>

                          <div class="edux-order-stream">
                            <x-icon.video fill="#0036E3"/>
                            <p class="mb-0"><strong>2</strong> Order</p>
                          </div>
                        </div>
                    </div>
                    <div class="prof-text mt-3">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
                        <div class="tag-list">

                                <a href="#" class="expert-profile-tag">Accreditation Documentation</a>
                                <a href="#" class="expert-profile-tag">Accreditation</a>
                                <a href="#" class="expert-profile-tag"> Research</a>
                                <a href="#" class="expert-profile-tag">Educational Expertise</a>
                                <a href="#"
                                   class="expert-profile-tag">Instructionḁl Design</a>
                                <a href="#" class="expert-profile-tag">Instructionḁl Design</a>
                                <a href="#" class="expert-profile-tag">Instructionḁl Design</a>
                                <a href="#" class="expert-profile-tag">Instructionḁl Design</a>

                                <a href="#" class="expert-profile-tag">+3 More</a>
                            </div>
                      </div>

                      <div class="edux-expert-card-area">
                      <h2 class="h5 fw-bold">Expert Profile</h5>

                <div class="project-expert-card p-0 border-0">

                <div class="eudx-project-expert-thumb">

                    <div class="project-expert-thumb">
                        <div class="expert-thumb-box">
                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
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
                                          <x-icon.star-fill/>
                                          <x-icon.star-fill/>
                                          <x-icon.star-fill/>
                                          <x-icon.star-fill/>
                                          <x-icon.star-fill/>
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
                                                <x-icon.user-tie/>
                                                <h3 class="h5 mb-0">Work Experience</h3>
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
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
                <x-icon.batch fill="#0036E3" width="32" height="32"/>
                    <h3 class="h5 mb-0">Portfolio</h3>
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
              <div class="consultant-testimonial border-0 p-0">
                <h3 class="mb-1"><x-icon.quote-right fill="#0036E3"/>Rating and Review</h3>
                <div class="star-ratings mt-3">
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
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
                <div class="testimonial-button d-flex justify-content-center ">
                  <a href="#">More Review & Rating  <x-icon.chevron-right fill="#0036E3"/> </a>
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
                    <!-- <h6>Scheduling</h6> -->
                          <!-- <div class="form-radio-option edux-radio-option-right">
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

                            </div> -->

                    <div class="edux-check-and-fund">
                        <!-- <p><a href="#">See more times</a>  </p> -->
                        <button class="btn btn-outline-primary btn-md w-100  btn-has-icon fw-bold">
                        <x-icon.message-line fill="#0036E3"/>
                        Book a Consultation
                            </button>
                        <button class="btn btn-primary btn-md w-100 mt-2">Continue</button>
                        
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

