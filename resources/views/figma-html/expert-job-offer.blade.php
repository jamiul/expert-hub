@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}"> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">


<main class="expert__dashboad contract__page proposal__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 py-4 pt-md-5 pb-4"> 
                    <h1 class="fs-23 fw-medium text-black mb-3">Jobs offer</h1>
    
                    
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
                                    <div class="col-md-9 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-2">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-9 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-2">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li> 
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0">
                                    <div class="col-md-9 col-lg-10"> 
                                        <h2 class="title fs-6 fw-medium"> 
                                            <a href="#">
                                                LMS Expert required for Business Administration
                                            </a>
                                        </h2>
                                        <p class="text-black small mt-2 mb-0">
                                            12 hours ago
                                        </p> 
                                    </div>
                                    <div class="col-md-3 col-lg-2">
                                        <p class="fw-medium small text-black mb-0">
                                            Hourly
                                        </p>
                                        <p class="mb-0 small text-dark">$200</p> 
                                    </div> 
                                </div> 
                            </li>  
                           
                        </ul><!--./ul-->
 
                    </div><!--.//activeTab-->


                    <div class="tab-pane" id="hourlyTab" role="tabpanel" aria-labelledby="hourlyTab-tab">
                        <ul class="feed__list">
                            <li class="feed__card tranisition">
                                <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                                    <div class="col-md-9 col-lg-10"> 
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
                                    <div class="col-md-9 col-lg-10"> 
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
                                    <div class="col-md-9 col-lg-10"> 
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
                                    <div class="col-md-9 col-lg-10"> 
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

                         
                    </div><!--.//Invitation for meet-->

                    
                </div><!--.//tab-pane-->
 

            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>



@endsection

@push('js')
 
@endpush