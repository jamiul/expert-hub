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
                    <a href="{{ route('notifications.settings') }}" class="text-white fw-medium px-2 py-3 d-inline-block active">Notification</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 mb-32 pt-37 d-flex align-items-center justify-content-between">
                    <h1 class="lead-lg fw-medium text-black mb-0">Notification Settings</h1>
                    <div>
                        <!-- <button class="btn btn-primary px-4">Get started Verify</button> -->
                    </div>
                </div>
                <div class="px-40 pb-5 aside__wrapp border-0 bg-white">
                    <ul class="notification__list border rounded-3">
                        <li class="p-4">
                            <p class="lead fw-medium mb-4">Message</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fw-medium text-dark mb-1">Desktop<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                        <li class="p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fw-medium text-black mb-1">Mobile<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                        <li class="p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fw-medium text-black mb-1">Email<i class="fa-solid fa-circle-question info__icon"></i></p>
                                    <p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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

                    </ul>


                    <div class=" border rounded-3 mt-4">
                        <div class="px-4 pt-4">
                            <p class="lead fw-medium text-black mb-1">Email Updates</p>
                            <p class="text-black mb-4">(sending to e******pl@gmail.com)</p>
                        </div>

                        <ul class="notification__list">
                            <li class="p-4">
                                <p class="fw-medium text-black mb-4">Contracts</p>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="setting1" id="setting1" class="form-check-input">
                                            <label for="setting1" class="form-check-label">A hire is made or a contract begins</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="setting2" id="setting2" class="form-check-input">
                                            <label for="setting2" class="form-check-label">Time logging begins</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="setting3" id="setting3" class="form-check-input">
                                            <label for="setting3" class="form-check-label">Contract terms are modified</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-4">
                                <p class="fw-medium text-black mb-4">Membership</p>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="Subscription related" id="Subscription related" class="form-check-input">
                                            <label for="Subscription related" class="form-check-label">Subscription related</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-4">
                                <p class="fw-medium text-black mb-4">Miscellaneous</p>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="check1" id="check1" class="form-check-input">
                                            <label for="check1" class="form-check-label">EduExHub has a tip to help me start</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="check2" id="check2" class="form-check-input">
                                            <label for="check2" class="form-check-label">Notify me of EduExHub events happening in my local area</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="check3" class="form-check-input">
                                            <label for="check3" class="form-check-label">Notify me of who viewed my job post</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="check4" id="check4" class="form-check-input">
                                            <label for="check4" class="form-check-label">I have Connects expiring soon</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-4">
                                <p class="fw-medium text-black mb-4">Project recommendations for our Experts</p>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="checkid" id="checkid" class="form-check-input">
                                            <label for="checkid" class="form-check-label">Send recommendations if I qualify as top EduExHub expert</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-4">
                                <p class="fw-medium text-black mb-4">Communications from EduExHub</p>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" name="communication" id="communication" class="form-check-input">
                                            <label for="communication" class="form-check-label">Send me genuinely useful emails every now and then to help me get the most out of EduExHub</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                </div><!--.//px-->
            </div><!--.//main__content-->

        </div><!--.//container-->
    </main>



@endsection

@push('js')

@endpush
