@extends('frontend.layouts.auth')

@section('content')
    {{--    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">--}}
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col justify-content-center">
                    <div class="card card-60-40 auth-card my-60 mx-auto border-0">
                        <div class="card-body">
                            <div class="auth-card-title">
                                <h1 class="h4">Sign Up</h1>
                            </div>
                            <form method="post">
                                <div class="social-auth col-items-3">
                                    <div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21.8055 10.0415H21V10H12V14H17.6515C16.827 16.3285 14.6115 18 12 18C8.6865 18 6 15.3135 6 12C6 8.6865 8.6865 6 12 6C13.5295 6 14.921 6.577 15.9805 7.5195L18.809 4.691C17.023 3.0265 14.634 2 12 2C6.4775 2 2 6.4775 2 12C2 17.5225 6.4775 22 12 22C17.5225 22 22 17.5225 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z"
                                                    fill="#FFC107"/>
                                                <path
                                                    d="M3.15283 7.3455L6.43833 9.755C7.32733 7.554 9.48033 6 11.9998 6C13.5293 6 14.9208 6.577 15.9803 7.5195L18.8088 4.691C17.0228 3.0265 14.6338 2 11.9998 2C8.15883 2 4.82783 4.1685 3.15283 7.3455Z"
                                                    fill="#FF3D00"/>
                                                <path
                                                    d="M12.0002 22C14.5832 22 16.9302 21.0115 18.7047 19.404L15.6097 16.785C14.5719 17.5742 13.3039 18.001 12.0002 18C9.39916 18 7.19066 16.3415 6.35866 14.027L3.09766 16.5395C4.75266 19.778 8.11366 22 12.0002 22Z"
                                                    fill="#4CAF50"/>
                                                <path
                                                    d="M21.8055 10.0415H21V10H12V14H17.6515C17.2571 15.1082 16.5467 16.0766 15.608 16.7855L15.6095 16.7845L18.7045 19.4035C18.4855 19.6025 22 17 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z"
                                                    fill="#1976D2"/>
                                            </svg>
                                            Google
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                 viewBox="0 0 25 25" fill="none">
                                                <path
                                                    d="M12.0061 7.52292C11.1301 7.52292 9.77414 6.48542 8.34614 6.52292C6.46214 6.54792 4.73414 7.66042 3.76214 9.42292C1.80614 12.9604 3.25814 18.1854 5.16614 21.0604C6.10214 22.4604 7.20614 24.0354 8.67014 23.9854C10.0741 23.9229 10.6021 23.0354 12.3061 23.0354C13.9981 23.0354 14.4781 23.9854 15.9661 23.9479C17.4781 23.9229 18.4381 22.5229 19.3621 21.1104C20.4301 19.4854 20.8741 17.9104 20.8981 17.8229C20.8621 17.8104 17.9581 16.6479 17.9221 13.1479C17.8981 10.2229 20.2141 8.82292 20.3221 8.76042C19.0021 6.74792 16.9741 6.52292 16.2661 6.47292C14.4181 6.32292 12.8701 7.52292 12.0061 7.52292ZM15.1261 4.57292C15.9061 3.59792 16.4221 2.23542 16.2781 0.885422C15.1621 0.935422 13.8181 1.66042 13.0141 2.63542C12.2941 3.49792 11.6701 4.88542 11.8381 6.21042C13.0741 6.31042 14.3461 5.54792 15.1261 4.57292Z"
                                                    fill="black"/>
                                            </svg>
                                            Apple
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_34_2)">
                                                    <path
                                                        d="M21.75 0.562503H2.25C1.80756 0.558 1.3814 0.729199 1.06504 1.03853C0.74867 1.34787 0.56794 1.77007 0.5625 2.2125V21.7913C0.568923 22.233 0.750087 22.6543 1.06634 22.9628C1.3826 23.2713 1.8082 23.442 2.25 23.4375H21.75C22.1925 23.441 22.6183 23.2692 22.9345 22.9597C23.2507 22.6502 23.4316 22.2281 23.4375 21.7856V2.20688C23.4296 1.76574 23.2479 1.34555 22.9319 1.03764C22.6159 0.729724 22.1912 0.558974 21.75 0.562503Z"
                                                        fill="#0076B2"/>
                                                    <path
                                                        d="M3.94874 9.13687H7.34437V20.0625H3.94874V9.13687ZM5.64749 3.69937C6.03695 3.69937 6.41767 3.81488 6.74147 4.0313C7.06527 4.24771 7.3176 4.5553 7.46656 4.91515C7.61551 5.275 7.65439 5.67094 7.57827 6.0529C7.50216 6.43485 7.31447 6.78564 7.03894 7.0609C6.76342 7.33616 6.41245 7.52352 6.03043 7.59927C5.6484 7.67502 5.25249 7.63577 4.89278 7.48647C4.53307 7.33717 4.22573 7.08454 4.00962 6.76054C3.79352 6.43653 3.67837 6.05571 3.67874 5.66625C3.67924 5.14443 3.88688 4.64415 4.25604 4.27534C4.6252 3.90653 5.12567 3.69937 5.64749 3.69937ZM9.47437 9.13687H12.7294V10.6369H12.7744C13.2281 9.77812 14.3344 8.8725 15.9862 8.8725C19.425 8.865 20.0625 11.1281 20.0625 14.0625V20.0625H16.6669V14.7469C16.6669 13.4812 16.6444 11.8519 14.9025 11.8519C13.1606 11.8519 12.8644 13.2319 12.8644 14.6644V20.0625H9.47437V9.13687Z"
                                                        fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_34_2">
                                                        <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            LinkedIn
                                        </a>
                                    </div>
                                </div>
                                {{--social-auth--}}
                                <div class="separator">
                                    <span>OR</span>
                                </div>

                                <div class="name-fields-wrapper">
                                    <x-form.select  label="Title" name="title">
                                        <option value="">Your title</option>
                                    </x-form.select>
                                    <x-form.input type="text" label="First Name" name="first_name"
                                                  placeholder="Your first name"/>
                                    <x-form.input type="text" label="Last Name" name="last_name"
                                                  placeholder="Your last name"/>
                                </div>
                                <x-form.input type="email" label="Email Address" name="email"
                                              placeholder="name@example.com"/>
                                <x-form.input type="tel" label="Phone (optional)" name="phone"
                                              placeholder="your phone number"/>
                                <x-form.input type="password" label="Password" name="password"
                                              placeholder="Your password (8 or more characters)"/>
                                <x-form.input type="password" label="Confirm Password" name="confirm_password"
                                              placeholder="Your password (8 or more characters)"/>
                                <x-form.select label="Country" name="country_id">
                                    <option value="">Select country</option>

                                </x-form.select>
                                <div class="registration-checkboxes">
                                    <x-form.check name="send_tips">
                                        Send me emails with tips on how to find projects that fit my expertise.
                                    </x-form.check>
                                    <x-form.check name="terms_agreed" required>
                                        Yes, I understand and agree to the <a href="#">EduEXHub Terms of Service</a>,
                                        including the <a href="#">User Agreement</a> and <a href="#">Privacy Policy.</a>
                                    </x-form.check>
                                </div>
                                <div class="mt-3">
                                    <button class="button button-block button-primary" type="submit">Create Account</button>
                                </div>
                            </form>
                            <div class="auth-card-bottom">
                                <p class="">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
