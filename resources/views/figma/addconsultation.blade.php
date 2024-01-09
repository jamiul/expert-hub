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

                        <x-form.select label="Consultation Title" name="title">
                            <option value="">Architecture History</option>
                            <option value="Mr">Architecture</option>
                            <option value="Mrs">- Architecture History</option>
                            <option value="Dr">- Architectural Restoration</option>
                            <option value="Prof">Construction</option>
                            <option value="Prof">-Art</option>
                            <option value="Prof">-Animation</option>
                        </x-form.select>

                        <label class="form-input-label mt-4 mb-2 skilled-label">Skillsets</label>
                        <div class="form-group position-relative">
                            <div class="input-group">
                                <input class="form-control edux-skill-input" placeholder="Type the skills &amp; select" type="text">


                            </div>
                            <div class="pt-2 edux-single-skills">
                                <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center fw-normal">Architecture 1<img class="ps-2" src="http://127.0.0.1:8000/assets/frontend/img/close-i.png"></div>
                                <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center fw-normal">Architecture 2<img class="ps-2" src="http://127.0.0.1:8000/assets/frontend/img/close-i.png"></div>
                                <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center fw-normal">LMS 2<img class="ps-2" src="http://127.0.0.1:8000/assets/frontend/img/close-i.png"></div>
                            </div>
                                <p class="skill-suggestion">Suggestion skills:  <span>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></p>

                                    <div class="shadow bg-white position-absolute z-1" style="top:60px;">

                                    </div>
                        </div>



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
                            <select name="" id="" class="input-field-control">
                                <option value="">Europe/Australia</option>
                                <option value="">Dhaka/Asia</option>
                            </select>
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
                            <p><a class="fw-medium text-decoration-underline" href="">Schedule Your Consultation</a>   (Max 5 schedule per day)</p>
                            <div class="available-schedule-input-wrapper mb-40">

                                <div class="study-level">
                                    <div class="calendar-box position-relative">
                                        <input class="timesheet-date" type="text" id="dateInput" placeholder="23 Dec 2023">

                                        <div class="calendar" id="calendar">
                                        <div class="header">
                                            <button id="prevBtn">
                                            <i class="fa fa-angle-left"></i>
                                            </button>
                                            <h2 id="monthYear">Month Year</h2>
                                            <button id="nextBtn">
                                            <i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                        <div class="days" id="daysContainer"></div>
                                        </div>
                                    </div>
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



                        <div class="progress-step-content mt-40">
                        <h6 class="mb-2">Consultation Summery
                                <div class="tooltip-wrapper bottom-left">
                                    <i class="tooltip-icon"></i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>


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


                                  <div class="available-schedule-input-wrapper mb-40 available-schedule-upload">


                        <div class="consultant-upload">

                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133" viewBox="0 0 132 133" fill="none">
                            <path d="M81.048 68.8343C92.1752 72.0874 101.948 78.8589 108.903 88.134C115.858 97.4091 119.62 108.688 119.625 120.281H12.375C12.3774 108.688 16.1382 97.4072 23.0934 88.1315C30.0486 78.8559 39.8234 72.085 50.952 68.8343L66 91.4062L81.048 68.8343ZM92.8125 39.8438C92.8125 46.9549 89.9876 53.7747 84.9593 58.8031C79.931 63.8314 73.1111 66.6562 66 66.6562C58.8889 66.6562 52.069 63.8314 47.0407 58.8031C42.0124 53.7747 39.1875 46.9549 39.1875 39.8438C39.1875 32.7326 42.0124 25.9128 47.0407 20.8844C52.069 15.8561 58.8889 13.0313 66 13.0312C73.1111 13.0313 79.931 15.8561 84.9593 20.8844C89.9876 25.9128 92.8125 32.7326 92.8125 39.8438Z" fill="#B3C1CF"/>
                            </svg>
                            <p>Max 2MB 500px 500px</p>
                        </div>

                        <div class="image-upload-flat">


                            <label for="upload-file" class="text-center border-0 edux-label-upload">
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
  <path d="M11.5 16.1562V8.00625L8.9 10.6063L7.5 9.15625L12.5 4.15625L17.5 9.15625L16.1 10.6063L13.5 8.00625V16.1562H11.5ZM6.5 20.1562C5.95 20.1562 5.47917 19.9604 5.0875 19.5688C4.69583 19.1771 4.5 18.7063 4.5 18.1562V15.1562H6.5V18.1562H18.5V15.1562H20.5V18.1562C20.5 18.7063 20.3042 19.1771 19.9125 19.5688C19.5208 19.9604 19.05 20.1562 18.5 20.1562H6.5Z" fill="#0036E3"/>
</svg>
                                        </span>
                                <span class="fw-bold">Upload Photo</span>

                            </label>
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
                                    businesses and individuals seeking expertise in curriculum development.</p>
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

                                 <div class="study-level">
                                    <div class="calendar-box position-relative">
                                        <input class="timesheet-date" type="text" id="dateInput" placeholder="23 Dec 2023">

                                        <div class="calendar" id="calendar">
                                        <div class="header">
                                            <button id="prevBtn">
                                            <i class="fa fa-angle-left"></i>
                                            </button>
                                            <h2 id="monthYear">Month Year</h2>
                                            <button id="nextBtn">
                                            <i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                        <div class="days" id="daysContainer"></div>
                                        </div>
                                    </div>
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


<!-- Date time Picker js -->
<script>
      const daysContainer = document.getElementById("daysContainer");
      const prevBtn = document.getElementById("prevBtn");
      const nextBtn = document.getElementById("nextBtn");
      const monthYear = document.getElementById("monthYear");
      const dateInput = document.getElementById("dateInput");
      const calendar = document.getElementById("calendar");

      let currentDate = new Date();
      let selectedDate = null;

      function handleDayClick(day) {
        selectedDate = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth(),
          day
        );
        dateInput.value = selectedDate.toLocaleDateString("en-US");
        calendar.style.display = "none";
        renderCalendar();
      }

      function createDayElement(day) {
        const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");

        if (date.toDateString() === new Date().toDateString()) {
          dayElement.classList.add("current");
        }
        if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
          dayElement.classList.add("selected");
        }

        dayElement.textContent = day;
        dayElement.addEventListener("click", () => {
          handleDayClick(day);
        });
        daysContainer.appendChild(dayElement);
      }

      function renderCalendar() {
        daysContainer.innerHTML = "";
        const firstDay = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth(),
          1
        );
        const lastDay = new Date(
          currentDate.getFullYear(),
          currentDate.getMonth() + 1,
          0
        );

        monthYear.textContent = `${currentDate.toLocaleString("default", {
          month: "long"
        })} ${currentDate.getFullYear()}`;

        for (let day = 1; day <= lastDay.getDate(); day++) {
          createDayElement(day);
        }
      }

      prevBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
      });

      nextBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
      });

      dateInput.addEventListener("click", () => {
        calendar.style.display = "block";
        positionCalendar();
      });

      document.addEventListener("click", (event) => {
        if (!dateInput.contains(event.target) && !calendar.contains(event.target)) {
          calendar.style.display = "none";
        }
      });

      function positionCalendar() {
        const inputRect = dateInput.getBoundingClientRect();
        calendar.style.top = inputRect.bottom + "px";
        calendar.style.left = inputRect.left + "px";
      }
      window.addEventListener("resize", positionCalendar);
      renderCalendar();
    </script>
<!-- Date time Picker js -->
@endsection
