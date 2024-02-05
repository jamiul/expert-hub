@extends('frontend.layouts.figma', ['header' => 'expert'])
@section('content')
@vite('resources/default/css/expert-profile.css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<div class="find-consultant-details">
      <div class="container profile__page">
        <div class="row border-0">
          <div class="edux-training-form">


          <h5>Create Training</h5>
          <ul class="progress-bar-nav-horizontal">
                        <li class="done-item"><strong>Course Info </strong></li>
                        <li class="running-item"><strong> Course Schedule</strong></li>
                        <li><strong> Course Details </strong></li>
                        <li><strong> Summery </strong></li>
                    </ul>



          <div class="progress-step-content mt-20">

          <x-form.input type="text" label="Training title?" wire:model="type" placeholder="Type" value="Foundations of PLS-SEM Using SmartPLS 4"/>
          <x-form.input type="text" label="Training Fee" wire:model="type" placeholder="Type" value="$800"/>

          <div class="row my-3 gap-3">
              <div class="col-md-3 col-sm-6">
                  <div class="team-block edux-team-block">
                    <a href="#">
                          </a><div class="team-img position-relative"><a href="#">
                          <img src="{{ asset('assets/frontend/img/jon-kelly.png') }}" alt="person">
                          </a><a class="blog-close position-absolute"> <img class="" src="{{ asset('assets/frontend/img/blog-close.png') }}" alt="close"> </a> </div>
                          <div class="hire-text edux-hire-text">
                              <h6>Marvin McKinney</h6>
                              <p>Curriculum Expert <br> Public Health <br> Australia</p>
                          </div>
                        </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="team-block">
                      <div class="academic-single-item d-flex flex-column">
                          <div class="admin-add-more"> <a href="#"> <span class="material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#addConsultation">add</span> </a> </div>
                      </div>
                  </div>
              </div>
              </div>


            <x-form.select label="Training Category" wire:model="title">
                <option value="Training Category">Training Category</option>
                <option value="Training Category">Training Category</option>
                <option value="Training Category">Training Category</option>
                <option value="Training Category">Training Category</option>
                <option value="Training Category">Training Category</option>
            </x-form.select>


              <x-form.choice-static wire:model="titles" label="Partner Institutes" multiple>
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
              </x-form.choice-static>

              <x-form.choice-static wire:model="titles" label="Location" multiple>
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
              </x-form.choice-static>

              <div class="seminar-date-area">
              <x-form.flatpicker label="Seminar Date" inline="true" name="datepicker"/>
              </div>


             <div class="time-picker-area my-3">
                <input type="time" placeholder="Start Time">
             </div>

             <x-form.check wire:model="terms">
             Automatic Consideration
            </x-form.check>

            <x-form.select label="Select Training Mode" wire:model="title">
                <option value="Zoom Meeting">Zoom Meeting</option>
                <option value="Zoom Meeting">Zoom Meeting</option>
                <option value="Zoom Meeting">Zoom Meeting</option>
                <option value="Zoom Meeting">Zoom Meeting</option>
                <option value="Zoom Meeting">Zoom Meeting</option>
            </x-form.select>

              <x-form.input type="text" label="Zoom Link" wire:model="type" placeholder="Type" value="https://zoom.us/j/5551112222"/>

            <x-form.select label="Select Training Language" wire:model="title">
                <option value="French">French</option>
                <option value="English">English</option>
                <option value="English">English</option>
                <option value="English">English</option>
                <option value="French">French</option>
            </x-form.select>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Summary of the Course" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Course Outline" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Learning Outcomes" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Assessments" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Teaching and learning Activities" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Learning Recourses" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Prescribed Textbook and Software" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="step step-2 mb-4">
                <div class="main-form position-relative">
                    <x-form.textarea label="Recommended Reading" wire:model="bio" placeholder="Bio">
                    Write description
                    </x-form.textarea>
                    <span class="edux-word-count">0/200</span>
                </div>
            </div>

            <div class="create-training-button-area">
            <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">Cancel</button>
            <button class="btn btn-primary btn-md w-100">Preview</button>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
<!-- ===================== Work Experience Modal start Here ====================== -->


<!-- Modal : Add Work Experience-->
<div class="modal fade" id="addConsultation" tabindex="-1" aria-labelledby="addConsultationLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg flat-modal">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title pt-3 px-0 d-none" id="exampleModalLabel">Select Instructor</h5>
        <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-4 p-40">


      <x-form.choice-static wire:model="title" label="Select Instructor" :search="false">
            <option value="">Search expert by na...</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
        </x-form.choice-static>



                <div class="project-expert-card border-bottom edux-project-expert-card position-relative">
                    <div class="project-expert-thumb">
                        <div class="expert-thumb-box">
                            <img src="{{ asset('assets/frontend/img/expert1.png') }}"/>
                        </div>
                    </div>
                    <div class="project-expert-details">
                        <div class="expert-card-header">
                            <div class="expert-card-header-info eudx-expert-card-header-info">
                                <h6 class="h6 project-expert-name mb-0">Professor Miles
                                    Esther</h6>
                                <ul class="project-expert-meta mb-2">
                                    <li>Program Design</li>
                                    <li>Communication Studies</li>
                                    <li>USA</li>
                                </ul>
                                <div class="d-flex align-items-center mb-1">
                                    <div><strong class="fw-medium fw-medium-currency">$200 </strong>/ hr
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="expert-card-body">
                            <div class="tag-list eudx-tag-list">
                            <a href="#" class="expert-profile-tag offer-consultation-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 20.9422C11.5987 20.9422 11.2439 20.8364 10.9356 20.6249C10.6272 20.4134 10.4115 20.1358 10.2884 19.7922H9.99997C9.59101 19.7922 9.23877 19.6445 8.94327 19.349C8.64776 19.0534 8.5 18.7012 8.5 18.2923V15.0115C7.49103 14.4 6.69712 13.5801 6.11827 12.5519C5.53942 11.5237 5.25 10.423 5.25 9.24998C5.25 7.36794 5.90448 5.77243 7.21345 4.46345C8.52243 3.15448 10.1179 2.5 12 2.5C13.882 2.5 15.4775 3.15448 16.7865 4.46345C18.0955 5.77243 18.75 7.36794 18.75 9.24998C18.75 10.4436 18.4605 11.5493 17.8817 12.5673C17.3028 13.5852 16.5089 14.4 15.5 15.0115V18.2923C15.5 18.7012 15.3522 19.0534 15.0567 19.349C14.7612 19.6445 14.4089 19.7922 14 19.7922H13.7115C13.5884 20.1358 13.3727 20.4134 13.0644 20.6249C12.7561 20.8364 12.4013 20.9422 12 20.9422ZM9.99997 18.2923H14V17.3538H9.99997V18.2923ZM9.99997 16.4692H14V15.5H9.99997V16.4692ZM9.79997 14H11.4038V11.0884L9.26153 8.94613L10.1 8.10768L12 10.0077L13.9 8.10768L14.7384 8.94613L12.5961 11.0884V14H14.2C15.1 13.5666 15.8333 12.9291 16.4 12.0875C16.9666 11.2458 17.25 10.3 17.25 9.24998C17.25 7.78331 16.7416 6.54164 15.725 5.52498C14.7083 4.50831 13.4666 3.99998 12 3.99998C10.5333 3.99998 9.29164 4.50831 8.27497 5.52498C7.25831 6.54164 6.74997 7.78331 6.74997 9.24998C6.74997 10.3 7.03331 11.2458 7.59997 12.0875C8.16664 12.9291 8.89997 13.5666 9.79997 14Z" fill="#0036E3"/>
                            </svg>Offer Keynote Speaker</a>
                                <a href="#" class="expert-profile-tag">Communication Skills</a>
                                <a href="#" class="expert-profile-tag">Educational Research</a>
                                <a href="#" class="expert-profile-tag">+12 More</a>

                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn eudx-btn-addback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
                    </svg> Add expert </button>
                </div>

                <div class="project-expert-card border-bottom edux-project-expert-card position-relative">
                    <div class="project-expert-thumb">
                        <div class="expert-thumb-box">
                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                        </div>
                    </div>
                    <div class="project-expert-details">
                        <div class="expert-card-header">
                            <div class="expert-card-header-info eudx-expert-card-header-info">
                                <h6 class="h6 project-expert-name mb-0">Professor Miles
                                    Esther</h6>
                                <ul class="project-expert-meta mb-2">
                                    <li>Program Design</li>
                                    <li>Communication Studies</li>
                                    <li>USA</li>
                                </ul>
                                <div class="d-flex align-items-center mb-1">
                                    <div><strong class="fw-medium fw-medium-currency">$200 </strong>/ hr
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="expert-card-body">
                            <div class="tag-list eudx-tag-list">
                            <a href="#" class="expert-profile-tag offer-consultation-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 20.9422C11.5987 20.9422 11.2439 20.8364 10.9356 20.6249C10.6272 20.4134 10.4115 20.1358 10.2884 19.7922H9.99997C9.59101 19.7922 9.23877 19.6445 8.94327 19.349C8.64776 19.0534 8.5 18.7012 8.5 18.2923V15.0115C7.49103 14.4 6.69712 13.5801 6.11827 12.5519C5.53942 11.5237 5.25 10.423 5.25 9.24998C5.25 7.36794 5.90448 5.77243 7.21345 4.46345C8.52243 3.15448 10.1179 2.5 12 2.5C13.882 2.5 15.4775 3.15448 16.7865 4.46345C18.0955 5.77243 18.75 7.36794 18.75 9.24998C18.75 10.4436 18.4605 11.5493 17.8817 12.5673C17.3028 13.5852 16.5089 14.4 15.5 15.0115V18.2923C15.5 18.7012 15.3522 19.0534 15.0567 19.349C14.7612 19.6445 14.4089 19.7922 14 19.7922H13.7115C13.5884 20.1358 13.3727 20.4134 13.0644 20.6249C12.7561 20.8364 12.4013 20.9422 12 20.9422ZM9.99997 18.2923H14V17.3538H9.99997V18.2923ZM9.99997 16.4692H14V15.5H9.99997V16.4692ZM9.79997 14H11.4038V11.0884L9.26153 8.94613L10.1 8.10768L12 10.0077L13.9 8.10768L14.7384 8.94613L12.5961 11.0884V14H14.2C15.1 13.5666 15.8333 12.9291 16.4 12.0875C16.9666 11.2458 17.25 10.3 17.25 9.24998C17.25 7.78331 16.7416 6.54164 15.725 5.52498C14.7083 4.50831 13.4666 3.99998 12 3.99998C10.5333 3.99998 9.29164 4.50831 8.27497 5.52498C7.25831 6.54164 6.74997 7.78331 6.74997 9.24998C6.74997 10.3 7.03331 11.2458 7.59997 12.0875C8.16664 12.9291 8.89997 13.5666 9.79997 14Z" fill="#0036E3"/>
                            </svg>Offer Keynote Speaker</a>
                                <a href="#" class="expert-profile-tag">Communication Skills</a>
                                <a href="#" class="expert-profile-tag">Educational Research</a>
                                <a href="#" class="expert-profile-tag">+12 More</a>

                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn eudx-btn-addback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
                    </svg> Add expert </button>
                </div>

                <div class="project-expert-card border-bottom edux-project-expert-card position-relative">
                    <div class="project-expert-thumb">
                        <div class="expert-thumb-box">
                            <img src="{{ asset('assets/frontend/img/expert3.png') }}"/>
                        </div>
                    </div>
                    <div class="project-expert-details">
                        <div class="expert-card-header">
                            <div class="expert-card-header-info eudx-expert-card-header-info">
                                <h6 class="h6 project-expert-name mb-0">Professor Miles
                                    Esther</h6>
                                <ul class="project-expert-meta mb-2">
                                    <li>Program Design</li>
                                    <li>Communication Studies</li>
                                    <li>USA</li>
                                </ul>
                                <div class="d-flex align-items-center mb-1">
                                    <div><strong class="fw-medium fw-medium-currency">$200 </strong>/ hr
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="expert-card-body">
                            <div class="tag-list eudx-tag-list">
                            <a href="#" class="expert-profile-tag offer-consultation-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 20.9422C11.5987 20.9422 11.2439 20.8364 10.9356 20.6249C10.6272 20.4134 10.4115 20.1358 10.2884 19.7922H9.99997C9.59101 19.7922 9.23877 19.6445 8.94327 19.349C8.64776 19.0534 8.5 18.7012 8.5 18.2923V15.0115C7.49103 14.4 6.69712 13.5801 6.11827 12.5519C5.53942 11.5237 5.25 10.423 5.25 9.24998C5.25 7.36794 5.90448 5.77243 7.21345 4.46345C8.52243 3.15448 10.1179 2.5 12 2.5C13.882 2.5 15.4775 3.15448 16.7865 4.46345C18.0955 5.77243 18.75 7.36794 18.75 9.24998C18.75 10.4436 18.4605 11.5493 17.8817 12.5673C17.3028 13.5852 16.5089 14.4 15.5 15.0115V18.2923C15.5 18.7012 15.3522 19.0534 15.0567 19.349C14.7612 19.6445 14.4089 19.7922 14 19.7922H13.7115C13.5884 20.1358 13.3727 20.4134 13.0644 20.6249C12.7561 20.8364 12.4013 20.9422 12 20.9422ZM9.99997 18.2923H14V17.3538H9.99997V18.2923ZM9.99997 16.4692H14V15.5H9.99997V16.4692ZM9.79997 14H11.4038V11.0884L9.26153 8.94613L10.1 8.10768L12 10.0077L13.9 8.10768L14.7384 8.94613L12.5961 11.0884V14H14.2C15.1 13.5666 15.8333 12.9291 16.4 12.0875C16.9666 11.2458 17.25 10.3 17.25 9.24998C17.25 7.78331 16.7416 6.54164 15.725 5.52498C14.7083 4.50831 13.4666 3.99998 12 3.99998C10.5333 3.99998 9.29164 4.50831 8.27497 5.52498C7.25831 6.54164 6.74997 7.78331 6.74997 9.24998C6.74997 10.3 7.03331 11.2458 7.59997 12.0875C8.16664 12.9291 8.89997 13.5666 9.79997 14Z" fill="#0036E3"/>
                            </svg>Offer Keynote Speaker</a>
                                <a href="#" class="expert-profile-tag">Communication Skills</a>
                                <a href="#" class="expert-profile-tag">Educational Research</a>
                                <a href="#" class="expert-profile-tag">+12 More</a>

                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn eudx-btn-addback">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z" fill="white"/>
                    </svg> Add expert </button>
                </div>






        <div class="modal-footer px-0 pb-0 pt-3">
          <button type="button" class="btn btn-secondary edux-btn-cancel" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary eudx-btn-save d-none">Book a Consultation</button>
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


        <!-- ===================== Work Experience Modal start Here ====================== -->






@endsection



