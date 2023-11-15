@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/expert-dashboard.css') }}"> 
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Password & Security</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-id-verify" class="text-white fw-medium px-2 py-3 d-inline-block active">Identity Verification</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-notification-settings" class="text-white fw-medium px-2 py-3 d-inline-block">Notification</a>
                </li> 
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->

    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 py-4 d-flex align-items-center justify-content-between border-bottom">
                    <h1 class="lead-lg fw-medium text-black mb-0">Identity Verification</h1>
                    <div>
                        <button class="btn btn-primary px-4">Get started Verify</button>
                    </div>
                </div>
                <div class="px-40 pt-4 pb-5">
                    <ul class="verification__list">
                        <li class="d-flex">
                            <figure class="mb-0 icon d-flex align-items-center justify-content-center rounded-circle">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/id.svg') }}" width="40" height="40" alt="id">
                            </figure>
                            <div class="caption">
                                <h2 class="lead fw-medium text-black mb-2">ID verification<i class="fa-solid fa-circle-question info__icon"></i></h2>
                                <p class="text-black mb-3">You must provide any government issued ID such as</p>
                                <ul class="disc__list mb-3">
                                    <li>Passport</li>
                                    <li>Driver’s license</li>
                                    <li>National ID</li>
                                </ul>
                                <p class="text-black mb-0">Note: ID’s must include your photo, signature, name and date of birth </p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <figure class="mb-0 icon d-flex align-items-center justify-content-center rounded-circle">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/location.svg') }}" width="40" height="40" alt="id">
                            </figure>
                            <div class="caption">
                                <h2 class="lead fw-medium text-black mb-2">Location verification<i class="fa-solid fa-circle-question info__icon"></i></h2>
                                <p class="text-black mb-3">We’ll make sure your profile location matches what’s on you ID. you must provide  documents that include your full name 
                                    and must clearly display the issuing authority name, address and phone number.</p>
                                <ul class="disc__list mb-3">
                                    <li>Bank statement</li>
                                    <li>Utility Bills</li> 
                                </ul>
                                <p class="text-black mb-0">Note:  If it doesn’t, we’ll ask you for some extra documents like</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <figure class="mb-0 icon d-flex align-items-center justify-content-center rounded-circle">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/eye.svg') }}" width="40" height="40" alt="id">
                            </figure>
                            <div class="caption">
                                <h2 class="lead fw-medium text-black mb-2">Visual verification<i class="fa-solid fa-circle-question info__icon"></i></h2>
                                <p class="text-black mb-3">We will take a photo of your face with our app which will make sure us about you. Take a photo of yourself that matches 
                                    the picture on your ID.</p>
                                <ul class="disc__list mb-3">
                                    <li>Open our visual app</li>
                                    <li>Take a photo of your face</li> 
                                </ul>
                                <p class="text-black mb-0">Note:  If it doesn’t, we’ll ask you for some extra documents</p>
                            </div>
                        </li>
                    </ul>
                    
                     
                    
                </div><!--.//px-->
            </div><!--.//main__content-->
  
        </div><!--.//container-->
    </main>



@endsection

@push('js')
 
@endpush