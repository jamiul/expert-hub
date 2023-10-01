@extends('frontend.default.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">

    <style>
        .edu-for-time {
            line-height: 0.3;
            color: #303744;
        }
    </style>

    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row clogin">
                <div class="col-xxl-7 col-xl-7 col-md-7 mx-auto">
                    <form class="needs-validation p-3" method="post">
                        <div class="card card-shadow mb-4 rounded-3  pt-4 pb-4">
                            <div class="card-body my-auto">
                                <img class="mb-4 w-50 logo" src="{{ asset('assets/frontend/default/img/eduexhub.png') }}" alt="Edu Expert Hub" />
                                <div class="">
                                    <h4 class="mt-3">Verify your email address to complete registration</h4>
                                </div>
                                <div class="custom-input-group first-input my-auto">
                                    <div>
                                        <p class="pt-4">Hi Michael.</p>
                                    </div>
                                    <div>
                                        <p>Thanks for your interest in joining EduExHub! To complete your registration, we need you to verify your email address.</p>
                                    </div>
                                </div>
                                <button type="button"
                                    class="border-all-5 w-100 btn btn-lg btn-primary mt-3 btn-join">Verify Email</button>
                                <div class="edu-for-time pt-4">
                                    <p class="pt-4">Thanks for your time,</p>
                                    <p>The EduExHub Team</p>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
