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
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block active">Job Offers</a>
               </li>
               <li class="me-3">
                  <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Saved Jobs</a>
               </li>
         </ul>
      </div>
   </nav>
   <!-- sub menu start -->
<main class="expert__dashboad contract__page proposal__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 py-4 pt-md-5 pb-4"> 
                    <h1 class="fs-23 fw-medium text-black mb-21">Jobs offer</h1>
    
                    
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="activeTab-tab" data-bs-toggle="tab" data-bs-target="#activeTab" type="button" role="tab" aria-controls="activeTab" aria-selected="true">All</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hourlyTab-tab" data-bs-toggle="tab" data-bs-target="#hourlyTab" type="button" role="tab" aria-controls="hourlyTab" aria-selected="false">Hourly (4)</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="inviteMeetTab-tab" data-bs-toggle="tab" data-bs-target="#inviteMeetTab" type="button" role="tab" aria-controls="inviteMeetTab" aria-selected="false">Fixed (2)</button>
                      </li> 
                    </ul> 
                </div><!--.//tab__btns-->
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="activeTab" role="tabpanel" aria-labelledby="activeTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-10 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-2 col-lg-1 text-start">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-10 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-2 col-lg-1 text-start">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-10 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-2 col-lg-1 text-start">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li>  
                           
                        </ul><!--./ul-->
 
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
                    </div><!--.//activeTab-->


                    <div class="tab-pane" id="hourlyTab" role="tabpanel" aria-labelledby="hourlyTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-8 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-1"> 
                                        <span class="bg-success viewed__badge py-1 fs-13 fw-medium rounded-pill text-white">Viewed</span>
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-8 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-1"> 
                                       
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-8 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-1"> 
                                        <span class="bg-success viewed__badge py-1 fs-13 fw-medium rounded-pill text-white">Viewed</span>
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-8 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-1"> 
                                       
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li>  
                           
                        </ul><!--./ul-->
 
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
                    </div><!--.//Hourly-->


                    <div class="tab-pane" id="inviteMeetTab" role="tabpanel" aria-labelledby="inviteMeetTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-9 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium text-capitalize small text-black mb-0">
                                            fixed
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-9 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium text-capitalize small text-black mb-0">
                                            fixed
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-9 col-lg-11"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-1">
                                        <p class="fw-medium text-capitalize small text-black mb-0">
                                            fixed
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li>  
                           
                        </ul><!--./ul-->

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
                    </div><!--.//Invitation for meet-->

                    
                </div><!--.//tab-pane-->
 

            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>



@endsection

@push('js')
 
@endpush