@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row csignup">
                <div class="form border p-5 rounded justify-content-center">
                    <div class="sign-up-form mb-5">
                        <h2 class="fw-bold">Sign Up</h2>
                    </div>
                    <form class="needs-validation" method="post">
                        <div class="row g-3">
                            <div class="d-grid gap-2 col-lg-6 col-md-6 col-sm-12   my-auto mb-3">
                                <button class="btn border" type="button">
                                    <span class="google-icon-img">
                                        <img src="{{ asset('assets/frontend/default/img/google-icon.png') }}"
                                            alt="Login with gmail" />
                                    </span>Sign up with Google</button>
                            </div>
                            <div class="d-grid gap-2 col-lg-6 col-md-6 col-sm-12   my-auto mb-3">
                                <button class="btn border " type="button"> <span class="google-icon-img">
                                        <img src="{{ asset('assets/frontend/default/img/apple-fill-icon.png') }}"
                                            alt="Login with apple" />
                                    </span>Sign up with Apple</button>
                            </div>
                            <div class="row my-3">
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col-auto">OR</div>
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="textOnInput">
                                    <label for="inputText">Title</label>
                                    <select class="form-select" id="country" required="">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="textOnInput">
                                    <label for="firstname">First name</label>
                                    <input class="form-control py-4" placeholder="Your First Name" type="text"
                                        name="firstname" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="textOnInput">
                                    <label for="lastname">Last name</label>
                                    <input class="form-control py-4" placeholder="Your Last Name" type="text"
                                        name="lastname" id="lastname">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="textOnInput">
                                    <label for="email">Email Address</label>
                                    <input class="form-control py-4 mt-3" placeholder="name@gmail.com" type="email"
                                        name="email" id="email">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="textOnInput">
                                    <label for="password">Password</label>
                                    <input class="form-control py-4 mt-3 " placeholder="password" type="password"
                                        name="password" id="password">
                                </div>
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="textOnInput mt-3  mb-4">
                                <label for="country">Country</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input from-input-field" id="same-address">
                            <label class="form-check-label" for="same-address">Send me emails with tips on how to find
                                projects that fit my expertise.</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Yes, I understand and agree to the EduEXHub
                                Terms of Service,including the User Agreement and Privacy Policy.</label>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-block btn-primary btn-join w-100 py-2" type="submit">Join as an Edu
                                Expert</button>
                        </div>
                        <div class="text-center  mt-3">
                            <p>Already have an account, <a href="#" class="fw-bold">Sign in</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
