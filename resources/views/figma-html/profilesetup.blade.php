@extends('frontend.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my2">
        <div class="container my-5">
            <div class="row g-5 psetup">
                <div class="col-md-5 col-lg-3 order-md-last mx-auto text-center col-profile-pic">
                    <h4 class="d-flex mb-3 justify-content-center">
                        Example Profile
                    </h4>
                    <div class="py-5 card-shadow">
                        <div class="px-5">
                            <img src="../assets/frontend/default/img/user-picture.png" class="card-img-top profile-pic mb-3"
                                alt="User Image">
                        </div>
                        <div class="card-body pt-2">
                            <h4 class="card-title mb-2">Michael Kassiou</h4>
                            <p class="card-text">Curriculum Development Specialist</p>
                            <p class="mb-2">
                                <i class="las la-map-marker fs-5"></i>
                                <b>Sydney, Australia</b>
                            </p>
                            <p class="mb-2">
                                <i class="las la-clock fs-5"></i>
                                <b>10:15 AM AEST</b>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-7 col-lg-9 ">
                    <h3 class="text-bold mb-4">Hi, Michael. Let's set up your Edu Expert profile</h3>
                    <div class="input-icons form-control">
                        <input class="input-field" type="text"
                            placeholder="Create your consultant profile by answering a few questions">
                    </div>
                    <div class="input-icons form-control">
                        <input class="input-field" type="text"
                            placeholder="Browse current academic projects or list academic services for clients ">
                    </div>
                    <div class="input-icons form-control">
                        <input class="input-field" type="text"
                            placeholder="Get paid securely - our team is here to help">
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-7">
                            <p class="mt-5">Create your profile takes a few minutes and you have the option to edit it later</p>
                            <button class="w-100 btn btn-primary btn-lg border-all-5 ff-colfax" type="submit">Get Started</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
