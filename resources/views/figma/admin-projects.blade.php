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
                      <button class="nav-link admin-nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Canceled (3)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link admin-nav-link" id="pills-complete-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact-complete2" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">On hold (3)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link admin-nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-complete" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">Completed (12)</button>
                    </li>
                  </ul>

                </div>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                  <div class="edux-top-search-area">
                    <div class="eudx-top-search">
                    <x-form.search wire:model="skill" placeholder="Search by ID"/>
                    </div>

                   <div class="edux-select-date">
                        <x-form.flatpicker label="" name="datepicker"/>
                      </div>

                  </div>

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
                            <p class="mb-0 fw-medium">Total: 1:40 hrs  earned $140</p>
                            <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                            <p class="mb-0 fw-medium">Total: 1:40 hrs  earned $140</p>
                            <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                            <div class="edux-zoom-area">
                            <p class="mb-0">ID:7557uy8675656</p>
                            <div class="edux-zoom-video">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M1.98438 7.50576V14.2458C1.99038 15.7698 3.34538 16.9958 4.99838 16.9908H15.6914C15.9944 16.9908 16.2404 16.7658 16.2404 16.4928V9.75276C16.2324 8.22976 14.8774 7.00276 13.2264 7.00876H2.53137C2.22937 7.00876 1.98438 7.23276 1.98438 7.50576ZM16.9204 10.1358L21.3364 7.17276C21.7194 6.88076 22.0164 6.95376 22.0164 7.48176V16.5178C22.0164 17.1188 21.6534 17.0458 21.3364 16.8268L16.9204 13.8698V10.1358Z" fill="#0036E3"/>
                               </svg>
                               Consultation
                            </div>
                            </div>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                            <button class="edux-zoom-link">Zoom LInk</button>
                          </td>
                          <td>
                            <p class="mb-0">Fixed: $100.00/hr</p>
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
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                            <div class="edux-zoom-area">
                            <p class="mb-0">ID:7557uy8675656</p>
                            <div class="edux-zoom-video">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M1.98438 7.50576V14.2458C1.99038 15.7698 3.34538 16.9958 4.99838 16.9908H15.6914C15.9944 16.9908 16.2404 16.7658 16.2404 16.4928V9.75276C16.2324 8.22976 14.8774 7.00276 13.2264 7.00876H2.53137C2.22937 7.00876 1.98438 7.23276 1.98438 7.50576ZM16.9204 10.1358L21.3364 7.17276C21.7194 6.88076 22.0164 6.95376 22.0164 7.48176V16.5178C22.0164 17.1188 21.6534 17.0458 21.3364 16.8268L16.9204 13.8698V10.1358Z" fill="#0036E3"/>
                               </svg>
                               Training
                            </div>
                            </div>
                            <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                            <p>
                              <span class="text-black-50">From:</span> Sep 23 to Present
                            </p>
                            <button class="edux-zoom-link">Zoom LInk</button>
                          </td>
                          <td>
                            <p class="mb-0">Fixed: $100.00/hr</p>
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
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                            <p class="mb-0">Fixed: $100.00/hr</p>
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
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                            <p class="mb-0 fw-medium">Total: 1:40 hrs  earned $140</p>
                            <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          </td>
                          <td>
                            <div class="user-card-small mb-3">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
                              </div>
                            </div>
                            <div class="user-card-small">
                              <div class="user-card-img">
                                <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                              </div>
                              <div class="user-card-info">
                                <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                                <p class="mb-0">EduExHub</p>
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
                                  <button class="dropdown-item">Email Expert</button>
                                </li>
                                <li>
                                  <button class="dropdown-item">Email Client</button>
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
                    <div class="edux-top-search-area">
                      <div class="eudx-top-search">
                      <x-form.search wire:model="skill" placeholder="Search by ID"/>
                      </div>

                    <div class="edux-select-date">
                          <x-form.flatpicker label="" name="datepicker"/>
                        </div>

                    </div>
                    <table class="table border-0 edux-data-table text-sm">
                      <tr>
                        <td>
                          <p class="mb-2">ID:7557uy8675656</p>
                          <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                          <p>
                            <span class="text-black-50">From:</span> Sep 23 to Present
                          </p>
                        </td>
                        <td>
                          <span class="edux-batch edux-batch-waiting">Waiting</span>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-decline">Decline</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-decline">Decline</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-approve">Approved</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-decline">Decline</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-decline">Decline</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-decline">Decline</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
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
                          <span class="edux-batch edux-batch-approve">Approved</span>
                        </td>
                        <td>
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#adminHomeComment" class="mb-0 dispute-reason">Reason for dispute</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Clinet</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Approve</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Decline</button>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade table-responsive" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                  <div class="edux-top-search-area">
                    <div class="eudx-top-search">
                    <x-form.search wire:model="skill" placeholder="Search by ID"/>
                    </div>

                   <div class="edux-select-date">
                        <x-form.flatpicker label="" name="datepicker"/>
                      </div>

                  </div>
                    <table class="table border-0 edux-data-table text-sm">
                      <tr>
                        <td>
                          <p class="mb-2">ID:7557uy8675656</p>
                          <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                          <p>
                            <span class="text-black-50">From:</span> Sep 23 to Present
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCancel" class="mb-0 dispute-reason">Reason for Cancel</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade table-responsive" id="pills-contact-complete2" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                  <div class="edux-top-search-area">
                    <div class="eudx-top-search">
                    <x-form.search wire:model="skill" placeholder="Search by ID"/>
                    </div>

                   <div class="edux-select-date">
                        <x-form.flatpicker label="" name="datepicker"/>
                      </div>

                  </div>
                    <table class="table border-0 edux-data-table text-sm">
                      <tr>
                        <td>
                          <p class="mb-2">ID:7557uy8675656</p>
                          <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                          <p>
                            <span class="text-black-50">From:</span> Sep 23 to Present
                          </p>
                        </td>


                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
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
                          <p class="fw-medium mb-0">Total:1:40 hrs earned $140</p>
                          <p class="mb-0">$100.00/hr, 25 hrs weekly limit</p>
                          <p data-bs-toggle="modal" data-bs-target="#reasonForOnHold" class="mb-0 dispute-reason">Reason for On-hold</p>
                        </td>
                        <td>
                          <div class="user-card-small mb-3">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
                            </div>
                          </div>
                          <div class="user-card-small">
                            <div class="user-card-img">
                              <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                            </div>
                            <div class="user-card-info">
                              <p class="mb-0 fw-bold">Client: Dr Mohammad Riyadh </p>
                              <p class="mb-0">EduExHub</p>
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
                                <button class="dropdown-item">View work dairy </button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email client</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Email Expert</button>
                              </li>
                              <li>
                                <button class="dropdown-item">Unhold</button>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade table-responsive" id="pills-contact-complete" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                  <div class="edux-top-search-area">
                    <div class="eudx-top-search">
                    <x-form.search wire:model="skill" placeholder="Search by ID"/>
                    </div>

                   <div class="edux-select-date">
                        <x-form.flatpicker label="" name="datepicker"/>
                      </div>

                  </div>
                    <table class="table border-0 edux-data-table text-sm">
                      <tr>
                        <td>
                          <p class="mb-2">ID:7557uy8675656</p>
                          <p class="mb-2">Policy Development Assistance Required for Chemical Engineering Industry</p>
                          <p>
                            <span class="text-black-50">From:</span> Sep 23 to Present
                          </p>
                        </td>

                        <td>
                        <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                        <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                        <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                        <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                        <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                          <p data-bs-toggle="modal" data-bs-target="#reasonForCompleted" class="mb-0 comment-rating"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z" fill="#0036E3"/>
                          </svg> Comment & rating</p>
                        </td>
                        <td>
                          <p class="mb-0">Fixed: $100.00</p>
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
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Modal Start here -->
              <div class="modal fade" id="adminHomeComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content dropdown-comments-dispute ">
                    <div class="modal-header border-0 p-0 ">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 py-0">
                      <div class="comments-content">
                        <h5 class="modal-title fs-5 comment-title-dispute d-none" id="exampleModalLabel">Reasons dispute</h5>
                        <div class="comment-text">
                          <p class="mb-2"><span class="fw-medium">Client</span> 12 Oct 2023</p>
                          <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which... <span class="edux-read-more">View more</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="reasonForCancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content dropdown-comments-dispute ">
                    <div class="modal-header border-0 p-0 ">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 py-0">
                      <div class="comments-content">
                        <h5 class="modal-title fs-5 comment-title-dispute d-none" id="exampleModalLabel">Reasons cancel</h5>
                        <div class="comment-text">
                          <p class="mb-2"><span class="fw-medium">Client</span> 12 Oct 2023</p>
                          <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which... <span class="edux-read-more">View more</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="reasonForOnHold" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content dropdown-comments-dispute ">
                    <div class="modal-header border-0 p-0 ">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 py-0">
                      <div class="comments-content">
                        <h5 class="modal-title fs-5 comment-title-dispute d-none" id="exampleModalLabel">Reasons On-hold</h5>
                        <div class="comment-text">
                          <p class="mb-2"><span class="fw-medium">Client</span> 12 Oct 2023</p>
                          <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which... <span class="edux-read-more">View more</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal fade" id="reasonForCompleted" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content dropdown-comments-dispute ">
                    <div class="modal-header border-0 p-0 ">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 py-0">
                      <div class="comments-content">
                        <h5 class="modal-title fs-5 comment-title-dispute d-none" id="exampleModalLabel">Reasons On-hold</h5>
                        <div class="comment-text">
                                <div class="content-text-with-rating">
                                    <div class="rating-title">
                                    <p class="mb-0">
                                        <span class="fw-medium">Client comment</p>
                                          <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                    </div>
                                              <span>12 Oct 2023</span>
                                  </div>
                          <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which... <span class="edux-read-more">View more</span></p>
                        </div>
                        <div class="comment-text comment-text-border ">
                        <div class="content-text-with-rating">
                                    <div class="rating-title">
                                    <p class="mb-0">
                                        <span class="fw-medium">Expert comment</p>
                                          <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                    </div>
                                              <span>12 Oct 2023</span>
                                  </div>
                          <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which... <span class="edux-read-more">View more</span></p>
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