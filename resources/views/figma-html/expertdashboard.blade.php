@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<main class="expert__dashboad py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="row g-0">
                    <div class="col-lg-8 col-xxl-9 border-end">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs px-4 pt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="feedTab-tab" data-bs-toggle="tab" data-bs-target="#feedTab" type="button" role="tab" aria-controls="feedTab" aria-selected="true">My Feed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bestMatch-tab" data-bs-toggle="tab" data-bs-target="#bestMatch" type="button" role="tab" aria-controls="bestMatch" aria-selected="false">Best Match</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="savedJobs-tab" data-bs-toggle="tab" data-bs-target="#savedJobs" type="button" role="tab" aria-controls="savedJobs" aria-selected="false">Saved Jobs</button>
                            </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="feedTab" role="tabpanel" aria-labelledby="feedTab-tab"> 
                                <ul class="feed__list">
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Developing curriculum for Postgraduate public health unit</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn active p-0 border-0 ms-2 like__btn">
                                                <i class="fa-solid fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag1">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag1" aria-expanded="false" aria-controls="contentTag1">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Policy development assistance required for chemical engineering industry</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag2">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag2" aria-expanded="false" aria-controls="contentTag2">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">LMS expert required for business administration</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag3">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag3" aria-expanded="false" aria-controls="contentTag3">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Seeking finance guidance for budgeting and forecasting in higher education</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag4">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag4" aria-expanded="false" aria-controls="contentTag4">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Expert in environmental economics for academic research</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag5">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag5" aria-expanded="false" aria-controls="contentTag5">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Developing curriculum for Postgraduate public health unit</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag6">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag6" aria-expanded="false" aria-controls="contentTag6">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Developing curriculum for Postgraduate public health unit</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag7">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag7" aria-expanded="false" aria-controls="contentTag7">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Developing curriculum for Postgraduate public health unit</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag8">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag8" aria-expanded="false" aria-controls="contentTag8">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                    <li class="feed__card tranisition">
                                        <h2 class="title lead fw-medium">
                                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}" width="24" height="24" alt="bag">
                                            <a href="#">Developing curriculum for Postgraduate public health unit</a>
                                        </h2>
                                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                            <div class="d-inline-flex fw-medium">
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}" width="20" height="20" alt="label">
                                                    <span class="ps-1">Curriculum development</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}" width="20" height="20" alt="clock">
                                                    <span class="ps-1">15 hours ago</span>
                                                </div>
                                                <div class="d-inline-flex align-items-center me-2">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}" width="20" height="20" alt="globe">
                                                    <span class="ps-1">USA</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex align-items-center">
                                                <span class="fw-normal text-muted">Hourly:&nbsp;</span>
                                                <span class="fw-medium text-muted">$200.00</span>
                                                <button class="btn p-0 border-0 ms-2 like__btn">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="desc text-dark fs-15">
                                            Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities...... 
                                            <span class="collapse" id="contentId">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium accusantium ut, cumque assumenda deleniti!    
                                            </span> 
                                            <a class="link" data-bs-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                                More
                                            </a> 
                                        </div>
                                        <div class="tag__list d-flex flex-wrap mt-3">
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Communication Skills</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Industry Trends Awareness</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">Educational Research</a>
                                            <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                            <span class="collapse" id="contentTag9">
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>
                                                <a href="#" class="fs-13 fw-medium rounded-pill">System Research Development</a>

                                            </span>
                                            <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#contentTag9" aria-expanded="false" aria-controls="contentTag9">
                                                <span class="count">+12 More</span>
                                                <span class="less"><i class="fa-solid fa-chevron-up"></i> Show Less</span>
                                            </a>  
                                        </div>
                                    </li>
                                </ul><!--./ul-->
                                <!--.pagination-->
                                <div class="pagination">
              <div class="row">
                <div class="col-md-4">
                  <div class="pagination-left">
                    Showing 1 to 8 of 100 entries
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="pagination-right">
                    <div class="results">
                      <p>Results per page</p>
                      <select class="form-select" aria-label="Default select example">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <ul>
                      <li><a href="#"><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left.png') }}">
                      <img class="hover-icon" src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-left-hover.png') }}"></a></li>
                      <li><a href="#"><i class="fa fa-caret-left"></i></a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                      <li><a href="#">
                      <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right.png') }}">
                      <img class="hover-icon" src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/pagination-right-hover.png') }}"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--.//pagination-->
                            </div><!--.//feed__tab-->

                            <div class="tab-pane" id="bestMatch" role="tabpanel" aria-labelledby="bestMatch-tab"> 
                                Best Matches
                            </div><!--.//best__match-->

                            <div class="tab-pane" id="savedJobs" role="tabpanel" aria-labelledby="savedJobs-tab"> 
                                Saved Jobs 
                            </div><!--.//savedJobs-->
                        </div><!--.//tab__pane-->
                    </div><!--.//col-->

                    <div class="col-lg-4 col-xxl-3 aside__wrapp">
                        <div class="px-3 px-sm-4 pt-5 pb-4 bg-white border-bottom">
                            <figure class="thumbnail__box rounded-circle mx-auto position-relative mb-2">
                                <img 
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" 
                                    width="95" height="95" alt="Profile Thumbnail"
                                    class="img-fluid rounded-circle object-cover"
                                >
                                <span class="status active position-absolute rounded-circle d-flex justify-content-center align-items-center"></span>
                            </figure>
                            <p class="text-center text-dark fw-medium mb-0">Professor Michael Kassiou</p>
                            <p class="text-center text-muted fw-normal mb-0 small lh-base">
                                Curriculum Expert
                                <span class="d-block fw-medium">Public Health</span>
                            </p>
                            <div class="mt-3">
                                <div class="d-inline-flex">
                                    <span class="text-dark small fw-medium">Complete your profile</span>
                                    <a href="#" class="px-2">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.15385 19.4269H6.39038L15.6501 10.1672L14.4135 8.93069L5.15385 18.1904V19.4269ZM18.8577 9.08264L15.4827 5.73846L16.7866 4.43464C17.0802 4.14105 17.4372 3.99426 17.8577 3.99426C18.2782 3.99426 18.6352 4.14105 18.9288 4.43464L20.1461 5.65191C20.4397 5.9455 20.5916 6.29741 20.6019 6.70766C20.6121 7.11791 20.4705 7.46983 20.1769 7.76341L18.8577 9.08264ZM17.7731 10.1826L7.02883 20.9269H3.6539V17.5519L14.3981 6.80766L17.7731 10.1826ZM15.027 9.54416L14.4135 8.93069L15.6501 10.1672L15.027 9.54416Z" fill="#191D24"/>
                                      </svg>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center"> 
                                    <div class="progress" style="width: calc(100% - 3rem);"> 
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="small fw-medium text-dark text-end" style="width: 3rem;">60%</div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-0">Available for Projects</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted fw-medium">Available Now</small>
                                <div class="toggle-button-cover">
                                    <div class="button-cover">
                                      <div class="button position-relative overflow-hidden b2" id="button-13">
                                        <input type="checkbox" class="checkbox">
                                        <div class="knobs">
                                          <span></span>
                                        </div>
                                        <div class="layer"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Services</p>
                            <ul class="link__list">
                                <li><a href="#">Consultation</a></li>
                                <li><a href="#">TV Interview</a></li>
                            </ul>
                        </div><!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Proposals</p>
                            <ul class="link__list">
                                <li><a href="#">Received (6) </a><span class="badge rounded-pill bg-success fw-normal ms-2 px-2">New</span></li>
                                <li><a href="#">Submitted (3) </a></li>
                                <li><a href="#">Invitation (1) </a></li>
                            </ul>
                        </div><!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Network</p>
                            <ul class="link__list">
                                <li><small class="fw-medium text-muted">You have</small> <a href="#">56 Connection</a></li> 
                            </ul>
                        </div><!--.//item-->
                        <div class="px-3 px-sm-4 py-4 border-bottom">
                            <p class="lead-sm fw-medium text-black mb-2">Important Links</p>
                            <ul class="link__list">
                                <li><a href="#">Help Center</a></li> 
                                <li><a href="#">Direct Contact</a></li> 
                            </ul>
                        </div><!--.//item-->
                    </div><!--.//col-->
                </div><!--./row-->
            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>
@endsection