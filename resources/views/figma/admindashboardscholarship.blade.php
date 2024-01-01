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
                        <section class="admin-dashboard-area  mx-auto">
                            <div class="dashboard-inprogress-area">
                                <div class="dashboard-inprogress">
                                    <div class="admin-tab-nav-area d-flex flex-row justify-content-between">
                                        <div class="short-by-area">
                                            <div class="select-date">
                                                <div class="date-item">
                                                    <div class="study-level">
                                                        <div class="calendar-box position-relative">
                                                            <input type="text" id="dateInput" placeholder="Oct 23 2023">
                                                            <div class="calendar" id="calendar">
                                                                <div class="header">
                                                                    <button id="prevBtn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="19" viewBox="0 0 18 19"
                                                                             fill="none">
                                                                            <path d="M11.25 14L6.75 9.5L11.25 5"
                                                                                  stroke="#5C5C5C" stroke-width="2"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                    </button>
                                                                    <h2 id="monthYear">Month Year</h2>
                                                                    <button id="nextBtn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="19" viewBox="0 0 18 19"
                                                                             fill="none">
                                                                            <path d="M6.75 14L11.25 9.5L6.75 5"
                                                                                  stroke="#5C5C5C" stroke-width="2"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                             viewBox="0 0 24 25" fill="none">
                                                            <path
                                                                d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z"
                                                                fill="white"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <button type="button" class="edux-btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalform" data-bs-whatever="@mdo">
                    <span class="arrow-left">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.25 12.75H5.5V11.25H11.25V5.5H12.75V11.25H18.5V12.75H12.75V18.5H11.25V12.75Z"
                              fill="white"></path>
                      </svg>
                    </span>
                                            <span class="btn-text">Post Scholarship</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="admin-dashboard-area mb-5">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table edux-scholarship-table edux-data-table text-sm">
                                                <thead>
                                                <tr>
                                                    <th>Details</th>
                                                    <th>Deadline</th>
                                                    <th>Fund Type</th>
                                                    <th>Study Level</th>
                                                    <th>Study Area</th>
                                                    <th>Currency</th>
                                                    <th>Value</th>
                                                    <th>Status</th>
                                                    <th>&#8203;</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td class="edux-scholarship-details-cell text-nowrap">
                                                        <p class="mb-2">ID:7557uy8675656</p>
                                                        <h6 class="mb-2">International Research Scholarships</h6>
                                                        <ul>
                                                            <li class="mb-2">
                                <span class="edux-scholarship-table-details-icon">
                                    <img src="{{ asset('assets/frontend/img/university-logo.png') }}" alt="">
                                </span>
                                                                <span>University of Western Sydney </span>
                                                            </li>
                                                            <li>
                            <span class="edux-scholarship-table-details-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                      fill="#A1A0A5"/>
                                </svg>
                              </span>
                                                                <span>Australia</span>
                                                            </li>
                                                        </ul>

                                                        <span class="badge rounded-pill text-bg-secondary mt-2">International</span>
                                                    </td>
                                                    <td>23 January 2024

                                                    </td>
                                                    <td> University Government

                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Master of Philosophy,</p>
                                                        <p class="mb-0">Doctors of Philosophy</p>
                                                        <p class="mb-0">Master by research</p>

                                                    </td>
                                                    <td>

                                                        <p class="mb-0">Art, Architecture, Business...
                                                        </p>


                                                    </td>
                                                    <td>AUD</td>
                                                    <td>
                                                        <span class="text-primary fw-medium">$2400</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch-button switch-button-sm"
                                                             data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <input type="checkbox" name="item1" id="item1" checked="">
                                                            <span>
                                      <label for="item1"></label>
                                    </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="btn btn-secondary draft-options dropdown-toggle draft-option-toggle"
                                                               href="#" role="button" data-bs-toggle="dropdown"
                                                               aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                     height="18" viewBox="0 0 18 18" fill="none">
                                                                    <path
                                                                        d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z"
                                                                        fill="#191D24"/>
                                                                </svg>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <button class="dropdown-item" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModalformedit">
                                                                        {{--                                            <span type="button" data-bs-toggle="modal" data-bs-target="#exampleModalformedit" data-bs-whatever="@mdo"></span>--}}
                                                                        Edit
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item">
                                                                        <span type="button" data-bs-toggle="modal"
                                                                              data-bs-target="#exampleModalDelete"
                                                                              data-bs-whatever="@mdo">Delete</span>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item">Contact to Institution</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="edux-scholarship-details-cell text-nowrap">
                                                        <p class="mb-2">ID:7557uy8675656</p>
                                                        <h6 class="mb-2">International Research Scholarships</h6>
                                                        <ul>
                                                            <li class="mb-2">
                                <span class="edux-scholarship-table-details-icon">
                                    <img src="{{ asset('assets/frontend/img/university-logo.png') }}" alt="">
                                </span>
                                                                <span>University of Western Sydney </span>
                                                            </li>
                                                            <li>
                            <span class="edux-scholarship-table-details-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                      fill="#A1A0A5"/>
                                </svg>
                              </span>
                                                                <span>Australia</span>
                                                            </li>
                                                        </ul>

                                                        <span
                                                            class="badge rounded-pill text-bg-warning mt-2">Both</span>
                                                    </td>
                                                    <td>23 January 2024

                                                    </td>
                                                    <td> University Government

                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Master of Philosophy,</p>
                                                        <p class="mb-0">Doctors of Philosophy</p>
                                                        <p class="mb-0">Master by research</p>

                                                    </td>
                                                    <td>

                                                        <p class="mb-0">Art, Architecture,</p>
                                                        <p class="mb-0">Business</p>

                                                    </td>
                                                    <td>AUD</td>
                                                    <td>
                                                        <span class="text-primary fw-medium">$2400</span>
                                                    </td>
                                                    <td>
                                                        <div class="edux-status">
                                                            <div class="check-box-option">
                                                                <ul>
                                                                    <li>
                                                                        <div class="switch-button switch-button-sm"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#exampleModal">
                                                                            <input type="checkbox" name="item1"
                                                                                   id="item1">
                                                                            <span>
                                      <label for="item1"></label>
                                    </span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="policy-option">
                                                            <div class="draft-options">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-secondary dropdown-toggle draft-option-toggle"
                                                                       href="#" role="button" data-bs-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="18" viewBox="0 0 18 18"
                                                                             fill="none">
                                                                            <path
                                                                                d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z"
                                                                                fill="#191D24"/>
                                                                        </svg>
                                                                    </a>
                                                                    <ul class="dropdown-menu admin-d-item">
                                                                        <li>
                                                                            <button
                                                                                class="dropdown-item  dropdown-heading">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalformedit"
                                                                                      data-bs-whatever="@mdo">Edit</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button class="dropdown-item">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalDelete"
                                                                                      data-bs-whatever="@mdo">Delete</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item">Contact to
                                                                                Institution</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="edux-scholarship-details-cell text-nowrap">
                                                        <p class="mb-2">ID:7557uy8675656</p>
                                                        <h6 class="mb-2">International Research Scholarships</h6>
                                                        <ul>
                                                            <li class="mb-2">
                                <span class="edux-scholarship-table-details-icon">
                                    <img src="{{ asset('assets/frontend/img/university-logo.png') }}" alt="">
                                </span>
                                                                <span>University of Western Sydney </span>
                                                            </li>
                                                            <li>
                            <span class="edux-scholarship-table-details-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                      fill="#A1A0A5"/>
                                </svg>
                              </span>
                                                                <span>Australia</span>
                                                            </li>
                                                        </ul>

                                                        <span class="badge rounded-pill text-bg-secondary mt-2">International</span>
                                                    </td>
                                                    <td>23 January 2024

                                                    </td>
                                                    <td> University Government

                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Master of Philosophy,</p>
                                                        <p class="mb-0">Doctors of Philosophy</p>
                                                        <p class="mb-0">Master by research</p>

                                                    </td>
                                                    <td>

                                                        <p class="mb-0">Art, Architecture,</p>
                                                        <p class="mb-0">Business</p>

                                                    </td>
                                                    <td>AUD</td>
                                                    <td>
                                                        <span class="text-primary fw-medium">$2400</span>
                                                    </td>
                                                    <td>
                                                        <div class="edux-status">
                                                            <div class="check-box-option">
                                                                <ul>
                                                                    <li>
                                                                        <div class="switch-button switch-button-sm"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#exampleModal">
                                                                            <input type="checkbox" name="item1"
                                                                                   id="item1">
                                                                            <span>
                                      <label for="item1"></label>
                                    </span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="policy-option">
                                                            <div class="draft-options">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-secondary dropdown-toggle draft-option-toggle"
                                                                       href="#" role="button" data-bs-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="18" viewBox="0 0 18 18"
                                                                             fill="none">
                                                                            <path
                                                                                d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z"
                                                                                fill="#191D24"/>
                                                                        </svg>
                                                                    </a>
                                                                    <ul class="dropdown-menu admin-d-item">
                                                                        <li>
                                                                            <button
                                                                                class="dropdown-item  dropdown-heading">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalformedit"
                                                                                      data-bs-whatever="@mdo">Edit</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button class="dropdown-item">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalDelete"
                                                                                      data-bs-whatever="@mdo">Delete</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item">Contact to
                                                                                Institution</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="edux-scholarship-details-cell text-nowrap">
                                                        <p class="mb-2">ID:7557uy8675656</p>
                                                        <h6 class="mb-2">International Research Scholarships</h6>
                                                        <ul>
                                                            <li class="mb-2">
                                <span class="edux-scholarship-table-details-icon">
                                    <img src="{{ asset('assets/frontend/img/university-logo.png') }}" alt="">
                                </span>
                                                                <span>University of Western Sydney </span>
                                                            </li>
                                                            <li>
                            <span class="edux-scholarship-table-details-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                      fill="#A1A0A5"/>
                                </svg>
                              </span>
                                                                <span>Australia</span>
                                                            </li>
                                                        </ul>

                                                        <span class="badge rounded-pill text-bg-secondary mt-2">International</span>
                                                    </td>
                                                    <td>23 January 2024

                                                    </td>
                                                    <td> University Government

                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Master of Philosophy,</p>
                                                        <p class="mb-0">Doctors of Philosophy</p>
                                                        <p class="mb-0">Master by research</p>

                                                    </td>
                                                    <td>

                                                        <p class="mb-0">Art, Architecture,</p>
                                                        <p class="mb-0">Business</p>

                                                    </td>
                                                    <td>AUD</td>
                                                    <td>
                                                        <span class="text-primary fw-medium">$2400</span>
                                                    </td>
                                                    <td>
                                                        <div class="edux-status">
                                                            <div class="check-box-option">
                                                                <ul>
                                                                    <li>
                                                                        <div class="switch-button switch-button-sm"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#exampleModal">
                                                                            <input type="checkbox" name="item1"
                                                                                   id="item1" checked="">
                                                                            <span>
                                      <label for="item1"></label>
                                    </span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="policy-option">
                                                            <div class="draft-options">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-secondary dropdown-toggle draft-option-toggle"
                                                                       href="#" role="button" data-bs-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="18" viewBox="0 0 18 18"
                                                                             fill="none">
                                                                            <path
                                                                                d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z"
                                                                                fill="#191D24"/>
                                                                        </svg>
                                                                    </a>
                                                                    <ul class="dropdown-menu admin-d-item">
                                                                        <li>
                                                                            <button
                                                                                class="dropdown-item  dropdown-heading">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalformedit"
                                                                                      data-bs-whatever="@mdo">Edit</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button class="dropdown-item">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalDelete"
                                                                                      data-bs-whatever="@mdo">Delete</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item">Contact to
                                                                                Institution</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="edux-scholarship-details-cell text-nowrap">
                                                        <p class="mb-2">ID:7557uy8675656</p>
                                                        <h6 class="mb-2">International Research Scholarships</h6>
                                                        <ul>
                                                            <li class="mb-2">
                                <span class="edux-scholarship-table-details-icon">
                                    <img src="{{ asset('assets/frontend/img/university-logo.png') }}" alt="">
                                </span>
                                                                <span>University of Western Sydney </span>
                                                            </li>
                                                            <li>
                            <span class="edux-scholarship-table-details-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                  <path
                                      d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                      fill="#A1A0A5"/>
                                </svg>
                              </span>
                                                                <span>Australia</span>
                                                            </li>
                                                        </ul>

                                                        <span class="badge rounded-pill text-bg-secondary mt-2">International</span>
                                                    </td>
                                                    <td>23 January 2024

                                                    </td>
                                                    <td> University Government

                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Master of Philosophy,</p>
                                                        <p class="mb-0">Doctors of Philosophy</p>
                                                        <p class="mb-0">Master by research</p>

                                                    </td>
                                                    <td>

                                                        <p class="mb-0">Art, Architecture,</p>
                                                        <p class="mb-0">Business</p>

                                                    </td>
                                                    <td>AUD</td>
                                                    <td>
                                                        <span class="text-primary fw-medium">$2400</span>
                                                    </td>
                                                    <td>
                                                        <div class="edux-status">
                                                            <div class="check-box-option">
                                                                <ul>
                                                                    <li>
                                                                        <div class="switch-button switch-button-sm"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#exampleModal">
                                                                            <input type="checkbox" name="item1"
                                                                                   id="item1">
                                                                            <span>
                                      <label for="item1"></label>
                                    </span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="policy-option">
                                                            <div class="draft-options">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-secondary dropdown-toggle draft-option-toggle"
                                                                       href="#" role="button" data-bs-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="18" viewBox="0 0 18 18"
                                                                             fill="none">
                                                                            <path
                                                                                d="M9 15C8.5875 15 8.23438 14.8531 7.94063 14.5594C7.64687 14.2656 7.5 13.9125 7.5 13.5C7.5 13.0875 7.64687 12.7344 7.94063 12.4406C8.23438 12.1469 8.5875 12 9 12C9.4125 12 9.76562 12.1469 10.0594 12.4406C10.3531 12.7344 10.5 13.0875 10.5 13.5C10.5 13.9125 10.3531 14.2656 10.0594 14.5594C9.76562 14.8531 9.4125 15 9 15ZM9 10.5C8.5875 10.5 8.23438 10.3531 7.94063 10.0594C7.64687 9.76563 7.5 9.4125 7.5 9C7.5 8.5875 7.64687 8.23438 7.94063 7.94063C8.23438 7.64688 8.5875 7.5 9 7.5C9.4125 7.5 9.76562 7.64688 10.0594 7.94063C10.3531 8.23438 10.5 8.5875 10.5 9C10.5 9.4125 10.3531 9.76563 10.0594 10.0594C9.76562 10.3531 9.4125 10.5 9 10.5ZM9 6C8.5875 6 8.23438 5.85313 7.94063 5.55938C7.64687 5.26562 7.5 4.9125 7.5 4.5C7.5 4.0875 7.64687 3.73438 7.94063 3.44063C8.23438 3.14687 8.5875 3 9 3C9.4125 3 9.76562 3.14687 10.0594 3.44063C10.3531 3.73438 10.5 4.0875 10.5 4.5C10.5 4.9125 10.3531 5.26562 10.0594 5.55938C9.76562 5.85313 9.4125 6 9 6Z"
                                                                                fill="#191D24"/>
                                                                        </svg>
                                                                    </a>
                                                                    <ul class="dropdown-menu admin-d-item">
                                                                        <li>
                                                                            <button
                                                                                class="dropdown-item  dropdown-heading">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalformedit"
                                                                                      data-bs-whatever="@mdo">Edit</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button class="dropdown-item">
                                                                                <span type="button"
                                                                                      data-bs-toggle="modal"
                                                                                      data-bs-target="#exampleModalDelete"
                                                                                      data-bs-whatever="@mdo">Delete</span>
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item">Contact to
                                                                                Institution</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================== Modal Start here =========================================-->
                            <div class="modal" data-bs-whatever="@mdo" id="exampleModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content edux-status-modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">Status</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body edux-status-modal-body">
                                            <p>Do you want to disable this scholarship?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"
                                                    class="btn btn-secondary edux-btn-border-primary-cancel"
                                                    data-bs-dismiss="modal">Cancel
                                            </button>
                                            <button type="button" class="btn btn-primary edux-btn-primary-yes">Yes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" data-bs-whatever="@mdo" id="exampleModalDelete">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content edux-status-modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">Delete Scholarship</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body edux-status-modal-body">
                                            <p>Are you sure about deleting the Scholarship?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"
                                                    class="btn btn-secondary edux-btn-border-primary-cancel"
                                                    data-bs-dismiss="modal">Cancel
                                            </button>
                                            <button type="button" class="btn btn-primary edux-btn-primary-delete">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ===================== Scholarship post Modal start here ============================================= -->
                            <div class="modal fade" id="exampleModalform" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog edux-scholarship-modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 edux-scholarship-modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Post Scholarship</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body edux-scholarship-modal-body">
                                            <div class="container">
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="inputAddress" class="form-label edux-label">Scholarship
                                                            Title</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="inputAddress" placeholder="Type scholarship name">
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Scholarship
                                                            Website</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="inputAddress2" placeholder="Add scholarship url">
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Location</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">University</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Deadline</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="inputAddress2" placeholder="Add scholarship url">
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <div class="col-md-12">
                                                            <div class="form-check edux-form-check-scholarship">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="gridCheck3">
                                                                <label class="form-check-label edux-label"
                                                                       for="gridCheck3"> Automatic
                                                                    Consideration </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">University</label>
                                                        <input type="text"
                                                               class="form-control edux-input-type university-search"
                                                               id="text" placeholder="Select university">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Student
                                                            Type</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select type</option>
                                                            <option>Select type</option>
                                                            <option>Select type</option>
                                                            <option>Select type</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">Find
                                                            Supervisor</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="text"
                                                               placeholder="Add university find supervisor url">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Application
                                                            Process</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="text" placeholder="Add application process url">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">Scholarship
                                                            Value</label>
                                                        <input type="number" class="form-control edux-input-type"
                                                               id="text" placeholder="EX: $1000">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Currency</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select currency</option>
                                                            <option>Select currency</option>
                                                            <option>Select currency</option>
                                                            <option>Select currency</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Study
                                                            Level</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Study
                                                            Area</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <p class="edux-fund-type">Fund Type</p>
                                                        <div class="row mt-2">
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck"> University </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck1">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck1"> Govt </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck2">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck2"> Project </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-12">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck3">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck3"> Automatic
                                                                        Consideration </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-12">
                                                                <div class="select-date">
                                                                    <div class="date-item">
                                                                        <div class="study-level">
                                                                            <div class="calendar-box position-relative">
                                                                                <input type="text"
                                                                                       class="edux-scholarship-datetype"
                                                                                       id="dateInput"
                                                                                       placeholder="Select deadline">
                                                                                <div class="calendar" id="calendar">
                                                                                    <div class="header">
                                                                                        <button id="prevBtn">
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="18" height="19"
                                                                                                viewBox="0 0 18 19"
                                                                                                fill="none">
                                                                                                <path
                                                                                                    d="M11.25 14L6.75 9.5L11.25 5"
                                                                                                    stroke="#5C5C5C"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                        </button>
                                                                                        <h2 id="monthYear">Month
                                                                                            Year</h2>
                                                                                        <button id="nextBtn">
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="18" height="19"
                                                                                                viewBox="0 0 18 19"
                                                                                                fill="none">
                                                                                                <path
                                                                                                    d="M6.75 14L11.25 9.5L6.75 5"
                                                                                                    stroke="#5C5C5C"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="days"
                                                                                         id="daysContainer"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer edux-modal-footer">
                                            <button type="button"
                                                    class="btn btn-secondary edux-btn-border-primary-cancel"
                                                    data-bs-dismiss="modal">Cancel
                                            </button>
                                            <button type="button" class="btn btn-primary edux-btn-primary-yes"> Create
                                                Scholarship
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalformedit" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog edux-scholarship-modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 edux-scholarship-modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Scholarship</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body edux-scholarship-modal-body">
                                            <div class="container">
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="inputAddress" class="form-label edux-label">Scholarship
                                                            Title</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="inputAddress" placeholder="Type scholarship name">
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Scholarship
                                                            Url</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="inputAddress2" placeholder="Add scholarship url">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">University</label>
                                                        <input type="text"
                                                               class="form-control edux-input-type university-search"
                                                               id="text" placeholder="Select university">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Student
                                                            Type</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select type</option>
                                                            <option>Select type</option>
                                                            <option>Select type</option>
                                                            <option>Select type</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">Find
                                                            Supervisor</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="text"
                                                               placeholder="Add university find supervisor url">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Application
                                                            Process</label>
                                                        <input type="text" class="form-control edux-input-type"
                                                               id="text" placeholder="Add application process url">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputEmail4" class="form-label edux-label">Scholarship
                                                            Value</label>
                                                        <input type="number" class="form-control edux-input-type"
                                                               id="text" placeholder="EX: $1000">
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label for="inputPassword4" class="form-label edux-label">Currency</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select currency</option>
                                                            <option>Select currency</option>
                                                            <option>Select currency</option>
                                                            <option>Select currency</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Study
                                                            Level</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                        <div class="edux-editable-content position-relative">
                                                            <p>
                                                                <span>Bachelor's Degree</span>
                                                                <span>
                                <a href="#">
                                  <img src="{{ asset('assets/frontend/img/space-delete.png') }}" alt="">
                                </a>
                              </span>
                                                            </p>
                                                            <p class="content-no-close">
                                                                <span class="count-close-text">2</span>
                                                                <span class="edux-count-close">
                                <a href="#">
                                  <img src="{{ asset('assets/frontend/img/study-close.png') }}" alt="">
                                </a>
                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <label for="inputAddress2" class="form-label edux-label">Study
                                                            Area</label>
                                                        <select id="inputState" class="form-select edux-input-type">
                                                            <option selected>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                            <option>Select options</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <p class="edux-fund-type">Fund Type</p>
                                                        <div class="row mt-2">
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck"> University </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck1">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck1"> Govt </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck2">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck2"> Project </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-12">
                                                                <div class="form-check edux-form-check-scholarship">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="gridCheck3">
                                                                    <label class="form-check-label edux-label"
                                                                           for="gridCheck3"> Automatic
                                                                        Consideration </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-12">
                                                                <div class="select-date">
                                                                    <div class="date-item">
                                                                        <div class="study-level">
                                                                            <div class="calendar-box position-relative">
                                                                                <input type="text"
                                                                                       class="edux-scholarship-datetype"
                                                                                       id="dateInput"
                                                                                       placeholder="Select deadline">
                                                                                <div class="calendar" id="calendar">
                                                                                    <div class="header">
                                                                                        <button id="prevBtn">
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="18" height="19"
                                                                                                viewBox="0 0 18 19"
                                                                                                fill="none">
                                                                                                <path
                                                                                                    d="M11.25 14L6.75 9.5L11.25 5"
                                                                                                    stroke="#5C5C5C"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                        </button>
                                                                                        <h2 id="monthYear">Month
                                                                                            Year</h2>
                                                                                        <button id="nextBtn">
                                                                                            <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="18" height="19"
                                                                                                viewBox="0 0 18 19"
                                                                                                fill="none">
                                                                                                <path
                                                                                                    d="M6.75 14L11.25 9.5L6.75 5"
                                                                                                    stroke="#5C5C5C"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="days"
                                                                                         id="daysContainer"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer edux-modal-footer">
                                            <button type="button"
                                                    class="btn btn-secondary edux-btn-border-primary-cancel"
                                                    data-bs-dismiss="modal">Cancel
                                            </button>
                                            <button type="button" class="btn btn-primary edux-btn-primary-yes"> Update
                                                Scholarship
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ===================== Scholarship post Modal start here ============================================= -->
                            <!-- ============================================== Modal End here =========================================-->
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
                                                    <label for="inputPassword6" class="col-form-label result-perpage">Results
                                                        per page</label>
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
            </main>
        </div>

    @endsection


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
