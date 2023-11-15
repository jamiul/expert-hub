@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
<!-- sub menu start -->
<nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Add Payment Method</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-id-verify" class="text-white fw-medium px-2 py-3 d-inline-block active">Tax information</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-notification-settings" class="text-white fw-medium px-2 py-3 d-inline-block">Get Paid</a>
                </li> 
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->
   <main class="expert__dashboad contract__page proposal__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class=" px-4 px-md-5 py-4 pt-md-5 pb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h1 class="lead-lg fw-medium text-black mb-3">Tax information</h1>
                        <button class="btn btn-primary add__manual__btn d-inline-flex align-items-center">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0007 16.9999H7.33398V14.9999H15.0007V7.33325H17.0006V14.9999H24.6673V16.9999H17.0006V24.6665H15.0007V16.9999Z" fill="white"/>
                            </svg>
                            <span class="ps-2">Add Tax Information</span>
                        </button>
                    </div>
                    
                    <p>This information is required in order to confirm if you are a Australia or non-Australia taxpayer and whether or not EduExHub is required to withhold taxes from your earnings. Add your tax information now to avoid delays in getting paid.</p>
                    <div class="my-services">
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <div>
                                    <span>Tax Residence</span>
                                    <span class="bg-success py-1 px-3 fs-13 fw-medium rounded-pill text-white ms-2">Completed</span>
                                    <p class="fw-normal fs-6 mt-2">Your tax residence information is part of the EduExHub W-9 or W-8 form process. This address will be displayed on invoices.</p>
                                </div>

                                <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <div class="prof-expart">
                                            <p class="fw-medium">Address</p>
                                            <p>4/181-187 Hay St<br/>Sydney, New South Wales<br/>Australia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <div>
                                    <span>Tax Residence</span>
                                    <span class="bg-success py-1 px-3 fs-13 fw-medium rounded-pill text-white ms-2">Completed</span>
                                    <p class="fw-normal fs-6 mt-2">Your tax residence information is part of the EduExHub W-9 or W-8 form process. This address will be displayed on invoices.</p>
                                </div>

                                <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <div class="prof-expart">
                                            <p class="fw-medium">Address</p>
                                            <p>4/181-187 Hay St<br/>Sydney, New South Wales<br/>Australia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <div>
                                    <span>Tax Residence</span>
                                    <p class="fw-normal fs-6 mt-2">Your tax residence information is part of the EduExHub W-9 or W-8 form process. This address will be displayed on invoices.</p>
                                </div>

                                <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <div class="prof-expart">
                                            <p class="fw-medium">Legal name of taxpayer</p>
                                            <p>Michel Jhon</p>
                                            <p class="fw-medium mt-3">Federal tax classification</p>
                                            <p>Individual</p>
                                            <p class="fw-medium mt-3">Country of citizenship</p>
                                            <p>Australia</p>
                                            <p class="fw-medium mt-3">Date of birth</p>
                                            <p>10/30/1989</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-services-list">
                            <div class="row"> 
                                <h3 class="d-flex justify-content-between align-items-center ">
                                <div>
                                    <span>Tax Residence</span>
                                    <p class="fw-normal fs-6 mt-2">Your tax residence information is part of the EduExHub W-9 or W-8 form process. This address will be displayed on invoices.</p>
                                </div>

                                <button data-bs-toggle="modal" data-bs-target="#modalSetting" class="ms-2 btn edit__fab__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29488 16.3333H5.32532L13.0417 8.61692L12.0113 7.58647L4.29488 15.3029V16.3333ZM15.7147 7.71309L12.9023 4.92628L13.9888 3.83976C14.2335 3.5951 14.531 3.47278 14.8814 3.47278C15.2318 3.47278 15.5294 3.5951 15.774 3.83976L16.7884 4.85415C17.0331 5.09881 17.1597 5.39207 17.1682 5.73395C17.1768 6.07582 17.0587 6.36908 16.8141 6.61374L15.7147 7.71309ZM14.8109 8.62974L5.85736 17.5833H3.04492V14.7708L11.9984 5.81728L14.8109 8.62974ZM12.5225 8.09769L12.0113 7.58647L13.0417 8.61692L12.5225 8.09769Z" fill="#0036E3"/>
                                    </svg>
                                </button>
                                </h3>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <div class="prof-expart">
                                            <p class="fw-medium">Address</p>
                                            <p>4/181-187 Hay St<br/>Sydney, New South Wales<br/>Australia</p>
                                        </div>
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

