@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}"> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
      <div class="container">
         <ul class="d-flex ps-0 list-unstyled mb-0">
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Active Contracts</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">All Contracts</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Work Diary</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Job Offers</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block active">Saved Jobs</a>
               </li>
         </ul>
      </div>
   </nav>
   <!-- sub menu start -->

    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 pt-52 border-bottom">
                    <h1 class="fs-23 text-dark mb-4">Saved Jobs</h1>
                </div>
                <ul class="feed__list">
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Developing curriculum for Postgraduate public health unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn active p-0 border-0 ms-3 like__btn"> <i class="fa-solid fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag1"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag1" aria-expanded="false" aria-controls="contentTag1"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Policy development assistance required for chemical engineering industry</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag2"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag2" aria-expanded="false" aria-controls="contentTag2"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">LMS expert required for business administration</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag3"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag3" aria-expanded="false" aria-controls="contentTag3"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Seeking finance guidance for budgeting and forecasting in higher education</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag4"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag4" aria-expanded="false" aria-controls="contentTag4"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Expert in environmental economics for academic research</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag5"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag5" aria-expanded="false" aria-controls="contentTag5"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Developing curriculum for Postgraduate public health unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag6"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag6" aria-expanded="false" aria-controls="contentTag6"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Developing curriculum for Postgraduate public health unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag7"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag7" aria-expanded="false" aria-controls="contentTag7"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Developing curriculum for Postgraduate public health unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag8"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag8" aria-expanded="false" aria-controls="contentTag8"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                    <li class="feed__card tranisition">
                        <h2 class="title lead fw-medium"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag"> <a href="#">Developing curriculum for Postgraduate public health unit</a> </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label"> <span class="ps-1">Curriculum development</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock"> <span class="ps-1">15 hours ago</span> </div>
                                <div class="d-inline-flex align-items-center me-2"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe"> <span class="ps-1">USA</span> </div>
                            </div>
                            <div class="d-inline-flex align-items-center"> <span class="fw-normal text-muted">Hourly:&nbsp;</span> <span class="fw-medium text-muted">$200.00</span> <button class="btn p-0 border-0 ms-3 like__btn"> <i class="fa-regular fa-heart"></i> </button> </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15"> Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... <span class="collapse" id="contentId"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti! </span> <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId"> More </a> </div>
                        <div class="tag__list d-flex flex-wrap mt-3"> <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a> <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a> <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <span class="collapse" id="contentTag9"> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a> </span> <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag9" aria-expanded="false" aria-controls="contentTag9"> <span class="count">+12 More</span> <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span> </a> </div>
                    </li>
                </ul>

                <!--.pagination-->
                <div class="pagination">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="pagination-left"> Showing 1 to 8 of 100 entries </div>
                        </div>
                        <div class="col-md-8">
                            <div class="pagination-right">
                                <div class="results">
                                    <p>Results per page</p> <select class="form-select" aria-label="Default select example">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <ul>
                                    <li> <a href="#"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left.png') }}"> <img class="hover-icon" src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left-hover.png') }}"> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-caret-left"></i> </a> </li>
                                    <li> <a href="#" class="active">1</a> </li>
                                    <li> <a href="#">2</a> </li>
                                    <li> <a href="#">3</a> </li>
                                    <li> <a href="#"> <i class="fa fa-caret-right"></i> </a> </li>
                                    <li> <a href="#"> <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right.png') }}"> <img class="hover-icon" src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right-hover.png') }}"> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.//pagination-->
            </div><!--.//main__content-->
  
        </div><!--.//container-->
    </main>



@endsection

@push('js')
 
@endpush