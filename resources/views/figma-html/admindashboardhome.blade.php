@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

<main class="main__layout d-flex">
        <!-- start left sidebar -->
        <div class="left__sidebar"> 
            <div class="content"> 
                <div class="logo__wrapp px-3 d-flex justify-content-between align-items-center border-bottom mb-4">
                    <a href="index.html" class="logo">
                    <img src="{{ asset('assets/frontend/img/admin/logo.png') }}" height="40" width="auto" class="img-fluid" alt=""/>

                    </a> 
                    <button class="btn navToggler rounded-circle p-0 d-inline-flex justify-content-center align-items-center" id="jsCloseMobileNav">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                            <path d="M0.8 0H15.2C15.6418 0 16 0.348227 16 0.777778V13.2222C16 13.6518 15.6418 14 15.2 14H0.8C0.358176 14 0 13.6518 0 13.2222V0.777778C0 0.348227 0.358176 0 0.8 0ZM4.8 1.55556H1.6V12.4444H4.8V1.55556ZM6.4 1.55556V12.4444H14.4V1.55556H6.4Z" fill="white"/>
                        </svg>
                    </button>
                </div>
                <ul class="link__box">
                    <li>
                        <p class="mb-1 fs-12 label fw-medium">Main Menu</p>
                    </li>
                    <li>
                        <a class="nav-link d-flex" href="index.html">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 14.2498H14.25V7.48343L9 3.40009L3.75 7.48343V14.2498H8.25V9.74977H9.75V14.2498ZM15.75 14.9998C15.75 15.414 15.4142 15.7498 15 15.7498H3C2.58579 15.7498 2.25 15.414 2.25 14.9998V7.11661C2.25 6.88517 2.35685 6.66669 2.53954 6.5246L8.53957 1.85793C8.8104 1.64729 9.1896 1.64729 9.46043 1.85793L15.4604 6.5246C15.6431 6.66669 15.75 6.88517 15.75 7.11661V14.9998Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link d-flex" href="#">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 15V5.25L15 2.25H3L1.5 5.25265V15C1.5 15.4142 1.83579 15.75 2.25 15.75H15.75C16.1642 15.75 16.5 15.4142 16.5 15ZM3 6.75H15V14.25H3V6.75ZM3.927 3.75H14.073L14.823 5.25H3.17775L3.927 3.75ZM11.25 8.25H6.75V9.75H11.25V8.25Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content01" aria-expanded="false" aria-controls="content01">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51734 12.9692C5.15484 12.4962 5.84931 12.1226 6.60074 11.8486C7.35218 11.5745 8.15194 11.4375 9.00001 11.4375C9.84809 11.4375 10.6478 11.5745 11.3993 11.8486C12.1507 12.1226 12.8452 12.4962 13.4827 12.9692C13.949 12.4567 14.3185 11.8635 14.5911 11.1894C14.8637 10.5154 15 9.78556 15 8.99998C15 7.33748 14.4156 5.92186 13.2469 4.75311C12.0781 3.58436 10.6625 2.99998 9.00001 2.99998C7.33751 2.99998 5.92189 3.58436 4.75314 4.75311C3.58439 5.92186 3.00001 7.33748 3.00001 8.99998C3.00001 9.78556 3.13631 10.5154 3.40891 11.1894C3.68151 11.8635 4.05099 12.4567 4.51734 12.9692ZM9.00024 9.56246C8.31547 9.56246 7.738 9.32745 7.26781 8.85741C6.79762 8.38736 6.56253 7.80996 6.56253 7.12521C6.56253 6.44045 6.79755 5.86297 7.26759 5.39278C7.73764 4.9226 8.31504 4.6875 8.99979 4.6875C9.68455 4.6875 10.262 4.92252 10.7322 5.39256C11.2024 5.86261 11.4375 6.44001 11.4375 7.12476C11.4375 7.80952 11.2025 8.387 10.7324 8.85718C10.2624 9.32737 9.68499 9.56246 9.00024 9.56246ZM9.00001 16.125C8.01059 16.125 7.08247 15.9389 6.21566 15.5668C5.34883 15.1947 4.59474 14.6879 3.95339 14.0466C3.31206 13.4053 2.80533 12.6512 2.43322 11.7843C2.06109 10.9175 1.87503 9.98941 1.87503 8.99998C1.87503 8.01056 2.06109 7.08244 2.43322 6.21563C2.80533 5.3488 3.31206 4.59471 3.95339 3.95336C4.59474 3.31203 5.34883 2.8053 6.21566 2.43319C7.08247 2.06106 8.01059 1.875 9.00001 1.875C9.98944 1.875 10.9176 2.06106 11.7844 2.43319C12.6512 2.8053 13.4053 3.31203 14.0466 3.95336C14.688 4.59471 15.1947 5.3488 15.5668 6.21563C15.9389 7.08244 16.125 8.01056 16.125 8.99998C16.125 9.98941 15.9389 10.9175 15.5668 11.7843C15.1947 12.6512 14.688 13.4053 14.0466 14.0466C13.4053 14.6879 12.6512 15.1947 11.7844 15.5668C10.9176 15.9389 9.98944 16.125 9.00001 16.125ZM9.00001 15C9.67694 15 10.3296 14.8911 10.9579 14.6733C11.5863 14.4555 12.1443 14.1509 12.6318 13.7596C12.1443 13.3827 11.5935 13.0889 10.9796 12.8783C10.3656 12.6678 9.70579 12.5625 9.00001 12.5625C8.29424 12.5625 7.63317 12.6666 7.01682 12.8747C6.40047 13.0829 5.85096 13.3779 5.36827 13.7596C5.85577 14.1509 6.41371 14.4555 7.04208 14.6733C7.67044 14.8911 8.32309 15 9.00001 15ZM9.00001 8.4375C9.37309 8.4375 9.68511 8.31202 9.93609 8.06106C10.187 7.81008 10.3125 7.49806 10.3125 7.12498C10.3125 6.75191 10.187 6.43988 9.93609 6.18891C9.68511 5.93794 9.37309 5.81246 9.00001 5.81246C8.62694 5.81246 8.31491 5.93794 8.06394 6.18891C7.81297 6.43988 7.68749 6.75191 7.68749 7.12498C7.68749 7.49806 7.81297 7.81008 8.06394 8.06106C8.31491 8.31202 8.62694 8.4375 9.00001 8.4375Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Clients</span>
                        </a>
                        
                        <ul class="collapse" id="content01">
                            <li><a href="#" class="inner-link">View All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content02" aria-expanded="false" aria-controls="content02">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2.25C6.83156 2.25 5.0625 4.01906 5.0625 6.1875C5.0625 7.52569 5.74313 8.70975 6.76744 9.42188C4.45838 10.323 2.8125 12.573 2.8125 15.1875H3.9375C3.9375 12.7136 5.73244 10.6459 8.08594 10.2127L8.4375 11.25H9.5625L9.91406 10.2127C12.2676 10.6459 14.0625 12.7136 14.0625 15.1875H15.1875C15.1875 12.573 13.5416 10.323 11.2326 9.42188C12.2563 8.70975 12.9375 7.52569 12.9375 6.1875C12.9375 4.01906 11.1684 2.25 9 2.25ZM9 3.375C10.5598 3.375 11.8125 4.62769 11.8125 6.1875C11.8125 7.74731 10.5598 9 9 9C7.44019 9 6.1875 7.74731 6.1875 6.1875C6.1875 4.62769 7.44019 3.375 9 3.375ZM8.4375 11.8125L7.875 15.1875H10.125L9.5625 11.8125H8.4375Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Experts</span>
                        </a>
                        
                        <ul class="collapse" id="content02">
                            <li><a href="#" class="inner-link">View All</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content03" aria-expanded="false" aria-controls="content03">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 3.74632C2.25 2.91992 2.91946 2.25 3.74632 2.25H14.2537C15.0801 2.25 15.75 2.91946 15.75 3.74632V14.2537C15.75 15.0801 15.0806 15.75 14.2537 15.75H3.74632C2.91992 15.75 2.25 15.0806 2.25 14.2537V3.74632ZM3.75 3.75V14.25H14.25V3.75H3.75ZM5.97912 13.6356C5.5151 13.4347 5.07539 13.1882 4.66562 12.9018C5.6008 11.4565 7.22701 10.5 9.07665 10.5C10.8761 10.5 12.4642 11.4053 13.4101 12.7854C13.0079 13.0827 12.5748 13.3408 12.1166 13.5539C11.4354 12.6125 10.3275 12 9.07665 12C7.78987 12 6.65453 12.6481 5.97912 13.6356ZM9 9.75C7.55025 9.75 6.375 8.57475 6.375 7.125C6.375 5.67525 7.55025 4.5 9 4.5C10.4497 4.5 11.625 5.67525 11.625 7.125C11.625 8.57475 10.4497 9.75 9 9.75ZM9 8.25C9.6213 8.25 10.125 7.7463 10.125 7.125C10.125 6.50368 9.6213 6 9 6C8.3787 6 7.875 6.50368 7.875 7.125C7.875 7.7463 8.3787 8.25 9 8.25Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Accounting</span>
                        </a>
                        
                        <ul class="collapse" id="content03">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content04" aria-expanded="false" aria-controls="content04">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00045 13.695L3.71036 16.6562L4.89186 10.7099L0.440918 6.59385L6.4612 5.88004L9.00045 0.375L11.5396 5.88004L17.5599 6.59385L13.109 10.7099L14.2905 16.6562L9.00045 13.695ZM9.00045 11.976L12.1855 13.7588L11.4741 10.1788L14.1539 7.70055L10.5292 7.27075L9.00045 3.95626L7.47161 7.27075L3.84691 7.70055L6.52673 10.1788L5.81537 13.7588L9.00045 11.976Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Reviews</span>
                        </a>
                        
                        <ul class="collapse" id="content04">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content05" aria-expanded="false" aria-controls="content05">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00045 13.695L3.71036 16.6562L4.89186 10.7099L0.440918 6.59385L6.4612 5.88004L9.00045 0.375L11.5396 5.88004L17.5599 6.59385L13.109 10.7099L14.2905 16.6562L9.00045 13.695ZM9.00045 11.976L12.1855 13.7588L11.4741 10.1788L14.1539 7.70055L10.5292 7.27075L9.00045 3.95626L7.47161 7.27075L3.84691 7.70055L6.52673 10.1788L5.81537 13.7588L9.00045 11.976Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Page setting</span>
                        </a>
                        
                        <ul class="collapse" id="content05">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-1 fs-12 label fw-medium pt-32">Employee & Teach</p>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content07" aria-expanded="false" aria-controls="content07">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M3 16.5C3 13.1863 5.68629 10.5 9 10.5C12.3137 10.5 15 13.1863 15 16.5H13.5C13.5 14.0147 11.4853 12 9 12C6.51472 12 4.5 14.0147 4.5 16.5H3ZM9 9.75C6.51375 9.75 4.5 7.73625 4.5 5.25C4.5 2.76375 6.51375 0.75 9 0.75C11.4862 0.75 13.5 2.76375 13.5 5.25C13.5 7.73625 11.4862 9.75 9 9.75ZM9 8.25C10.6575 8.25 12 6.9075 12 5.25C12 3.5925 10.6575 2.25 9 2.25C7.3425 2.25 6 3.5925 6 5.25C6 6.9075 7.3425 8.25 9 8.25Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Employee</span>
                        </a>
                        
                        <ul class="collapse" id="content07">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content08" aria-expanded="false" aria-controls="content08">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M7.5 6H10.5V4.875C10.5 3.42525 11.6753 2.25 13.125 2.25C14.5747 2.25 15.75 3.42525 15.75 4.875C15.75 6.32475 14.5747 7.5 13.125 7.5H12V10.5H13.125C14.5747 10.5 15.75 11.6753 15.75 13.125C15.75 14.5747 14.5747 15.75 13.125 15.75C11.6753 15.75 10.5 14.5747 10.5 13.125V12H7.5V13.125C7.5 14.5747 6.32475 15.75 4.875 15.75C3.42525 15.75 2.25 14.5747 2.25 13.125C2.25 11.6753 3.42525 10.5 4.875 10.5H6V7.5H4.875C3.42525 7.5 2.25 6.32475 2.25 4.875C2.25 3.42525 3.42525 2.25 4.875 2.25C6.32475 2.25 7.5 3.42525 7.5 4.875V6ZM6 6V4.875C6 4.25368 5.49632 3.75 4.875 3.75C4.25368 3.75 3.75 4.25368 3.75 4.875C3.75 5.49632 4.25368 6 4.875 6H6ZM6 12H4.875C4.25368 12 3.75 12.5037 3.75 13.125C3.75 13.7463 4.25368 14.25 4.875 14.25C5.49632 14.25 6 13.7463 6 13.125V12ZM12 6H13.125C13.7463 6 14.25 5.49632 14.25 4.875C14.25 4.25368 13.7463 3.75 13.125 3.75C12.5037 3.75 12 4.25368 12 4.875V6ZM12 12V13.125C12 13.7463 12.5037 14.25 13.125 14.25C13.7463 14.25 14.25 13.7463 14.25 13.125C14.25 12.5037 13.7463 12 13.125 12H12ZM7.5 7.5V10.5H10.5V7.5H7.5Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Tech</span>
                        </a>
                        
                        <ul class="collapse" id="content08">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-1 fs-12 label fw-medium pt-32">Upload & Resources</p>
                    </li>
                    <li>
                        <a class="nav-link d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M4.50001 14.25H7.00964V9.79325H10.9904V14.25H13.5V7.49998L9.00001 4.11056L4.50001 7.49998V14.25ZM3.37503 15.375V6.9375L9.00001 2.70435L14.625 6.9375V15.375H9.8654V10.9182H8.13462V15.375H3.37503Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Upload Files</span>
                        </a> 
                    </li>
                    <li>
                        <a class="nav-link collapse__btn collapsed d-flex align-items-center" data-bs-toggle="collapse" href="#content09" aria-expanded="false" aria-controls="content09">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M4.50001 14.25H7.00964V9.79325H10.9904V14.25H13.5V7.49998L9.00001 4.11056L4.50001 7.49998V14.25ZM3.37503 15.375V6.9375L9.00001 2.70435L14.625 6.9375V15.375H9.8654V10.9182H8.13462V15.375H3.37503Z" fill="white" fill-opacity="0.8"/>
                            </svg>
                            <span>Resources</span>
                        </a>
                        
                        <ul class="collapse" id="content09">
                            <li><a href="#" class="inner-link">Project payment</a></li>
                        </ul>
                    </li>
                </ul><!--ull-->
                <div class="copy__right text-white text-center border-top small">
                    © copyright eduexhub 2024
                </div>
            </div><!--.//content-->
        </div>
        <!-- end left sidebar -->

        <div class="main__content__wrapper col">
             <!-- start header -->
            <div class="header__wrapper py-2 bg-white"> 
               
                <a href="index.html" class="logo d-lg-none"><img src="assets/images/logo.png" height="40" width="auto" class="img-fluid" alt=""></a>
                <ul class="navbar-nav mr-auto">  
                    <li class="nav-item dropdown position-relative"> 
                        <button class="btn notification__btn rounded-circle d-flex justify-content-center align-items-center" type="button" id="notDrop" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M18.3333 16.6667H1.66663V15.0001H2.49996V9.19291C2.49996 5.03631 5.85783 1.66675 9.99996 1.66675C14.1421 1.66675 17.5 5.03631 17.5 9.19291V15.0001H18.3333V16.6667ZM4.16663 15.0001H15.8333V9.19291C15.8333 5.9568 13.2216 3.33341 9.99996 3.33341C6.7783 3.33341 4.16663 5.9568 4.16663 9.19291V15.0001ZM7.91663 17.5001H12.0833C12.0833 18.6507 11.1505 19.5834 9.99996 19.5834C8.84938 19.5834 7.91663 18.6507 7.91663 17.5001Z" fill="#303744"/>
                            </svg>
                            <span class="badge bg-danger position-absolute fs-10 rounded-circle">9+</span>
                        </button>
                        <div class="dropdown-menu notification" aria-labelledby="notDrop">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Notification</a>  
                        </div>
                    </li> 
                    <li class="nav-item dropdown">  
                        <button class="profile__btn btn text-start d-flex align-items-center border-0" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/frontend/img/cp4.png') }}" class="rounded-circle thumbnail" width="45" height="45" alt="admin-user-img"> 
                            <div class="caption">
                                <p class="mb-0 small fw-medium text-black">Leslie Alexander</p>
                                <p class="mb-0 fs-13 text-muted">Accountant</p>
                            </div>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> My Profile</a> 
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i> Account Settings</a>
                            <a class="dropdown-item" href="#"><i data-feather="lock"></i> Change Password</a>
                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Log Out</a> 
                        </div>
                    </li> 
                </ul>  
            </div>
            <!-- end header -->

<div class="content__wrapper">



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <section class="admin-dashboard-area  mx-auto ">

          <div class="dashboard-inprogress-area">
                <div class="dashboard-inprogress">
                  <div class="admin-tab-nav-area d-flex flex-row justify-content-between">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item " role="presentation">
                          <button class=" admin-nav-link nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">In progress (23)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link admin-nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dispute (3)</button>
                        </li>

                        <li class="nav-item" role="presentation">
                          <button class="nav-link admin-nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Canceled (3)</button>
                        </li>

                        

                        <li class="nav-item" role="presentation">
                          <button class="nav-link admin-nav-link" id="pills-complete-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact-complete2" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">On hold (3)</button>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link admin-nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-complete" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">Completed (12)</button>
                        </li>

                      </ul>
                          <div class="short-by-area all-padding-admin">
                            <div class="select-date">
                              <div class="date-item">
                                <div class="study-level">
                                  <div class="calendar-box position-relative">
                                    <input type="text" id="dateInput" placeholder="Oct 23 2023">
                                    <p class=" position-absolute short-by-date">
                                      <span class="material-symbols-outlined">calendar_today</span>
                                    </p>
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
                              </div>
                            </div>

                            <div class="search-by search-by-admin">
                              <form class="example search-form">
                                <input type="text" placeholder="Search by ID" name="search">
                                <button type="submit">
                                  <i class="fa fa-search"></i>
                                </button>
                              </form>
                              
                            </div>
                      </div>

                </div>




                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"> 

                        <div class="row px-0 mx-0 admin-m-bottom admin-m-top">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                              
                                
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>
                        

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                        <div class="row px-0 mx-0 admin-m-bottom admin-m-top">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p> <span class="admin-fixed">Fixed:</span>$100.00</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                              
                                
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>
                        

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for dispute</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                              
                        <div class="row px-0 mx-0 admin-m-bottom admin-m-top">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p> <span class="admin-fixed">Fixed:</span>$100.00</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                              
                                
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>
                        

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for cancel</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        </div>
                        <div class="tab-pane fade" id="pills-contact-complete2" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

                        <div class="row px-0 mx-0 admin-m-bottom admin-m-top">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p> <span class="admin-fixed">Fixed:</span>$100.00</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                              
                                
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>
                        

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <p class="dispute-reason">Reason for on-hold</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        </div>
                        <div class="tab-pane fade" id="pills-contact-complete" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

                        <div class="row px-0 mx-0 admin-m-bottom admin-m-top">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p> <span class="admin-fixed">Fixed:</span>$100.00</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>

                              
                                
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                            </div>

                          </div>
                        </div>
                        

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row px-0 mx-0 admin-m-bottom ">
                          <div class="admin-policy-area d-flex flex-row justify-content-between">
                            <div class="policy-content">
                                <h6>ID: 7557uy8675656</h6>
                                <h4>Policy Development Assistance Required for Chemical Engineering Industry</h4>
                                <p> <span class="spec-admin-form">From:</span> Sep 23 to Present</p>
                            </div>
                            <div class="policy-price">
                              <p>Total: <span class="admin-hours">1:40 hrs</span>  earned <span class="admin-currency">$140</span></p>
                              <p>$100.00/hr, 25 hrs weekly limit</p>
                              <div class="consultant-reviw">
                                  <ul>
                                    <li>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>
                                      <a href="#"><i class="fa fa-star"></i></a>

                                    </li>
                                  </ul>
                                </div>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                    </div>
                                </div>
                            </div>
                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item">
                                    <li>
                                      <a class="dropdown-item " href="#">Invite Experts</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">View Job Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Edit Posting</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="#">Remove Posting</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                   
                      </div>

                </div>


                    

     
<!-- Pagination start Here -->
<div class="row pagination-padding">
      <div class="pagination-area">
        <div class="pagination-left">
          <p>Showing 1 to 8 of 100 entries</p>
        </div>
        <div class="pagination-right">
          <div class="pagination-count">
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label result-perpage">Results per page</label>
              </div>
              <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                  <option selected>5</option>
                  <option value="1">4</option>
                  <option value="2">3</option>
                  <option value="3">2</option>
                  <option value="3">1</option>
                </select>
              </div>
            </div>
          </div>
          <div class="pagination-next-prev">
            <ul class="pagination">
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> skip_previous </span>
                </a>
              </li>
              <li class="page-item ">
                <a class="page-link">
                  <span class="material-symbols-outlined"> arrow_left </span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item " aria-current="page">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> arrow_right </span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span class="material-symbols-outlined"> skip_next </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination end Here -->

          </div>


          




    </section>
    </div>
  </div>
</div>
</div>
</main>







@endsection
