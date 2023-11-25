@extends('frontend.layouts.front-admin-dashboard-layout')

@section('content')

<main class="main__layout d-flex">
        <!-- start left sidebar -->
        <div class="left__sidebar"> 
         @include('figma-html/adminleftsidebar')
        </div>
        <!-- end left sidebar -->

        <div class="main__content__wrapper col">
             <!-- start header -->
            <div class="header__wrapper py-2 bg-white"> 
            @include('figma-html/admintopbar')
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
                          <button class="nav-link admin-nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-complete" type="button" role="tab" aria-controls="pills-contact-completed" aria-selected="false">Completed (12)</button>
                        </li>

                      </ul>
                          <div class="short-by-area">
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

                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>


                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>
                            </div>

                            <div class="policy-option">

                                <div class="draft-options">
                                <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle draft-option-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                  </a>
                                  <ul class="dropdown-menu admin-d-item ">
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
                            <div class="rating-comments">
                               <a  class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>

                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>

                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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

                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>

                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src=" {{ asset('assets/frontend/img/admin/comments.png') }}" alt="comments"></span> <span><p>Comment & rating</p></span> </a>                   
                               <a class="danger-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModalDispute"> <span><img src=" {{ asset('assets/frontend/img/admin/comments-danger.png') }}" alt="comments"></span> <span><p>View Dispute</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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

                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>

                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>

                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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

                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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

                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>

                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>

                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                            <div class="rating-comments">
                               <a class="success-comments" href="#" data-bs-toggle="modal" data-bs-target="#commentsModal"> <span><img src="{{ asset('assets/frontend/img/admin/comments.png') }} " alt="comments"></span> <span><p>Comment &amp; rating</p></span> </a>                   
                            </div>
                            <div class="policy-price-comment">
                              <p class="policy-price-text"> <span class="admin-fixed">Fixed:</span> $100.00/hr</p>
                            </div>
                            <div class="policy-person d-flex flex-column">
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                      <img src="{{ asset('assets/frontend/img/admin/ap1.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                                </div>
                                <div class="policy-single d-flex flex-row">
                                    <div class="admin-img-policy">
                                    <img src="{{ asset('assets/frontend/img/admin/ap2.png') }}" alt="">
                                    </div>
                                    <div class="admin-img-policy">
                                      <h4>Client: Dr Mohammad Riyadh </h4>
                                      <p>EduExHub</p>
                                      <div class="consultant-reviw consultant-point">
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
                  <div class="comment-text">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                  </div>
              </div>

              <div class="comments-content mt-3">
                  <div class="comment-rating">
                    <p class="c-rating-title">Expert comment</p>
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
</div>
</main>







@endsection
