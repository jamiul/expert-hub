@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout client-profile">
                        <div class="page-sidebar">
                            {{-- Profile summary --}}
                            <livewire:profile.summary />
                            {{-- Education --}}
                            <livewire:profile.edit.education />
                        </div>
                        <div class="page-content">
                            {{-- Biography --}}
                            <livewire:profile.biography />
                            {{-- Experience --}}
                            <div class="page-block mt-40">
                                <livewire:profile.edit.experience />
                            </div>




<div class="consultant-prof edux-consultant-prof card card-24">

              <div class="d-flex gap-2 edux-add-modal-steps">
                <div class="edux-tool-tips">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M3.99998 18.9999V7.99993V18.6922V18.5913V18.9999ZM4.3077 20.4999C3.80257 20.4999 3.375 20.3249 3.025 19.9749C2.675 19.6249 2.5 19.1973 2.5 18.6922V8.30765C2.5 7.80252 2.675 7.37495 3.025 7.02495C3.375 6.67495 3.80257 6.49995 4.3077 6.49995H8.5V4.80768C8.5 4.30256 8.675 3.875 9.025 3.525C9.375 3.175 9.80257 3 10.3077 3H13.6923C14.1974 3 14.625 3.175 14.975 3.525C15.325 3.875 15.5 4.30256 15.5 4.80768V6.49995H19.6923C20.1974 6.49995 20.625 6.67495 20.975 7.02495C21.325 7.37495 21.5 7.80252 21.5 8.30765V12.5442C21.2705 12.3852 21.0323 12.2474 20.7855 12.1307C20.5387 12.0141 20.2769 11.9102 20 11.8192V8.30765C20 8.2179 19.9711 8.14417 19.9134 8.08647C19.8557 8.02877 19.782 7.99993 19.6923 7.99993H4.3077C4.21795 7.99993 4.14423 8.02877 4.08653 8.08647C4.02883 8.14417 3.99998 8.2179 3.99998 8.30765V18.6922C3.99998 18.7819 4.02883 18.8557 4.08653 18.9134C4.14423 18.9711 4.21795 18.9999 4.3077 18.9999H11.575C11.6186 19.2666 11.676 19.5233 11.7471 19.7701C11.8183 20.0169 11.9064 20.2601 12.0116 20.4999H4.3077ZM9.99998 6.49995H14V4.80768C14 4.71793 13.9711 4.6442 13.9134 4.5865C13.8557 4.5288 13.782 4.49995 13.6923 4.49995H10.3077C10.218 4.49995 10.1442 4.5288 10.0865 4.5865C10.0288 4.6442 9.99998 4.71793 9.99998 4.80768V6.49995ZM18 22.4999C16.7513 22.4999 15.6891 22.0621 14.8135 21.1865C13.9378 20.3108 13.5 19.2486 13.5 17.9999C13.5 16.7512 13.9378 15.6891 14.8135 14.8134C15.6891 13.9378 16.7513 13.5 18 13.5C19.2487 13.5 20.3109 13.9378 21.1865 14.8134C22.0621 15.6891 22.5 16.7512 22.5 17.9999C22.5 19.2486 22.0621 20.3108 21.1865 21.1865C20.3109 22.0621 19.2487 22.4999 18 22.4999ZM18.4423 17.8191V15.0576H17.5577V18.1807L19.65 20.273L20.2731 19.6499L18.4423 17.8191Z" fill="#0036E3"/>
                    </svg>
                        <h3 class="h5 mb-0">Consultation</h3>
                        <button class="icon-btn">
                            <x-icon.info fill="#C8C5D4"/>
                        </button>
                </div>

                     <button data-bs-toggle="modal" data-bs-target="#addConsultation" wire:click="$dispatch('modal.open', { component: 'profile.experience.create'})" class="icon-btn icon-btn-md border ">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                         <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#191D24"></path>
                        </svg>
                     </button>
                </div>
                <div class="consultant-prof1 card-body border-0 edux-border-bottom pt-3">
                  <div class="row">

                    <div class="col-md-3">
                      <div class="prof-img">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt1.jpg') }}"></img>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="prof-text">
                        <div class="edux-prof-text">
                            <h6>Architecture history</h6>
                                <button wire:click="$dispatch('modal.open', { component: 'profile.biography.edit', arguments: { profile: 2 }})" class="icon-btn icon-btn-md border ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M5.15425 19H6.39077L15.6504 9.74036L14.4139 8.50381L5.15425 17.7635V19ZM18.858 8.65576L15.4831 5.31158L16.787 4.00776C17.0806 3.71417 17.4376 3.56738 17.8581 3.56738C18.2786 3.56738 18.6356 3.71417 18.9292 4.00776L20.1465 5.22503C20.4401 5.51862 20.592 5.87053 20.6023 6.28078C20.6125 6.69103 20.4709 7.04295 20.1773 7.33653L18.858 8.65576ZM17.7735 9.75573L7.02922 20.5H3.6543V17.125L14.3985 6.38078L17.7735 9.75573ZM15.0274 9.11728L14.4139 8.50381L15.6504 9.74036L15.0274 9.11728Z" fill="#191D24"></path>
                                    </svg>
                                </button>
                        </div>
                        <div class="profp1"><p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p></div>
                        <div class="user-profile-skills edux-user-profile-skills">
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
                                        <div class="page-block-heading mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.quote-right />
                                                <h3 class="h5 mb-0">Reviews & Rating</h3>


                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4" />
                                                </button>
                                            </div>

                                        </div>

                                        <div class="card border-0 border-bottom rounded-0">
                                            <div class="card-body px-0">
                                                <div class="">
                                                    <p class="fst-italic">Prof. Michael Kassiou played a pivotal role in
                                                        the development of
                                                        our university curriculum. His expertise, creativity, and
                                                        dedication to ensuring our program met the highest standards
                                                        were truly outstanding. We are grateful for his contributions
                                                        and highly recommend his services to any educational
                                                        institution.</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img src="<?php echo e(asset('assets/frontend/img/chat-avatar.png')); ?>">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Dr. Danial</p>
                                                        <p class="text-sm mb-0">Dean | School of Business | EduEx
                                                            University </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
                    <p class="skill-suggestion">Suggestion skills:  <span>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></p>


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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.95573 14.9974C10.2474 14.9974 10.4939 14.8967 10.6953 14.6953C10.8967 14.4939 10.9974 14.2474 10.9974 13.9557C10.9974 13.6641 10.8967 13.4175 10.6953 13.2161C10.4939 13.0148 10.2474 12.9141 9.95573 12.9141C9.66406 12.9141 9.41754 13.0148 9.21615 13.2161C9.01476 13.4175 8.91406 13.6641 8.91406 13.9557C8.91406 14.2474 9.01476 14.4939 9.21615 14.6953C9.41754 14.8967 9.66406 14.9974 9.95573 14.9974ZM9.20573 11.7891H10.7474C10.7474 11.3307 10.7995 10.9696 10.9036 10.7057C11.0078 10.4418 11.303 10.0807 11.7891 9.6224C12.1502 9.26129 12.4349 8.91754 12.6432 8.59115C12.8516 8.26476 12.9557 7.8724 12.9557 7.41406C12.9557 6.63629 12.671 6.03906 12.1016 5.6224C11.5321 5.20573 10.8585 4.9974 10.0807 4.9974C9.28906 4.9974 8.6467 5.20573 8.15365 5.6224C7.66059 6.03906 7.31684 6.53906 7.1224 7.1224L8.4974 7.66406C8.56684 7.41406 8.72309 7.14323 8.96615 6.85156C9.2092 6.5599 9.58073 6.41406 10.0807 6.41406C10.5252 6.41406 10.8585 6.53559 11.0807 6.77865C11.303 7.0217 11.4141 7.28906 11.4141 7.58073C11.4141 7.85851 11.3307 8.11892 11.1641 8.36198C10.9974 8.60504 10.7891 8.83073 10.5391 9.03906C9.92795 9.58073 9.55295 9.99045 9.41406 10.2682C9.27517 10.546 9.20573 11.053 9.20573 11.7891ZM9.9974 18.3307C8.84462 18.3307 7.76129 18.112 6.7474 17.6745C5.73351 17.237 4.85156 16.6432 4.10156 15.8932C3.35156 15.1432 2.75781 14.2613 2.32031 13.2474C1.88281 12.2335 1.66406 11.1502 1.66406 9.9974C1.66406 8.84462 1.88281 7.76129 2.32031 6.7474C2.75781 5.73351 3.35156 4.85156 4.10156 4.10156C4.85156 3.35156 5.73351 2.75781 6.7474 2.32031C7.76129 1.88281 8.84462 1.66406 9.9974 1.66406C11.1502 1.66406 12.2335 1.88281 13.2474 2.32031C14.2613 2.75781 15.1432 3.35156 15.8932 4.10156C16.6432 4.85156 17.237 5.73351 17.6745 6.7474C18.112 7.76129 18.3307 8.84462 18.3307 9.9974C18.3307 11.1502 18.112 12.2335 17.6745 13.2474C17.237 14.2613 16.6432 15.1432 15.8932 15.8932C15.1432 16.6432 14.2613 17.237 13.2474 17.6745C12.2335 18.112 11.1502 18.3307 9.9974 18.3307Z" fill="#BABABA"/>
                            </svg>
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
                                    <p class="mb-1">The Eduexhub Service Fee Is 10%</p>
                                </div>
                                <div class="service-fee-input">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div>
                                            /hr
                                        </div>
                                        <div>
                                            <input type="text" class="input-field-control edux-platform-bg" placeholder="$0.00">
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
                                            <input type="text" class="input-field-control edux-platform-bg" placeholder="$0.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-40">
                            <h6 class="mb-2">What is the event time zone?</h6>
                            <p>Time zone for opening hours and new events. Your invitees will see your availability in their local time zone.</p>
                            <select name="" id="" class="input-field-control edux-timezoon">
                                <option value="">Europe/Australia</option>
                                <option value="">Dhaka/Asia</option>
                            </select>
                        </div>


                    <div class="mb-40">
                            <h6 class="mb-2">Set schedule
                                <div class="tooltip-wrapper bottom-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
  <path d="M9.95573 15.4974C10.2474 15.4974 10.4939 15.3967 10.6953 15.1953C10.8967 14.9939 10.9974 14.7474 10.9974 14.4557C10.9974 14.1641 10.8967 13.9175 10.6953 13.7161C10.4939 13.5148 10.2474 13.4141 9.95573 13.4141C9.66406 13.4141 9.41754 13.5148 9.21615 13.7161C9.01476 13.9175 8.91406 14.1641 8.91406 14.4557C8.91406 14.7474 9.01476 14.9939 9.21615 15.1953C9.41754 15.3967 9.66406 15.4974 9.95573 15.4974ZM9.20573 12.2891H10.7474C10.7474 11.8307 10.7995 11.4696 10.9036 11.2057C11.0078 10.9418 11.303 10.5807 11.7891 10.1224C12.1502 9.76129 12.4349 9.41754 12.6432 9.09115C12.8516 8.76476 12.9557 8.3724 12.9557 7.91406C12.9557 7.13629 12.671 6.53906 12.1016 6.1224C11.5321 5.70573 10.8585 5.4974 10.0807 5.4974C9.28906 5.4974 8.6467 5.70573 8.15365 6.1224C7.66059 6.53906 7.31684 7.03906 7.1224 7.6224L8.4974 8.16406C8.56684 7.91406 8.72309 7.64323 8.96615 7.35156C9.2092 7.0599 9.58073 6.91406 10.0807 6.91406C10.5252 6.91406 10.8585 7.03559 11.0807 7.27865C11.303 7.5217 11.4141 7.78906 11.4141 8.08073C11.4141 8.35851 11.3307 8.61892 11.1641 8.86198C10.9974 9.10504 10.7891 9.33073 10.5391 9.53906C9.92795 10.0807 9.55295 10.4905 9.41406 10.7682C9.27517 11.046 9.20573 11.553 9.20573 12.2891ZM9.9974 18.8307C8.84462 18.8307 7.76129 18.612 6.7474 18.1745C5.73351 17.737 4.85156 17.1432 4.10156 16.3932C3.35156 15.6432 2.75781 14.7613 2.32031 13.7474C1.88281 12.7335 1.66406 11.6502 1.66406 10.4974C1.66406 9.34462 1.88281 8.26129 2.32031 7.2474C2.75781 6.23351 3.35156 5.35156 4.10156 4.60156C4.85156 3.85156 5.73351 3.25781 6.7474 2.82031C7.76129 2.38281 8.84462 2.16406 9.9974 2.16406C11.1502 2.16406 12.2335 2.38281 13.2474 2.82031C14.2613 3.25781 15.1432 3.85156 15.8932 4.60156C16.6432 5.35156 17.237 6.23351 17.6745 7.2474C18.112 8.26129 18.3307 9.34462 18.3307 10.4974C18.3307 11.6502 18.112 12.7335 17.6745 13.7474C17.237 14.7613 16.6432 15.6432 15.8932 16.3932C15.1432 17.1432 14.2613 17.737 13.2474 18.1745C12.2335 18.612 11.1502 18.8307 9.9974 18.8307Z" fill="#BABABA"/>
</svg>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>
                            <p><a class="fw-medium text-decoration-underline" href="">Schedule Your Consultation</a>   (Max 5 schedule per day)</p>
                            <div class="available-schedule-input-wrapper edux-schedule-input mb-40">

                                <div class="available-time-select-col eudx-time-select">
                                <h6>Selected slot</h6>
                                    <ul class="edux-selected-slot">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133" viewBox="0 0 132 133" fill="none">
                        <g clip-path="url(#clip0_38_2)">
                            <path d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z" fill="#B3C1CF"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_38_2">
                                <rect width="132" height="132" fill="white" transform="translate(0 0.5)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p class="text-sm fst-italic my-1">
                    Max 2MB 500px 500px
                </p>
            </div>
            <div>
                <label for="upload-file" class="btn btn-outline-primary d-inline-flex align-items-center">
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
                                    businesses and individuals seeking expertise in curriculum development. <span class="edux-more"> More...</span></p>
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
                    <button type="button" class="btn btn-secondary edux-btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary eudx-btn-save">Save & Continue</button>
                    <button type="button" class="btn  eudx-btn-back d-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z" fill="#191D24" fill-opacity="0.7"/>
</svg> Back</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->


@endsection
