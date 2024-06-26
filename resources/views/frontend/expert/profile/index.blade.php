@extends('frontend.layouts.auth')
@section('content')
    <section class="profile-setup">
        <div class="container">
            <div class="row justify-content-center flex-md-row-reverse">
                <div class="col-lg-3 col-md-4">
                    <h2 class="h6 mb-3 text-center">Example profile</h2>
                    <div class="card card-40-20 user-profile-card border-0 card-shadow">
                        <div class="card-body">
                            <div class="user-profile-bio">
                                <div class="user-profile-picture">
                                    <img src="{{ asset('assets/frontend/img/Mask-img.jpg') }}">
                                    <button>Edit</button>
                                </div>
                                <div class="user-profile-info">
                                    <h3 class="h6">Michael Kassiou</h3>
                                    <p class="text-primary">Public Health</p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                             viewBox="0 0 25 24"
                                             fill="none">
                                            <path
                                                d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                                fill="#191D24" fill-opacity="0.5"/>
                                        </svg>
                                        <sapn> Sydney, Australia</sapn>
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                             viewBox="0 0 25 24"
                                             fill="none">
                                            <path
                                                d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                                fill="#191D24" fill-opacity="0.5"/>
                                        </svg>
                                        <span> 10.15am AEST</span>
                                    </p>
                                </div>
                            </div>
                            <div class="user-profile-language">
                                <h4>Languages</h4>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none">
                                            <path
                                                d="M12 21.5C10.6974 21.5 9.46825 21.2503 8.3125 20.7509C7.15673 20.2516 6.14872 19.5718 5.28845 18.7115C4.4282 17.8512 3.7484 16.8432 3.24905 15.6875C2.74968 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74968 9.45543 3.24905 8.3048C3.7484 7.15417 4.4282 6.14872 5.28845 5.28845C6.14872 4.4282 7.15673 3.7484 8.3125 3.24905C9.46825 2.74968 10.6974 2.5 12 2.5C13.3128 2.5 14.5445 2.74968 15.6952 3.24905C16.8458 3.7484 17.8512 4.4282 18.7115 5.28845C19.5718 6.14872 20.2516 7.15417 20.7509 8.3048C21.2503 9.45543 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.7509 15.6875C20.2516 16.8432 19.5718 17.8512 18.7115 18.7115C17.8512 19.5718 16.8458 20.2516 15.6952 20.7509C14.5445 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5102 19.3019 12.9397 18.6192 13.2885 17.9307C13.6372 17.2423 13.9211 16.4897 14.1404 15.673H9.85958C10.0916 16.5153 10.3788 17.2807 10.7211 17.9692C11.0634 18.6577 11.4897 19.3275 12 19.9788ZM10.0635 19.7038C9.68014 19.1538 9.33591 18.5285 9.03078 17.8279C8.72564 17.1272 8.48846 16.4089 8.31922 15.673H4.92688C5.45509 16.7115 6.16343 17.584 7.0519 18.2904C7.94038 18.9968 8.94424 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0596 18.9968 16.9481 18.2904C17.8365 17.584 18.5449 16.7115 19.0731 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.9211 17.8375C14.616 18.5381 14.2878 19.1602 13.9365 19.7038ZM4.29805 14.1731H8.01538C7.95256 13.8013 7.90705 13.4369 7.87885 13.0798C7.85065 12.7227 7.83655 12.3628 7.83655 12C7.83655 11.6372 7.85065 11.2772 7.87885 10.9202C7.90705 10.5631 7.95256 10.1987 8.01538 9.82688H4.29805C4.2019 10.1666 4.12818 10.5198 4.0769 10.8865C4.02562 11.2532 3.99998 11.6243 3.99998 12C3.99998 12.3756 4.02562 12.7468 4.0769 13.1135C4.12818 13.4801 4.2019 13.8333 4.29805 14.1731ZM9.51535 14.1731H14.4846C14.5474 13.8013 14.5929 13.4401 14.6212 13.0894C14.6494 12.7388 14.6635 12.3756 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9106C14.5929 10.5599 14.5474 10.1987 14.4846 9.82688H9.51535C9.45253 10.1987 9.40702 10.5599 9.3788 10.9106C9.3506 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3756 9.3506 12.7388 9.3788 13.0894C9.40702 13.4401 9.45253 13.8013 9.51535 14.1731ZM15.9846 14.1731H19.7019C19.7981 13.8333 19.8718 13.4801 19.9231 13.1135C19.9743 12.7468 20 12.3756 20 12C20 11.6243 19.9743 11.2532 19.9231 10.8865C19.8718 10.5198 19.7981 10.1666 19.7019 9.82688H15.9846C16.0474 10.1987 16.0929 10.5631 16.1211 10.9202C16.1493 11.2772 16.1634 11.6372 16.1634 12C16.1634 12.3628 16.1493 12.7227 16.1211 13.0798C16.0929 13.4369 16.0474 13.8013 15.9846 14.1731ZM15.6807 8.32693H19.0731C18.5384 7.27563 17.8349 6.40318 16.9625 5.70958C16.09 5.01599 15.0814 4.54163 13.9365 4.2865C14.3198 4.86855 14.6608 5.50509 14.9596 6.19613C15.2583 6.88716 15.4987 7.59743 15.6807 8.32693ZM9.85958 8.32693H14.1404C13.9083 7.49103 13.6163 6.72083 13.2644 6.01633C12.9125 5.31184 12.491 4.64678 12 4.02113C11.5089 4.64678 11.0875 5.31184 10.7356 6.01633C10.3836 6.72083 10.0916 7.49103 9.85958 8.32693ZM4.92688 8.32693H8.31922C8.50128 7.59743 8.74167 6.88716 9.0404 6.19613C9.33912 5.50509 9.68014 4.86855 10.0635 4.2865C8.91219 4.54163 7.90193 5.0176 7.03268 5.7144C6.16344 6.4112 5.46151 7.28204 4.92688 8.32693Z"
                                                fill="#0036E3"/>
                                        </svg>
                                        <span>Proficient in English</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="user-profile-skills">
                                <h4>Skillsets</h4>
                                <ul>
                                    <li>Public Health</li>
                                    <li>Infectious Dis.</li>
                                    <li>Curriculum Development</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-8 pe-md-5">
                    <h2 class="h5 mb-4">Hi, Michael. Let's set up your Edu Expert profile</h2>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Create your consultant profile by answering a few
                            question
                        </div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Browse current academic projects or list academic
                            services for clients
                        </div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Get paid securely - our team is here to help</div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Create your consultant profile by answering a few question
                        </div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Browse current academic projects or list academic services for clients
                        </div>
                    </div>
                    <div class="alert alert-light d-flex align-items-center" role="alert">

                        <svg class="flex-shrink-0 me-3" width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#0059C9" fill-opacity="0.06"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#5ABC76"
                                  stroke-opacity="0.1"/>
                            <path
                                d="M24 12C20.145 12 17 15.145 17 19C17 21.379 18.21 23.484 20.031 24.75C15.926 26.352 13 30.352 13 35H15C15 30.602 18.191 26.926 22.375 26.156L23 28H25L25.625 26.156C29.809 26.926 33 30.602 33 35H35C35 30.352 32.074 26.352 27.969 24.75C29.789 23.484 31 21.379 31 19C31 15.145 27.855 12 24 12ZM24 14C26.773 14 29 16.227 29 19C29 21.773 26.773 24 24 24C21.227 24 19 21.773 19 19C19 16.227 21.227 14 24 14ZM23 29L22 35H26L25 29H23Z"
                                fill="#0036E3"/>
                        </svg>

                        <div> Get paid securely - our team is here to help</div>
                    </div>

                    <div class="profile-edit-started-btn-wrapper mt-5">
                        <p class="text-sm">Create your profile takes a few minutes and you have the option to edit it
                            later</p>
                        <a class="btn btn-primary w-100 btn-lg" href="{{ route('expert.profile.create') }}">Get Started</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
