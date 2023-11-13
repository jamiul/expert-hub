@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
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







@endsection
