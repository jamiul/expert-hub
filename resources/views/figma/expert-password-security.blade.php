@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
@vite('resources/default/css/expert-dashboard.css')
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Password & Security</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-id-verify" class="text-white fw-medium px-2 py-3 d-inline-block">Identity Verification</a>
                </li>
                <li class="me-3">
                    <a href="/figma/expert-notification-settings" class="text-white fw-medium px-2 py-3 d-inline-block active">Notification</a>
                </li> 
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <main class="expert__dashboad diary__page verification__page password py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 mb-32 pt-37 d-flex align-items-center justify-content-between">
                    <h1 class="lead-lg fw-medium text-black mb-0">Password & SecurityPassword & Security</h1>
                    <div>
                        <!-- <button class="btn btn-primary px-4">Get started Verify</button> -->
                    </div>
                </div>
                <div class="px-40 pb-5 aside__wrapp border-0 bg-white">
                    <ul class="notification__list">
                        <li class="pb-4"> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div> 
                                    <p class="fw-medium text-dark mb-1">Password<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Choose a strong, unique password that’s at least 8 characters long.</p>
                                </div>
                                <div class="text-end" style="width: 7rem;"> 
                                    <a href="#" class="link text-decoration-underline fw-medium">Change</a>
                                </div>
                            </div>
                        </li>
                        <li class="py-4"> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div> 
                                    <p class="fw-medium text-black mb-1">Two-step verification options<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Add an extra layer of security to block unauthorized access and protect your account.</p>
                                </div>
                                <div style="width: 7rem;"> 
                                    <div class="toggle-button-cover ms-auto">
                                        <div class="button-cover">
                                          <div class="button position-relative overflow-hidden b2" id="button-13">
                                            <input type="checkbox" class="checkbox">
                                            <div class="knobs">
                                              <span></span>
                                            </div>
                                            <div class="layer"></div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-4"> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div> 
                                    <p class="fw-medium text-black mb-1">Text Message<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Receive a six digit code by text message to confirm it’s you.</p>
                                </div>
                                <div style="width: 7rem;"> 
                                    <div class="toggle-button-cover ms-auto">
                                        <div class="button-cover">
                                          <div class="button position-relative overflow-hidden b2" id="button-13">
                                            <input type="checkbox" class="checkbox">
                                            <div class="knobs">
                                              <span></span>
                                            </div>
                                            <div class="layer"></div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-4"> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div> 
                                    <p class="fw-medium text-black mb-1">Mobile app prompt<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Receive a prompt from your mobile app to confirm it’s you.</p>
                                </div>
                                <div style="width: 7rem;"> 
                                    <div class="toggle-button-cover ms-auto">
                                        <div class="button-cover">
                                          <div class="button position-relative overflow-hidden b2" id="button-13">
                                            <input type="checkbox" class="checkbox">
                                            <div class="knobs">
                                              <span></span>
                                            </div>
                                            <div class="layer"></div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-4"> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div> 
                                    <p class="fw-medium text-dark mb-1">Security Question<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Answer a question you choose to confirm it’s you.</p>
                                </div>
                                <div class="text-end" style="width: 7rem;"> 
                                    <a href="#" class="link text-decoration-underline fw-medium">Update</a>
                                </div>
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