@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

   <main class="expert__dashboad contract__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class=" px-4 px-md-5 py-4 pt-md-5 pb-4">
                    <h1 class="lead-lg fw-medium text-black mb-3">My Services</h1>
                    <div class="my-services">
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <span>Book Expert for Consultation</span> 
                                <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-md-3">
                                <div class="prof-img">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}"></img>
                                    <h4>Prof. Michael</h4>
                                </div>
                                </div>
                                <div class="col-md-9">
                                <div class="prof-text">
                                    <div class="prof-expart">
                                    <ul>
                                        <li>Expertise:</li>
                                        <li><a href="#">Public Health</a></li>
                                        <li><a href="#">Curriculum Development</a></li>
                                    </ul>
                                    <p>$120/30mins</p>
                                    </div>
                                    <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in  offers consultation services to educational institutions, businesses and individuals seeking expertise in</div>
                                    <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center">
                                    <span>Book Expert for TV Interview</span> 
                                    <button class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                        </svg>
                                    </button>
                                </h3>
                                <div class="col-md-3">
                                    <div class="prof-img">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt3.jpg') }}"></img>
                                        <h4>Prof. Michael</h4>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="prof-text">
                                        <div class="prof-expart">
                                            <ul>
                                                <li>Expertise:</li>
                                                <li><a href="#">Public Health</a></li>
                                                <!-- <li><a href="#">Curriculum Development</a></li> -->
                                            </ul>
                                            <!-- <p>$120/30mins</p> -->
                                        </div>
                                        <div class="profp1"><span>Prof. Michael</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>curriculum development.</span>offers consultation services to educational institutions, businesses and individuals seeking expertise in  offers consultation services to educational institutions, businesses and individuals seeking expertise in</div>
                                        <div class="profip2">To schedule a consultation, <a href="#">Book a time</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div><!--.//main__content-->
        </div><!--.//container-->
    </main>
@endsection

