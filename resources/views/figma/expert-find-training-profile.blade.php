@extends('frontend.layouts.figma', ['header' => 'expert'])
@section('content')
@vite('resources/default/css/expert-profile.css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<div class="find-consultant-details">
      <div class="container profile__page">
        <div class="row g-0">
          <div class="col-md-4 ps-0">
            <div class="consultant-left shadow-none">
              <div class="consultant-left-block">
                <div class="profile__box rounded-circle overflow-hidden mx-auto position-relative">
                  <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile.png') }}" class="rounded-circle img-fluid"></img>
                  <label for="editProfilePic" class="position-absolute bottom-0 start-0 w-100 p-2 text-white fw-medium upload__btn">
                    <span>Edit</span>
                    <input type="file" name="editProfilePic" id="editProfilePic" class="opacity-0 w-0 h-0 position-absolute top-0 left-0">
                  </label>
                </div>
                <h3>Professor Michael Kassiou</h3>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="pe-3">
                    <p>Curriculum Expert</p>
                    <h5>Public Health</h5>
                  </div>
                  <button class="btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="consultant-left-sydney pb-3 mb-4 border-bottom-line position-relative">
                <ul>
                  <li>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.5017 11.8654C12.9992 11.8654 13.4246 11.6882 13.7778 11.3339C14.131 10.9795 14.3076 10.5536 14.3076 10.056C14.3076 9.55839 14.1305 9.133 13.7761 8.7798C13.4218 8.4266 12.9958 8.25 12.4983 8.25C12.0007 8.25 11.5753 8.42717 11.2221 8.7815C10.8689 9.13583 10.6923 9.56179 10.6923 10.0594C10.6923 10.557 10.8694 10.9824 11.2238 11.3356C11.5781 11.6888 12.0041 11.8654 12.5017 11.8654ZM12.5 19.5135C14.4564 17.7622 15.9535 16.0824 16.9913 14.474C18.0291 12.8657 18.548 11.457 18.548 10.2481C18.548 8.42498 17.9689 6.92627 16.8105 5.7519C15.6522 4.57753 14.2153 3.99035 12.5 3.99035C10.7846 3.99035 9.34771 4.57753 8.18938 5.7519C7.03105 6.92627 6.45188 8.42498 6.45188 10.2481C6.45188 11.457 6.97079 12.8657 8.0086 14.474C9.04644 16.0824 10.5436 17.7622 12.5 19.5135ZM12.5 21.5096C9.9833 19.3288 8.09613 17.2993 6.83843 15.4211C5.58075 13.5429 4.9519 11.8186 4.9519 10.2481C4.9519 7.94038 5.69838 6.07213 7.19133 4.64328C8.68426 3.21443 10.4538 2.5 12.5 2.5C14.5461 2.5 16.3156 3.21443 17.8086 4.64328C19.3015 6.07213 20.048 7.94038 20.048 10.2481C20.048 11.8186 19.4192 13.5429 18.1615 15.4211C16.9038 17.2993 15.0166 19.3288 12.5 21.5096Z" fill="#191D24" fill-opacity="0.5"/>
                    </svg>
                    <span>Sydney, Australia</span>
                  </li>
                  <li>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.4731 16.5269L16.5269 15.4731L12.75 11.6959V6.99998H11.25V12.3038L15.4731 16.5269ZM12.0016 21.5C10.6877 21.5 9.45268 21.2506 8.29655 20.752C7.1404 20.2533 6.13472 19.5765 5.2795 18.7217C4.42427 17.8669 3.74721 16.8616 3.24833 15.706C2.74944 14.5504 2.5 13.3156 2.5 12.0017C2.5 10.6877 2.74933 9.45268 3.248 8.29655C3.74667 7.1404 4.42342 6.13472 5.27825 5.2795C6.1331 4.42427 7.13834 3.74721 8.29398 3.24833C9.44959 2.74944 10.6844 2.5 11.9983 2.5C13.3122 2.5 14.5473 2.74933 15.7034 3.248C16.8596 3.74667 17.8652 4.42342 18.7205 5.27825C19.5757 6.1331 20.2527 7.13834 20.7516 8.29398C21.2505 9.44959 21.5 10.6844 21.5 11.9983C21.5 13.3122 21.2506 14.5473 20.752 15.7034C20.2533 16.8596 19.5765 17.8652 18.7217 18.7205C17.8669 19.5757 16.8616 20.2527 15.706 20.7516C14.5504 21.2505 13.3156 21.5 12.0016 21.5ZM12 20C14.2166 20 16.1041 19.2208 17.6625 17.6625C19.2208 16.1041 20 14.2166 20 12C20 9.78331 19.2208 7.89581 17.6625 6.33748C16.1041 4.77914 14.2166 3.99998 12 3.99998C9.78331 3.99998 7.89581 4.77914 6.33748 6.33748C4.77914 7.89581 3.99998 9.78331 3.99998 12C3.99998 14.2166 4.77914 16.1041 6.33748 17.6625C7.89581 19.2208 9.78331 20 12 20Z" fill="#191D24" fill-opacity="0.5"/>
                    </svg>
                    <span>10.15am  AEST</span>
                  </li>
                </ul>
              </div>

              <div class="consultant-l languages">
                <h3 class="d-flex align-items-center mb-2">
                  Languages
                  <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                    </svg>
                  </button>
                </h3>
                <p><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/language.svg') }}"></img>Proficient in English</p>
              </div>
              <div class="consultant-l expertise">
                <h3 class="d-flex align-items-center mb-2">
                  <span>Expertise</span>
                  <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                    </svg>
                  </button>
                </h3>
                <ul>
                  <li><a href="#">Public Health</a></li>
                  <li><a href="#">Infectious Diseases</a></li>
                  <li><a href="#">Curriculum Development</a></li>
                  <li><a href="#">Educational Assessment</a></li>
                  <li><a href="#">Research & Analysis</a></li>
                  <li><a href="#">Pedagogical Innovation</a></li>
                </ul>
              </div>
              <div class="consultant-l education">
                <h3 class="d-flex align-items-center mb-2">
                  <span>Education</span>
                  <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                    </svg>
                  </button>
                </h3>
                <p>PhD in Public Health, Infectious Diseases <span>Expert Gate University</span> 1995 - 2000</p>
                <p>Master’s in Public Health <span>Expert Gate University</span> 1993 - 1995</p>
                <p>Bachelor in Public Health <span>Expert Gate University</span> 1989 - 1993</p>
              </div>
            </div>
          </div>
          <div class="col-md-8 ps-0">
            <div class="consultant-right">
              <div class="consultant-d border-0 p-0 shadow-none">
                <div class="consultant-d-left">
                  <h3 class="d-inline-flex align-items-center">
                    <span>Biography</span>
                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                      </svg>
                    </button>
                  </h3>

                  <p class="d-inline-flex align-items-center">
                    <span>$200/hour</span>
                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                      </svg>
                    </button>
                  </p>
                </div>
                <p>Prof. Michael is an accomplished Curriculum Development Specialist with a distinguished career in education and a track record of providing consultation services. Holding a PhD in Curriculum and Instruction, Prof. Michael has dedicated expertise in designing innovative curricula, enhancing student engagement, and conducting research on educational best practices particularly in public health education. With a background in curriculum coordination, consultation, and a strong commitment to education, Prof. Michael has made significant contributions to the field. Prof. Michael's passion for improving educational outcomes is evident through numerous publications, professional memberships, and awards, making them a prominent figure in curriculum development, education research, and consultation services <a href="#">More</a></p>
              </div>

              <div class="consultation-with-area mt-5">

              <div class="card-body">
                      <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                          <div class="d-flex gap-2 align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M3.99998 18.9999V7.99993V18.6922V18.5913V18.9999ZM4.3077 20.4999C3.80257 20.4999 3.375 20.3249 3.025 19.9749C2.675 19.6249 2.5 19.1973 2.5 18.6922V8.30765C2.5 7.80252 2.675 7.37495 3.025 7.02495C3.375 6.67495 3.80257 6.49995 4.3077 6.49995H8.5V4.80768C8.5 4.30256 8.675 3.875 9.025 3.525C9.375 3.175 9.80257 3 10.3077 3H13.6923C14.1974 3 14.625 3.175 14.975 3.525C15.325 3.875 15.5 4.30256 15.5 4.80768V6.49995H19.6923C20.1974 6.49995 20.625 6.67495 20.975 7.02495C21.325 7.37495 21.5 7.80252 21.5 8.30765V12.5442C21.2705 12.3852 21.0323 12.2474 20.7855 12.1307C20.5387 12.0141 20.2769 11.9102 20 11.8192V8.30765C20 8.2179 19.9711 8.14417 19.9134 8.08647C19.8557 8.02877 19.782 7.99993 19.6923 7.99993H4.3077C4.21795 7.99993 4.14423 8.02877 4.08653 8.08647C4.02883 8.14417 3.99998 8.2179 3.99998 8.30765V18.6922C3.99998 18.7819 4.02883 18.8557 4.08653 18.9134C4.14423 18.9711 4.21795 18.9999 4.3077 18.9999H11.575C11.6186 19.2666 11.676 19.5233 11.7471 19.7701C11.8183 20.0169 11.9064 20.2601 12.0116 20.4999H4.3077ZM9.99998 6.49995H14V4.80768C14 4.71793 13.9711 4.6442 13.9134 4.5865C13.8557 4.5288 13.782 4.49995 13.6923 4.49995H10.3077C10.218 4.49995 10.1442 4.5288 10.0865 4.5865C10.0288 4.6442 9.99998 4.71793 9.99998 4.80768V6.49995ZM18 22.4999C16.7513 22.4999 15.6891 22.0621 14.8135 21.1865C13.9378 20.3108 13.5 19.2486 13.5 17.9999C13.5 16.7512 13.9378 15.6891 14.8135 14.8134C15.6891 13.9378 16.7513 13.5 18 13.5C19.2487 13.5 20.3109 13.9378 21.1865 14.8134C22.0621 15.6891 22.5 16.7512 22.5 17.9999C22.5 19.2486 22.0621 20.3108 21.1865 21.1865C20.3109 22.0621 19.2487 22.4999 18 22.4999ZM18.4423 17.8191V15.0576H17.5577V18.1807L19.65 20.273L20.2731 19.6499L18.4423 17.8191Z" fill="#0036E3"/>
                          </svg>
                              <h3 class="h5 mb-0">Consultations</h3>
                              <button class="icon-btn ">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path fill="#C8C5D4" d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"></path>
                              </svg>
                              </button>
                          </div>
                          <button wire:click="$dispatch('modal.open', { component: 'profile.experience.create'})" class="icon-btn icon-btn-md border ">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#191D24"></path>
                             </svg>
                          </button>
                      </div>
                  </div>
              </div>



              <div class="consultation-with-area mt-5">

              <div class="card-body">
                      <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                          <div class="d-flex gap-2 align-items-center">
                          <x-icon.icon-trainer/>
                              <h3 class="h5 mb-0">Training (1)</h3>
                              <x-icon.info  fill="#C8C5D4"/>
                          </div>
                          <a href="/figma/expert-create-training" class="edux-create-training-plus"> <x-icon.add width="20" height="20"/></a>
                      </div>

                    <div class="training-speaker-area">
                      <div class="training-speaker-title-area">
                        <h6>Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors</h6>
                        <div class="training-speaker-option">
                          <a href=""><span><x-icon.delete/></span></a>
                          <a href="#"><span><x-icon.edit/></span></a>
                        </div>
                      </div>

                      <div class="row border-0">
                          <div class="col-md-6">
                            <div class="expert-card training-expert-card">
                            <div class="expert-card-header mb-2">
                                <div class="expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src=" {{ asset('assets/frontend/img/consultant1.png') }}">
                                    </div>
                                </div> <!--expert-thumb-->
                                <div class="expert-info">
                                    <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                    <ul class="expert-meta">
                                        <li>Public Health</li>
                                        <li>Melbourne University</li>
                                        <li>Australia</li>
                                    </ul>




                                </div><!--expert-info-->


                            </div>

                            <div class="scholarship-details">
                                  <div class="custom-table text-sm">
                                      <div class="tr">
                                          <div class="td">Seminar Dates</div>
                                          <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Time & Location</div>
                                          <div class="td fw-medium">10.15am  AEST, Sydney, Australia</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Mode</div>
                                          <div class="td fw-medium">
                                            <a href="#" class="expert-tag offer-consultation-btn">
                                            <x-icon.video fill="#0036E3"/>
                                                  Live via Zoom
                                              </a>
                                          </div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Language</div>
                                          <div class="td fw-medium">English</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Category</div>
                                          <div class="td fw-medium">Research and Analysis</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Fee</div>
                                          <div class="td fw-medium">USD 995</div>
                                      </div>

                                  </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="expert-card training-expert-card">
                            <div class="expert-card-header mb-2">
                                <div class="expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src=" {{ asset('assets/frontend/img/consultant2.png') }}">
                                    </div>
                                </div> <!--expert-thumb-->
                                <div class="expert-info">
                                    <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                    <ul class="expert-meta">
                                        <li>Public Health</li>
                                        <li>Melbourne University</li>
                                        <li>Australia</li>
                                    </ul>
                                </div><!--expert-info-->

                            </div>
                            </div>
                          </div>
                      </div>

                    </div>

                    <div class="training-speaker-area">
                      <div class="training-speaker-title-area">
                        <h6>Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors</h6>
                        <div class="training-speaker-option">
                          <a href=""><span><x-icon.delete/></span></a>
                          <a href="#"><span><x-icon.edit/></span></a>
                        </div>
                      </div>

                      <div class="row border-0">
                          <div class="col-md-6">
                            <div class="expert-card training-expert-card">
                            <div class="expert-card-header mb-2">
                                <div class="expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src=" {{ asset('assets/frontend/img/consultant1.png') }}">
                                    </div>
                                </div> <!--expert-thumb-->
                                <div class="expert-info">
                                    <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                    <ul class="expert-meta">
                                        <li>Public Health</li>
                                        <li>Melbourne University</li>
                                        <li>Australia</li>
                                    </ul>




                                </div><!--expert-info-->


                            </div>

                            <div class="scholarship-details">
                                  <div class="custom-table text-sm">
                                      <div class="tr">
                                          <div class="td">Seminar Dates</div>
                                          <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Time & Location</div>
                                          <div class="td fw-medium">10.15am  AEST, Sydney, Australia</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Mode</div>
                                          <div class="td fw-medium">
                                            <a href="#" class="expert-tag offer-consultation-btn">
                                            <x-icon.video fill="#0036E3"/>
                                                  Live via Zoom
                                              </a>
                                          </div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Language</div>
                                          <div class="td fw-medium">English</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Category</div>
                                          <div class="td fw-medium">Research and Analysis</div>
                                      </div>
                                      <div class="tr">
                                          <div class="td">Training Fee</div>
                                          <div class="td fw-medium">USD 995</div>
                                      </div>

                                  </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="expert-card training-expert-card">
                            <div class="expert-card-header mb-2">
                                <div class="expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src=" {{ asset('assets/frontend/img/consultant2.png') }}">
                                    </div>
                                </div> <!--expert-thumb-->
                                <div class="expert-info">
                                    <h3 class="h6 expert-name mb-0">Professor Miles Esther</h3>
                                    <ul class="expert-meta">
                                        <li>Public Health</li>
                                        <li>Melbourne University</li>
                                        <li>Australia</li>
                                    </ul>
                                </div><!--expert-info-->

                            </div>
                            </div>
                          </div>
                      </div>

                    </div>

                  </div>
              </div>

              <div class="consultant-prof">
                <div class="consultant-prof1">
                  <div class="row">
                    <h3 class="d-flex align-items-center">
                      <span>Book Expert for Consultation</span>
                      <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                        </svg>
                      </button>
                    </h3>
                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt1.jpg') }}"></img>
                        <h4>Prof. Michael</h4>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <div class="prof-expart">
                          <ul>
                            <li>Expertise:</li>
                            <li><a href="#">Public Health</a></li>
                            <li><a href="#">Curriculum Development</a></li>
                          </ul>
                          <p>$120/30mins</p>
                        </div>
                        <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span></div>
                        <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="consultant-prof1">
                  <div class="row">
                    <h3 class="d-flex align-items-center">
                      <span>Book Expert for Consultation</span>
                      <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                        </svg>
                      </button>
                    </h3>
                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"></img>
                        <h4>Prof. Michael</h4>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <div class="prof-expart">
                          <ul>
                            <li>Expertise:</li>
                            <li><a href="#">Public Health</a></li>
                            <!-- <li><a href="#">Curriculum Development</a></li> -->
                          </ul>
                          <p>$120/30mins</p>
                        </div>
                        <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span></div>
                        <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="consultant-prof1">
                  <div class="row">
                    <h3 class="d-flex align-items-center">
                      <span>Book Expert for TV Interview</span>
                      <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                        </svg>
                      </button>
                    </h3>
                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt3.jpg') }}"></img>
                        <h4>Prof. Michael</h4>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <div class="prof-expart">
                          <ul>
                            <li>Expertise:</li>
                            <li><a href="#">Public Health</a></li>
                            <!-- <li><a href="#">Curriculum Development</a></li> -->
                          </ul>
                          <!-- <p>$120/30mins</p> -->
                        </div>
                        <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span></div>
                        <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="consultant-work">
                <h3>
                  <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img>
                  <span>Work Experience</span>
                  <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#WorkExperienceForm" data-bs-whatever="@mdo">
                    <i class="fa-solid fa-plus"></i>
                  </button>
                </h3>
                <div class="consultant-work-b">
                  <h4 class="d-flex align-items-center">
                    <span>Director of Curriculum Development</span>
                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                      </svg>
                    </button>
                  </h4>
                  <h5>Public Health Institute of Sydney, Sydney, Australia      <strong>|   2020 - Present</strong></h5>
                  <p>As a Director of Curriculum Development at the Public Health Institute of Sydney, I have played a pivotal role in shaping the education landscape. My responsibilities include:</p>
                  <p>Collaborating with faculty members to design and implement innovative curricula for undergraduate and graduate programs in public health.</p>
                  <p>Conducting ongoing research to identify emerging trends and best practices in public health education.</p>
                  <p>Overseeing the development of assessment tools and methodologies to evaluate student learning outcomes.</p>
                </div>
                <div class="consultant-work-b">
                  <h4 class="d-flex align-items-center">
                    <span>Lead Researcher in Public Health Education</span>
                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                      </svg>
                    </button>
                  </h4>
                  <h5>Public Health Institute of Sydney, Sydney, Australia      <strong>|   2015 - 2020</strong></h5>
                  <p>In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                  <p>Leading research projects focused on identifying key factors contributing to student engagement and success in public health programs.</p>
                  <p>Collaborating with international partners to conduct comparative studies on  curriculum design and its impact on educational outcomes.</p>
                </div>
                <div class="consultant-work-b">
                  <h3 class="d-flex align-items-center">
                    <span>Consultant for Educational Institutions</span>
                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                      </svg>
                    </button>
                  </h3>
                  <h5>Self-Employed Curriculum Development Consultant <strong>|   2010 - 2015</strong></h5>
                  <p>As an independent curriculum development consultant, I provided expert guidance and support to various educational institutions, including universities, colleges, and K-12 schools. My contributions included</p>
                  <p>Collaborating with educational leaders to assess and redesign existing curricula to align with current pedagogical standards and student needs.</p>
                  <p>Conducting comprehensive educational assessments, including qualitative and  quantitative analysis, to inform curriculum improvements.</p>
                </div>
              </div>
              <div class="consultant-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work.svg') }}"></img>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Work in Progress</button>
                  </li>
                  <span>|</span>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Completed Projects</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="consultant-work-b">
                      <h4>Development of Innovative Public Health Curriculum</h4>
                      <h5>Public Health Institute of Sydney, Sydney, Australia <strong>|   2015 - Present</strong></h5>
                      <p>I led a groundbreaking project in collaboration with Public Health Institute of Sydney to develop an innovative public health curriculum. This project aimed to revamp the university's existing curriculum to align with the latest research, pedagogical trends, and industry demands. Key highlights of this project included:</p>
                      <p>Conducting a comprehensive needs assessment to identify gaps in the current curriculum and the evolving requirements of the public health field.</p>
                      <p>Collaborating with a team of subject matter experts to design a competency-based curriculum that emphasised practical skills and interdisciplinary learning.</p>
                    </div>
                    <div class="consultant-work-b">
                      <h4>Comparative Analysis of Public Health Curricula</h4>
                      <h5> International Public Health Education Consortium <strong>|   2018 - Present</strong></h5>
                      <p>In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                      <p>Collaborating with a diverse team of international researchers to collect and analyse data from a wide range of universities and public health programs. Evaluating curriculum structures, content, pedagogical approaches, and assessment methods to identify commonalities, differences, and best practices. Conducting surveys and interviews with faculty members and students to gather
                        qualitative insights into the effectiveness of various curricular models.
                      </p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="consultant-work-b">
                      <h4>Development of Innovative Public Health Curriculum</h4>
                      <h5>Public Health Institute of Sydney, Sydney, Australia <strong>|   2015 - Present</strong></h5>
                      <p>I led a groundbreaking project in collaboration with Public Health Institute of Sydney to develop an innovative public health curriculum. This project aimed to revamp the university's existing curriculum to align with the latest research, pedagogical trends, and industry demands. Key highlights of this project included:</p>
                      <p>Conducting a comprehensive needs assessment to identify gaps in the current curriculum and the evolving requirements of the public health field.</p>
                      <p>Collaborating with a team of subject matter experts to design a competency-based curriculum that emphasised practical skills and interdisciplinary learning.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="consultant-work mb-5">
                <h3>
                  <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img>
                  <span>Portfolio </span>
                  <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#addPortfolio" data-bs-whatever="@mdo">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.37504 10.625H4.58337V9.37504H9.37504V4.58337H10.625V9.37504H15.4167V10.625H10.625V15.4167H9.37504V10.625Z" fill="#0036E3"/>
                    </svg>
                  </button>
                </h3>
                <div class="mt-4">
                  <div class="owl-carousel portfolioCaousel">
                    <div class="portfolio__card">
                      <figure class="position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}" class="img-fluid rounded" alt="Portfolio Thumbnail">
                        <div class="hovered__action__box position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                            </svg>
                          </button>
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.08975 17.0833C5.67415 17.0833 5.31919 16.9362 5.02485 16.6418C4.73051 16.3475 4.58333 15.9925 4.58333 15.5769V5.00002H3.75V3.75004H7.49998V3.01288H12.5V3.75004H16.25V5.00002H15.4166V15.5769C15.4166 15.9979 15.2708 16.3542 14.9791 16.6458C14.6875 16.9375 14.3312 17.0833 13.9102 17.0833H6.08975ZM14.1666 5.00002H5.83331V15.5769C5.83331 15.6517 5.85735 15.7132 5.90544 15.7612C5.95352 15.8093 6.01496 15.8334 6.08975 15.8334H13.9102C13.9743 15.8334 14.0331 15.8067 14.0865 15.7532C14.1399 15.6998 14.1666 15.641 14.1666 15.5769V5.00002ZM7.83654 14.1667H9.08652V6.66669H7.83654V14.1667ZM10.9134 14.1667H12.1634V6.66669H10.9134V14.1667Z" fill="#0036E3"/>
                            </svg>
                          </button>
                        </div>
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
                        <div class="hovered__action__box position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                            </svg>
                          </button>
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.08975 17.0833C5.67415 17.0833 5.31919 16.9362 5.02485 16.6418C4.73051 16.3475 4.58333 15.9925 4.58333 15.5769V5.00002H3.75V3.75004H7.49998V3.01288H12.5V3.75004H16.25V5.00002H15.4166V15.5769C15.4166 15.9979 15.2708 16.3542 14.9791 16.6458C14.6875 16.9375 14.3312 17.0833 13.9102 17.0833H6.08975ZM14.1666 5.00002H5.83331V15.5769C5.83331 15.6517 5.85735 15.7132 5.90544 15.7612C5.95352 15.8093 6.01496 15.8334 6.08975 15.8334H13.9102C13.9743 15.8334 14.0331 15.8067 14.0865 15.7532C14.1399 15.6998 14.1666 15.641 14.1666 15.5769V5.00002ZM7.83654 14.1667H9.08652V6.66669H7.83654V14.1667ZM10.9134 14.1667H12.1634V6.66669H10.9134V14.1667Z" fill="#0036E3"/>
                            </svg>
                          </button>
                        </div>
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
                        <div class="hovered__action__box position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                            </svg>
                          </button>
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.08975 17.0833C5.67415 17.0833 5.31919 16.9362 5.02485 16.6418C4.73051 16.3475 4.58333 15.9925 4.58333 15.5769V5.00002H3.75V3.75004H7.49998V3.01288H12.5V3.75004H16.25V5.00002H15.4166V15.5769C15.4166 15.9979 15.2708 16.3542 14.9791 16.6458C14.6875 16.9375 14.3312 17.0833 13.9102 17.0833H6.08975ZM14.1666 5.00002H5.83331V15.5769C5.83331 15.6517 5.85735 15.7132 5.90544 15.7612C5.95352 15.8093 6.01496 15.8334 6.08975 15.8334H13.9102C13.9743 15.8334 14.0331 15.8067 14.0865 15.7532C14.1399 15.6998 14.1666 15.641 14.1666 15.5769V5.00002ZM7.83654 14.1667H9.08652V6.66669H7.83654V14.1667ZM10.9134 14.1667H12.1634V6.66669H10.9134V14.1667Z" fill="#0036E3"/>
                            </svg>
                          </button>
                        </div>
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
                        <div class="hovered__action__box position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                            </svg>
                          </button>
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.08975 17.0833C5.67415 17.0833 5.31919 16.9362 5.02485 16.6418C4.73051 16.3475 4.58333 15.9925 4.58333 15.5769V5.00002H3.75V3.75004H7.49998V3.01288H12.5V3.75004H16.25V5.00002H15.4166V15.5769C15.4166 15.9979 15.2708 16.3542 14.9791 16.6458C14.6875 16.9375 14.3312 17.0833 13.9102 17.0833H6.08975ZM14.1666 5.00002H5.83331V15.5769C5.83331 15.6517 5.85735 15.7132 5.90544 15.7612C5.95352 15.8093 6.01496 15.8334 6.08975 15.8334H13.9102C13.9743 15.8334 14.0331 15.8067 14.0865 15.7532C14.1399 15.6998 14.1666 15.641 14.1666 15.5769V5.00002ZM7.83654 14.1667H9.08652V6.66669H7.83654V14.1667ZM10.9134 14.1667H12.1634V6.66669H10.9134V14.1667Z" fill="#0036E3"/>
                            </svg>
                          </button>
                        </div>
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
                        <div class="hovered__action__box position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                            </svg>
                          </button>
                          <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.08975 17.0833C5.67415 17.0833 5.31919 16.9362 5.02485 16.6418C4.73051 16.3475 4.58333 15.9925 4.58333 15.5769V5.00002H3.75V3.75004H7.49998V3.01288H12.5V3.75004H16.25V5.00002H15.4166V15.5769C15.4166 15.9979 15.2708 16.3542 14.9791 16.6458C14.6875 16.9375 14.3312 17.0833 13.9102 17.0833H6.08975ZM14.1666 5.00002H5.83331V15.5769C5.83331 15.6517 5.85735 15.7132 5.90544 15.7612C5.95352 15.8093 6.01496 15.8334 6.08975 15.8334H13.9102C13.9743 15.8334 14.0331 15.8067 14.0865 15.7532C14.1399 15.6998 14.1666 15.641 14.1666 15.5769V5.00002ZM7.83654 14.1667H9.08652V6.66669H7.83654V14.1667ZM10.9134 14.1667H12.1634V6.66669H10.9134V14.1667Z" fill="#0036E3"/>
                            </svg>
                          </button>
                        </div>
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
              </div>

              <div class="consultant-testimonial">
                <h3><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}"></img>Testimonials</h3>
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
                  <a href="#">More Testimonials<i class="fa fa-angle-right"></i></a>
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





@push('js')
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
        navText: [
          '<i class="fa-solid fa-chevron-left"></i>',
          '<i class="fa-solid fa-chevron-right"></i>'
        ]
      });

    </script>
@endpush