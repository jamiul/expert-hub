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
            <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center position-relative icon-component-list " href="#">
            <x-icon.favorite/>
            </a>
         </div>
         <div class="dropdown">

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
                     <a href="{{ url('figma/client-profile') }}" class="d-inline-flex align-items-center small fw-medium">
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



<!--======================= Mobile Menu ======================= -->


<main class="edux-mobile-menu">
  <nav class="navbar navbar-dark bg-light" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
      <a class="navbar-brand edux-navbar-brand" href="/figma/client-dashboardhome"><img src="{{ asset('assets/frontend/img/logo.png') }}" /></a>
<div class="edux-sear-expand">
      <button class="navbar-toggler d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
        <span class="edux-navbar-toggle-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M16.3333 17.5L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L17.5 16.3333L16.3333 17.5ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="#303744"/>
         </svg>
      </span>
      </button>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
        <span class="edux-navbar-toggle-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
         <path d="M2.5 15V13.3333H17.5V15H2.5ZM2.5 10.8333V9.16667H17.5V10.8333H2.5ZM2.5 6.66667V5H17.5V6.66667H2.5Z" fill="#303744"/>
         </svg>
      </span>
      </button>
</div>
      <div class="offcanvas offcanvas-end text-bg-dark  edux-text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
        <div class="offcanvas-header edux-offcanvas-header">
         <div class="offcanvas-title edux-mobile-avatar-area" id="offcanvasNavbarDarkLabel">
            <img src="{{ asset('assets/frontend/img/mobile-avatar.png') }}" />
            <div class="edux-mobile-text">
               <h6>Jane Dwo</h6>
               <p>Public Health</p>
               <span>5:32 AM GMT+6,  <br> Australia </span>
            </div>

         </div>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body edux-offcanvas-body">


        <div class="edux-profile-dropdown">
            <ul class="ps-0 list-unstyled links mb-0 edux-mobile-dropdown">
                  <li class="">
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                           <path d="M2.6665 15.1667C2.6665 12.2211 5.05432 9.83333 7.99984 9.83333C10.9454 9.83333 13.3332 12.2211 13.3332 15.1667H11.9998C11.9998 12.9575 10.209 11.1667 7.99984 11.1667C5.7907 11.1667 3.99984 12.9575 3.99984 15.1667H2.6665ZM7.99984 9.16666C5.78984 9.16666 3.99984 7.37666 3.99984 5.16666C3.99984 2.95666 5.78984 1.16666 7.99984 1.16666C10.2098 1.16666 11.9998 2.95666 11.9998 5.16666C11.9998 7.37666 10.2098 9.16666 7.99984 9.16666ZM7.99984 7.83333C9.47317 7.83333 10.6665 6.64 10.6665 5.16666C10.6665 3.69333 9.47317 2.5 7.99984 2.5C6.5265 2.5 5.33317 3.69333 5.33317 5.16666C5.33317 6.64 6.5265 7.83333 7.99984 7.83333Z" fill="#191D24"/>
                         </svg>
                        <span class="ps-2">Profile</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path d="M7.99984 1.16666L14.3332 4.83333V12.1667L7.99984 15.8333L1.6665 12.1667V4.83333L7.99984 1.16666ZM7.99984 2.70733L2.99984 5.60207V11.3979L7.99984 14.2927L12.9998 11.3979V5.60207L7.99984 2.70733ZM7.99984 11.1667C6.52708 11.1667 5.33317 9.97273 5.33317 8.5C5.33317 7.02724 6.52708 5.83333 7.99984 5.83333C9.47257 5.83333 10.6665 7.02724 10.6665 8.5C10.6665 9.97273 9.47257 11.1667 7.99984 11.1667ZM7.99984 9.83333C8.73624 9.83333 9.33317 9.2364 9.33317 8.5C9.33317 7.7636 8.73624 7.16666 7.99984 7.16666C7.26344 7.16666 6.6665 7.7636 6.6665 8.5C6.6665 9.2364 7.26344 9.83333 7.99984 9.83333Z" fill="#191D24"/>
                     </svg>
                        <span class="ps-2">Setting</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path d="M7.99984 1.16666L14.3332 4.83333V12.1667L7.99984 15.8333L1.6665 12.1667V4.83333L7.99984 1.16666ZM7.99984 2.70733L2.99984 5.60207V11.3979L7.99984 14.2927L12.9998 11.3979V5.60207L7.99984 2.70733ZM7.99984 11.1667C6.52708 11.1667 5.33317 9.97273 5.33317 8.5C5.33317 7.02724 6.52708 5.83333 7.99984 5.83333C9.47257 5.83333 10.6665 7.02724 10.6665 8.5C10.6665 9.97273 9.47257 11.1667 7.99984 11.1667ZM7.99984 9.83333C8.73624 9.83333 9.33317 9.2364 9.33317 8.5C9.33317 7.7636 8.73624 7.16666 7.99984 7.16666C7.26344 7.16666 6.6665 7.7636 6.6665 8.5C6.6665 9.2364 7.26344 9.83333 7.99984 9.83333Z" fill="#191D24"/>
                     </svg>
                        <span class="ps-2">Projects</span>
                     </a>
                  </li>

                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path d="M7.99984 1.16666L14.3332 4.83333V12.1667L7.99984 15.8333L1.6665 12.1667V4.83333L7.99984 1.16666ZM7.99984 2.70733L2.99984 5.60207V11.3979L7.99984 14.2927L12.9998 11.3979V5.60207L7.99984 2.70733ZM7.99984 11.1667C6.52708 11.1667 5.33317 9.97273 5.33317 8.5C5.33317 7.02724 6.52708 5.83333 7.99984 5.83333C9.47257 5.83333 10.6665 7.02724 10.6665 8.5C10.6665 9.97273 9.47257 11.1667 7.99984 11.1667ZM7.99984 9.83333C8.73624 9.83333 9.33317 9.2364 9.33317 8.5C9.33317 7.7636 8.73624 7.16666 7.99984 7.16666C7.26344 7.16666 6.6665 7.7636 6.6665 8.5C6.6665 9.2364 7.26344 9.83333 7.99984 9.83333Z" fill="#191D24"/>
                     </svg>
                        <span class="ps-2 active-message">Message</span>
                        <p class="edux-count-point">2</p>
                     </a>
                  </li>

                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path d="M7.99984 1.16666L14.3332 4.83333V12.1667L7.99984 15.8333L1.6665 12.1667V4.83333L7.99984 1.16666ZM7.99984 2.70733L2.99984 5.60207V11.3979L7.99984 14.2927L12.9998 11.3979V5.60207L7.99984 2.70733ZM7.99984 11.1667C6.52708 11.1667 5.33317 9.97273 5.33317 8.5C5.33317 7.02724 6.52708 5.83333 7.99984 5.83333C9.47257 5.83333 10.6665 7.02724 10.6665 8.5C10.6665 9.97273 9.47257 11.1667 7.99984 11.1667ZM7.99984 9.83333C8.73624 9.83333 9.33317 9.2364 9.33317 8.5C9.33317 7.7636 8.73624 7.16666 7.99984 7.16666C7.26344 7.16666 6.6665 7.7636 6.6665 8.5C6.6665 9.2364 7.26344 9.83333 7.99984 9.83333Z" fill="#191D24"/>
                     </svg>
                        <span class="ps-2">Billing & Paymennts</span>
                     </a>
                  </li>

                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path d="M7.99984 1.16666L14.3332 4.83333V12.1667L7.99984 15.8333L1.6665 12.1667V4.83333L7.99984 1.16666ZM7.99984 2.70733L2.99984 5.60207V11.3979L7.99984 14.2927L12.9998 11.3979V5.60207L7.99984 2.70733ZM7.99984 11.1667C6.52708 11.1667 5.33317 9.97273 5.33317 8.5C5.33317 7.02724 6.52708 5.83333 7.99984 5.83333C9.47257 5.83333 10.6665 7.02724 10.6665 8.5C10.6665 9.97273 9.47257 11.1667 7.99984 11.1667ZM7.99984 9.83333C8.73624 9.83333 9.33317 9.2364 9.33317 8.5C9.33317 7.7636 8.73624 7.16666 7.99984 7.16666C7.26344 7.16666 6.6665 7.7636 6.6665 8.5C6.6665 9.2364 7.26344 9.83333 7.99984 9.83333Z" fill="#191D24"/>
                     </svg>
                        <span class="ps-2">Notification</span>
                        <p class="edux-count-point">9+</p>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="d-inline-flex align-items-center small fw-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                         <path d="M2.6665 12.5H3.99984V13.8333H11.9998V3.16667H3.99984V4.5H2.6665V2.5C2.6665 2.13182 2.96498 1.83334 3.33317 1.83334H12.6665C13.0347 1.83334 13.3332 2.13182 13.3332 2.5V14.5C13.3332 14.8682 13.0347 15.1667 12.6665 15.1667H3.33317C2.96498 15.1667 2.6665 14.8682 2.6665 14.5V12.5ZM3.99984 7.83334H8.6665V9.16667H3.99984V11.1667L0.666504 8.5L3.99984 5.83334V7.83334Z" fill="#191D24"/>
                        </svg>
                        <span class="ps-2">Logout</span>
                     </a>
                  </li>

               </ul>
         </div>
        </div>
      </div>
    </div>
  </nav>
</main>



<script>
   // Stop dropdown close option when click inside the menu
   function stopPropagation(event) {
      event.stopPropagation();
   }
</script>
