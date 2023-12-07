@vite('resources/css/client-dashboard.css')
@vite('resources/css/experthire.css')
@vite('resources/default/css/expert-header.css')
@vite('resources/css/expert-custom.css')
<nav class="navbar navbar-expand-md expert__dashboard__nav position-relative">
   <div class="container-fluid algin-items-center mx-auto">
      <a class="navbar-brand edux-navbar-brand" href="/figma/client-dashboardhome">
         <img src="{{ asset('assets/frontend/img/logo.png') }}" />
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav align-items-center">
            <li class="nav-item edux-nav-padding">
               <a class="nav-link {{ request()->is('figma/client-dashboard') ? 'active' : '' }} position-relative" aria-current="page" href="/figma/client-dashboard">Projects
               </a>
            </li>
            <li class="nav-item edux-nav-padding">
               <a class="nav-link {{ request()->is('figma/client-dashboardexperthire') ? 'active' : '' }}" href="/figma/client-dashboardexperthire">Experts</a>
            </li>

            <li class="nav-item edux-nav-padding">
               <a class="nav-link {{ request()->is('figma/expert-clientaddpayment') ? 'active' : '' }}" href="/figma/client-clientaddpayment">Billing & Payments</a>
            </li>

            <li class="nav-item edux-nav-padding">
               <a class="nav-link {{ request()->is('figma/expert-passwordsecurity') ? 'active' : '' }} position-relative" aria-current="page" href="/figma/client-passwordsecurity">Settings</a>
            </li>
         </ul>

      </div>

      <div class="input-group search__box align-items-center">
         <input type="text" class="form-control border-0" aria-label="Text input with dropdown button" placeholder="I am looking for">
         <button class="btn border-0 border-start ps-3 pe-3 d-flex" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Project <span class="material-symbols-outlined">
            keyboard_arrow_down
            </span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end">
            <li>
               <a class="dropdown-item" href="#">My Projects</a>
            </li>
            <li>
               <a class="dropdown-item" href="#">Proposals</a>
            </li>
            <li>
               <a class="dropdown-item" href="#">All Contracts</a>
            </li>
            <li>
               <a class="dropdown-item" href="#">Save jobs</a>
            </li>
            <li>
               <a class="dropdown-item" href="#">Work Diary</a>
            </li>

         </ul>
         <button class="btn search__btn d-inline-flex justify-content-center align-items-center" type="button" id="button-addon2">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
         <path d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.14583 15.3708 4.8875 14.1125C3.62917 12.8542 3 11.3167 3 9.5C3 7.68333 3.62917 6.14583 4.8875 4.8875C6.14583 3.62917 7.68333 3 9.5 3C11.3167 3 12.8542 3.62917 14.1125 4.8875C15.3708 6.14583 16 7.68333 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8125 13.5625 12.6875 12.6875C13.5625 11.8125 14 10.75 14 9.5C14 8.25 13.5625 7.1875 12.6875 6.3125C11.8125 5.4375 10.75 5 9.5 5C8.25 5 7.1875 5.4375 6.3125 6.3125C5.4375 7.1875 5 8.25 5 9.5C5 10.75 5.4375 11.8125 6.3125 12.6875C7.1875 13.5625 8.25 14 9.5 14Z" fill="#191D24"/>
         </svg>
         </button>
      </div>

      <div class="setting-area d-inline-flex ps-3">
         <div class="dropdown">
            <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center position-relative" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/message.svg') }}" alt="message">
               <span class="badge rounded-pill text-white fw-bold position-absolute d-flex justify-content-center align-items-center">1 </span>
            </a>
            <div class="dropdown-menu message__dropdown bg-white border-0" aria-labelledby="messageDrop">
               <ul class="list-unstyled ps-0 mb-0 mess__list">
                  <li class="d-flex align-items-center">
                     <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="indicator status rounded-circle position-absolute"></span>
                     </figure>
                     <div class="caption">
                        <div class="d-flex">
                           <div class="left__box">
                              <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                              <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                           </div>
                           <div class="time__box fw-medium text-end fs-12">
                              <div class="d-block text-muted">5 mins ago</div>
                              <a href="#" class="rounded-pill detail__link transition">Details</a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('assets/frontend/img/message-profile.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="indicator status rounded-circle position-absolute"></span>
                     </figure>
                     <div class="caption">
                        <div class="d-flex">
                           <div class="left__box">
                              <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                              <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                           </div>
                           <div class="time__box fw-medium text-end fs-12">
                              <div class="d-block text-muted">5 mins ago</div>
                              <a href="#" class="rounded-pill detail__link transition">Details</a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('assets/frontend/img/message-profile3.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="indicator status rounded-circle position-absolute"></span>
                     </figure>

                     <div class="caption">
                        <div class="d-flex">
                           <div class="left__box">
                              <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                              <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                           </div>
                           <div class="time__box fw-medium text-end fs-12">
                              <div class="d-block text-muted">5 mins ago</div>
                              <a href="#" class="rounded-pill detail__link transition">Details</a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <figure class="mb-0 thumb__box position-relative">
                        <img src="{{ asset('assets/frontend/img/message-profile2.png') }}" class="rounded-circle object-fit-cover" width="48" height="48" alt="avatar">
                        <span class="indicator status rounded-circle position-absolute"></span>
                     </figure>

                     <div class="caption">
                        <div class="d-flex">
                           <div class="left__box">
                              <p class="mb-0 small fw-medium text-dark">Prof. Michael Kassiou</p>
                              <p class="mb-0 small text-muted desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ad unde exercitationem.</p>
                           </div>
                           <div class="time__box fw-medium text-end fs-12">
                              <div class="d-block text-muted">5 mins ago</div>
                              <a href="#" class="rounded-pill detail__link transition">Details</a>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <div class="text-center border-top footer__link">
                  <a href="#" class="d-inline-flex align-items-center small fw-medium text-decoration-none">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M7.61543 17.1153C7.36478 17.1153 7.15468 17.0305 6.98513 16.861C6.81558 16.6914 6.73081 16.4813 6.73081 16.2307V14.7307H19.1058L19.4231 15.0481V5.99998H20.9231C21.1737 5.99998 21.3838 6.08475 21.5534 6.2543C21.7229 6.42385 21.8077 6.63394 21.8077 6.88457V20.6537L18.2693 17.1153H7.61543ZM3.19238 16.2691V3.38463C3.19238 3.13398 3.27716 2.92388 3.44671 2.75433C3.61626 2.58478 3.82636 2.5 4.07701 2.5H16.5385C16.7891 2.5 16.9992 2.58478 17.1688 2.75433C17.3383 2.92388 17.4231 3.13398 17.4231 3.38463V11.8461C17.4231 12.0968 17.3383 12.3069 17.1688 12.4764C16.9992 12.646 16.7891 12.7307 16.5385 12.7307H6.73081L3.19238 16.2691ZM15.9231 11.2308V3.99998H4.69236V11.9231L5.38471 11.2308H15.9231Z" fill="#A1A0A5" />
                     </svg>
                     <span class="ps-2">View All message</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="dropdown">
            <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center position-relative" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/notification.svg') }}" alt="notification">
               <span class="badge rounded-pill text-white fw-bold position-absolute d-flex justify-content-center align-items-center">9+ </span>
            </a>

         </div>
         <div class="dropdown">
            <!-- data-bs-auto-close="false" -->
            <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center overflow-hidden" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="rounded-circle" alt="avatar">
            </a>
            <div class="dropdown-menu profile__dropdown bg-white border-0" aria-labelledby="dropdownMenuLink" onclick="stopPropagation(event)">
               <div class="text-center">

                  <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile.png') }}" class="rounded-circle mx-auto object-fit-cover profile__thumbnail" alt="">
               </div>
               <p class="mb-0 lead fw-medium text-black text-center mt-3">Professor Michael Kassiou</p>
               <p class="text-center small ff-public text-muted mb-0">Curriculum Expert</p>

               <div class="d-flex status_box my-4">
                  <div class="position-relative col-6">
                     <input type="radio" name="status" id="offline" class="w-0 h-0 opacity-0 position-absolute top-0 start-0">
                     <label class="small fw-medium d-block text-center p-2" for="offline">Offline</label>
                  </div>
                  <div class="position-relative col-6">
                     <input checked type="radio" name="status" id="online" class="w-0 h-0 opacity-0 position-absolute top-0 start-0">
                     <label class="small fw-medium d-block text-center p-2" for="online">Online</label>
                  </div>
               </div>

               <ul class="ps-0 list-unstyled links mb-0">
                  <li class="mb-2">
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                           <path d="M4 22.3335C4 17.9152 7.58172 14.3335 12 14.3335C16.4183 14.3335 20 17.9152 20 22.3335H18C18 19.0198 15.3137 16.3335 12 16.3335C8.68629 16.3335 6 19.0198 6 22.3335H4ZM12 13.3335C8.685 13.3335 6 10.6485 6 7.3335C6 4.0185 8.685 1.3335 12 1.3335C15.315 1.3335 18 4.0185 18 7.3335C18 10.6485 15.315 13.3335 12 13.3335ZM12 11.3335C14.21 11.3335 16 9.5435 16 7.3335C16 5.1235 14.21 3.3335 12 3.3335C9.79 3.3335 8 5.1235 8 7.3335C8 9.5435 9.79 11.3335 12 11.3335Z" fill="#A1A0A5" />
                        </svg>
                        <span class="ps-2">Profile</span>
                     </a>
                  </li>
                  <li class="mb-2">
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                           <path d="M12 1.3335L21.5 6.8335V17.8335L12 23.3335L2.5 17.8335V6.8335L12 1.3335ZM12 3.6445L4.5 7.98661V16.6804L12 21.0225L19.5 16.6804V7.98661L12 3.6445ZM12 16.3335C9.79086 16.3335 8 14.5426 8 12.3335C8 10.1244 9.79086 8.3335 12 8.3335C14.2091 8.3335 16 10.1244 16 12.3335C16 14.5426 14.2091 16.3335 12 16.3335ZM12 14.3335C13.1046 14.3335 14 13.4381 14 12.3335C14 11.2289 13.1046 10.3335 12 10.3335C10.8954 10.3335 10 11.2289 10 12.3335C10 13.4381 10.8954 14.3335 12 14.3335Z" fill="#0036E3" />
                        </svg>
                        <span class="ps-2">Setting</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                           <path d="M4 18.3335H6V20.3335H18V4.3335H6V6.3335H4V3.3335C4 2.78122 4.44772 2.3335 5 2.3335H19C19.5523 2.3335 20 2.78122 20 3.3335V21.3335C20 21.8858 19.5523 22.3335 19 22.3335H5C4.44772 22.3335 4 21.8858 4 21.3335V18.3335ZM6 11.3335H13V13.3335H6V16.3335L1 12.3335L6 8.3335V11.3335Z" fill="#A1A0A5" />
                        </svg>
                        <span class="ps-2">Logout</span>
                     </a>
                  </li>
               </ul>

            </div>

         </div><!--.//dropdown-->
         <button class="navbar-toggler border-0 rounded-0 p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
   </div><!--.//container-->
</nav>
<script>
   // Stop dropdown close option when click inside the menu
   function stopPropagation(event) {
      event.stopPropagation();
   }
</script>
