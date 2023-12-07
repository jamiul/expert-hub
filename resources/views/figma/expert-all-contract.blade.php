@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
@vite('resources/default/css/expert-dashboard.css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

<!-- sub menu start -->
<nav class="bg-primary sub__nav">
      <div class="container">
         <ul class="d-flex ps-0 list-unstyled mb-0">
               <li class="me-3">
                  <a href="/figma/expert-active-contract" class="text-white fw-medium px-2 py-3 d-inline-block">Active Contracts</a>
               </li>
               <li class="me-3">
                  <a href="/figma/expert-all-contract" class="text-white fw-medium px-2 py-3 d-inline-block active">All Contracts</a>
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

                    <h1 class="lead-lg fw-medium text-black mb-3">All Contracts</h1>

                    <div class="row g-3 gx-lg-5 filter__wrapp">
                        <div class="col-md-6 order-md-2">
                            <form action="#" class="input-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search by contract, client, or company" required>
                                <button class="btn-primary">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.1 21.5L13.8 15.2C13.3 15.6 12.725 15.9167 12.075 16.15C11.425 16.3833 10.7333 16.5 10 16.5C8.18333 16.5 6.64583 15.8708 5.3875 14.6125C4.12917 13.3542 3.5 11.8167 3.5 10C3.5 8.18333 4.12917 6.64583 5.3875 5.3875C6.64583 4.12917 8.18333 3.5 10 3.5C11.8167 3.5 13.3542 4.12917 14.6125 5.3875C15.8708 6.64583 16.5 8.18333 16.5 10C16.5 10.7333 16.3833 11.425 16.15 12.075C15.9167 12.725 15.6 13.3 15.2 13.8L21.5 20.1L20.1 21.5ZM10 14.5C11.25 14.5 12.3125 14.0625 13.1875 13.1875C14.0625 12.3125 14.5 11.25 14.5 10C14.5 8.75 14.0625 7.6875 13.1875 6.8125C12.3125 5.9375 11.25 5.5 10 5.5C8.75 5.5 7.6875 5.9375 6.8125 6.8125C5.9375 7.6875 5.5 8.75 5.5 10C5.5 11.25 5.9375 12.3125 6.8125 13.1875C7.6875 14.0625 8.75 14.5 10 14.5Z" fill="white"/>
                                      </svg>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6 order-md-1 border-end">
                            <div class="sort__wrapp d-flex align-items-center">
                                <div class="fw-medium text-black label">Sort By</div>
                                <div class="ps-3 select__wrapp">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="left-sidebar p-0">
                                                <div class="calendar-box">
                                                    <input type="text" id="dateInput2" placeholder="Start Date" class="datepicker form-select"
                                                    >
                                                    <div class="calendar" id="calendar">
                                                    <div class="header">
                                                        <button id="prevBtn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                                                <path d="M11.25 14L6.75 9.5L11.25 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </button>
                                                        <h2 id="monthYear">Month Year</h2>
                                                        <button id="nextBtn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                                            <path d="M6.75 14L11.25 9.5L6.75 5" stroke="#5C5C5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="days" id="daysContainer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <select name="sort" id="sort" class="form-select">
                                                <option value="Ascending">Ascending</option>
                                                <option value="Decending">Decending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--.//row-->

                </div><!--.//tab__btns-->

                <ul class="feed__list border-top">
                    <li class="feed__card tranisition">
                        <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                            <div class="col-md-6">
                                <h2 class="title lead fw-medium">
                                    <a href="#">Policy Development Assistance Required for Chemical
                                        Engineering Industry</a>
                                </h2>
                                <p class="text-black small mt-2 mb-0">
                                    Sep 23 2023 - Oct 10 2023
                                </p>

                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>


                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Hourly
                                </p>
                                <p class="mb-0 small text-dark">$15.00/hr, 20 hrs weekly limit</p>
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
                                <p class="text-black small mt-2">
                                    Sep 23 2023 - Oct 10 2023
                                </p>
                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Fixed
                                </p>
                                <p class="mb-0 small text-dark">$4000 Budget</p>
                                <div class="mt-3">
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
                                <p class="text-black small mt-2 mb-0">
                                    Sep 23 2023 - Oct 10 2023
                                </p>
                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Hourly
                                </p>
                                <p class="mb-0 small text-dark">$15.00/hr, 20 hrs weekly limit</p>
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
                                <p class="text-black small mt-2">
                                    Sep 23 2023 - Oct 10 2023
                                </p>
                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Fixed
                                </p>
                                <p class="mb-0 small text-dark">$4000 Budget</p>
                                <div class="mt-3">
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
                                <p class="text-black small mt-2 mb-0">
                                    Sep 23 2023 - Oct 10 2023
                                </p>
                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Hourly
                                </p>
                                <p class="mb-0 small text-dark">$15.00/hr, 20 hrs weekly limit</p>
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
                                <p class="text-black small mt-2">
                                    Sep 23 2023 - Oct 10 2023
                                </p>
                                <div class="edux-rating-success">
                                    <p class="text-black small text-muted fw-medium mb-1">
                                        Successfully Completed
                                    </p>
                                    <div class="rating-area ratings d-inline-flex">
                                        <ul class="all-project-rating">
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"></path>
                                            </svg>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                <button href="#" class="btn prop-btn btn-outline-primary">Propose New Contact</button>
                            </div>
                            <div class="col-md-5">
                                <p class="fw-medium small mb-0 text-black">
                                    Fixed
                                </p>
                                <p class="mb-0 small text-dark">$4000 Budget</p>
                                <div class="mt-3">
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
                 <!--.pagination-->
                 <div class="pagination">
                                <div class="row">
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

<script>
const daysContainer = document.getElementById("daysContainer");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const monthYear = document.getElementById("monthYear");
const dateInput = document.getElementById("dateInput2");
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

@endpush