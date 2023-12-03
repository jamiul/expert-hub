@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

<!-- sub menu start -->
<nav class="bg-primary sub__nav">
      <div class="container">
         <ul class="d-flex ps-0 list-unstyled mb-0">
               <li class="me-3">
                  <a href="/figma/expert-active-contract" class="text-white fw-medium px-2 py-3 d-inline-block active">Active Contracts</a>
               </li>
               <li class="me-3">
                  <a href="/figma/expert-all-contract" class="text-white fw-medium px-2 py-3 d-inline-block">All Contracts</a>
               </li>
               <li class="me-3">
                  <a href="/figma/expert-work-diary" class="text-white fw-medium px-2 py-3 d-inline-block">Work Diary</a>
               </li>
               <li class="me-3">
                  <a href="/figma/expert-job-offer" class="text-white fw-medium px-2 py-3 d-inline-block">Job Offers</a>
               </li>
               <li class="me-3">
                  <a href="/figma/expert-saved-jobs" class="text-white fw-medium px-2 py-3 d-inline-block">Saved Jobs</a>
               </li>
         </ul>
      </div>
   </nav>
   <!-- sub menu start -->
<main class="expert__dashboad contract__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class=" px-4 px-md-5 py-4 pt-md-5 pb-4">

                    <h1 class="lead-lg fw-medium text-black mb-21">Active Contracts</h1>


                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="activeTab-tab" data-bs-toggle="tab" data-bs-target="#activeTab" type="button" role="tab" aria-controls="activeTab" aria-selected="true">Active</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hourlyTab-tab" data-bs-toggle="tab" data-bs-target="#hourlyTab" type="button" role="tab" aria-controls="hourlyTab" aria-selected="false">Hourly (10)</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="fixedTab-tab" data-bs-toggle="tab" data-bs-target="#fixedTab" type="button" role="tab" aria-controls="fixedTab" aria-selected="false">Fixed (2)</button>
                      </li>
                    </ul>
                </div><!--.//tab__btns-->

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="activeTab" role="tabpanel" aria-labelledby="activeTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">Policy Development Assistance Required for Chemical
                                                Engineering Industry</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">LMS Expert required for Business Administration</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                    <p class="fw-medium text-muted small mb-0">
                                            Fixed
                                        </p>
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active Milestone:</span> $100
                                        </p>
                                        <p class="mb-0 small text-dark">$2000 Budget</p>
                                        <p class="mb-0 small text-dark">$1000 in Escrow</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="drop2">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">Policy Development Assistance Required for Chemical
                                                Engineering Industry</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">LMS Expert required for Business Administration</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                    <p class="fw-medium text-muted small mb-0">
                                            Fixed
                                        </p>
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active Milestone:</span> $100
                                        </p>
                                        <p class="mb-0 small text-dark">$2000 Budget</p>
                                        <p class="mb-0 small text-dark">$1000 in Escrow</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="drop2">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">Policy Development Assistance Required for Chemical
                                                Engineering Industry</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">LMS Expert required for Business Administration</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                    <p class="fw-medium text-muted small mb-0">
                                            Fixed
                                        </p>
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active Milestone:</span> $100
                                        </p>
                                        <p class="mb-0 small text-dark">$2000 Budget</p>
                                        <p class="mb-0 small text-dark">$1000 in Escrow</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="drop2">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul><!--./ul-->

                        <div class="text-center border-top py-4">
                            <button href="#" class="btn btn-primary px-5 fw-medium contract-btn">View All Contract</button>
                        </div>
                    </div><!--.//activeTab-->


                    <div class="tab-pane" id="hourlyTab" role="tabpanel" aria-labelledby="hourlyTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">Expert in Environmental Economics for Academic Research</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">LMS Expert required for Business Administration</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="drop2">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul><!--./ul-->

                        <div class="text-center border-top py-4">
                            <button href="#" class="btn btn-primary px-5 fw-medium contract-btn">View All Contract</button>
                        </div>
                    </div><!--.//Hourly-->


                    <div class="tab-pane" id="fixedTab" role="tabpanel" aria-labelledby="fixedTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">Seeking Finance Guidance for Budgeting and Forecasting
                                                in Higher Education</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="triggerId">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-6">
                                        <h2 class="title lead fw-medium">
                                            <a href="#">LMS Expert required for Business Administration</a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-4">
                                            <span class="text-muted">From:</span> Sep 23 to Present
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">See Timesheet</a>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="fw-medium small mb-0">
                                            <span class="text-black">Active:</span> <span class="text-primary">1:40 hrs</span> this week, earned $140
                                        </p>
                                        <p class="mb-0 small text-dark">$100.00/hr, 25 hrs weekly limit</p>
                                        <div class="mt-4">
                                            <p class="fw-medium text-black small mb-0">Hired by: Dr Mohammad Riyadh </p>
                                            <p class="mb-0 small text-dark">EduExHub</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center justify-content-end">
                                        <div class="dropdown open">
                                            <button class="drop__btn btn rounded-circle d-flex justify-content-center align-items-center p-0" type="button" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24"/>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu contract__drop__menu border-0" aria-labelledby="drop2">
                                                <button class="dropdown-item" href="#">Send a Message</button>
                                                <button class="dropdown-item" href="#">View Work Dairy</button>
                                                <button class="dropdown-item" href="#">Propose New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul><!--./ul-->

                        <div class="text-center border-top py-4">
                            <button href="#" class="btn btn-primary px-5 fw-medium contract-btn">View All Contract</button>
                        </div>
                    </div><!--.//fixed-->
                </div><!--.//tab-pane-->













            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>



@endsection

