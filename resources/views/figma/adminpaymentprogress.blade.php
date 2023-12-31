@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

<div class="admin-layout" sidebar-size="small">
      <!-- start header -->
        <div class="admin-header">
            @include('figma/admintopbar')
        </div>
        <!-- end header -->
        <!-- start left sidebar -->
        <div class="admin-sidebar">
            @include('figma/adminleftsidebar')
        </div>
        <!-- end left sidebar -->



<main class="admin-content">
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
                          <button class="nav-link admin-nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-complete" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">Completed (12)</button>
                        </li>

                      </ul>
                          <div class="short-by-area">
                            <div class="select-date">
                              <div class="date-item">
                                <div class="study-level">
                                  <div class="calendar-box position-relative">
                                    <input type="text" id="dateInput" placeholder="Oct 23 2023">

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
                            </div>

                            <div class="search-by search-by-admin">
                              <form class="example search-form">
                                <input type="text" placeholder="Search by ID" name="search">
                                <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z" fill="white"/>
                                </svg>
                                </button>
                              </form>

                            </div>
                      </div>

                </div>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">


                        <table class="table border-0 edux-data-table text-sm">
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </a>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>


                      </tbody>
                    </table>





                        </div>
                        <div class="tab-pane fade table-responsive" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">


                        <table class="table border-0 edux-data-table text-sm">
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </button>
                               <button class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact Expert</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment hold</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment remove</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Approve</button>
                                </li>

                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </button>
                               <button class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact Expert</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment hold</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment remove</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Approve</button>
                                </li>

                              </ul>
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </button>
                               <button class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact Expert</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment hold</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment remove</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Approve</button>
                                </li>

                              </ul>
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </button>
                               <button class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact Expert</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment hold</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment remove</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Approve</button>
                                </li>

                              </ul>
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </button>
                               <button class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Contact Expert</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment hold</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Comment remove</button>
                                </li>

                                <li>
                                  <button class="dropdown-item">Approve</button>
                                </li>

                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                        </div>
                        <div class="tab-pane fade table-responsive" id="pills-contact-complete" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <table class="table border-0 edux-data-table text-sm">
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <p class="mb-2">ID:7557uy8675656</p>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                          </td>
                          <td>
                          <div class="rating-comments">
                               <button class="success-comments" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span>
                                <span><p>Comment & rating</p></span> </button>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0">Escrow: $1000.00</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                              </svg>
                            </li>
                          </ul>
                              </div>

                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                                <ul class="edux-rating">
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                </ul>
                              </div>

                            </div>
                          </td>
                          <td>
                            <div class="dropdown">
                              <a class="draft-options btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                  <path d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z" fill="#191D24" />
                                </svg>
                              </a>
                              <ul class="dropdown-menu admin-d-item">
                                <li>
                                  <button class="dropdown-item">View work dairy</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Message Client</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Hold</button>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>


                      </tbody>
                    </table>

                        </div>

                      </div>

                </div>


<!-- Modal -->


<div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content dropdown-comments ">
      <div class="modal-header border-0 p-0 ">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border-0 py-0">

          <div class="comments-content comment-border">
          <h5 class="modal-title fs-5 comment-title" id="exampleModalLabel">Reasons dispute</h5>
                  <div class="comment-rating">
                    <p class="c-rating-title">Client comment</p>
                    <div class="rating-area">
                    <ul class="edux-rating">
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                  <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911" />
                                    </svg>
                                  </li>
                                </ul>
                                      </div>

                  </div>
                  <div class="comment-text">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                  </div>
              </div>

              <div class="comments-content mt-3">
                  <div class="comment-rating">
                    <p class="c-rating-title">Expert comment</p>
                    <div class="rating-area">
                                        <ul class="all-project-rating">
                                          <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                              <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                            </svg>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                              <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                            </svg>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                              <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                            </svg>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                              <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                            </svg>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                              <path d="M5.99956 9.51326L8.76623 11.1866C9.27289 11.4933 9.89289 11.0399 9.75956 10.4666L9.02623 7.31992L11.4729 5.19993C11.9196 4.81326 11.6796 4.07993 11.0929 4.03326L7.87289 3.75993L6.61289 0.786592C6.38623 0.246592 5.61289 0.246592 5.38623 0.786592L4.12623 3.75326L0.906227 4.02659C0.31956 4.07326 0.0795601 4.80659 0.526227 5.19326L2.97289 7.31326L2.23956 10.4599C2.10623 11.0333 2.72623 11.4866 3.23289 11.1799L5.99956 9.51326Z" fill="#E9B911"/>
                                            </svg>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>

                  </div>
                  <div class="comment-text">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                  </div>
              </div>
      </div>

    </div>
  </div>
</div>



<div class="modal fade" id="commentsModalDispute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content dropdown-comments-dispute ">
      <div class="modal-header border-0 p-0 ">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border-0 py-0">

          <div class="comments-content">
          <h5 class="modal-title fs-5 comment-title-dispute" id="exampleModalLabel">Reasons dispute</h5>

                  <div class="comment-text">
                    <p>I don’t agree with client / expert </p>
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
</main>
</div>




<script>
        function submenuTrigger(element, event) {
            event.preventDefault();
            element.parentElement.classList.toggle("active-sub-menu");
        }

        function toggleClasses(parentSelector, className) {
            var parentElement = document.querySelector(parentSelector);
            if (parentElement) {
                // Toggle the specified class on the parent element
                parentElement.classList.toggle(className);
            } else {
                console.error('Parent element not found!');
            }
        }

        function removeClass(elementSelector, className) {
            var element = document.querySelector(elementSelector);

            if (element) {
                // Remove the specified class from the element
                element.classList.remove(className);
            } else {
                console.error('Element not found!');
            }
        }
    </script>



@endsection
