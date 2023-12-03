@extends('frontend.layouts.front-layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my2 ff-colfax">
        <div class="py-4 py-lg-4">
            <div class="container">
                <div class="row cvemail">
                    <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
                        <form class="needs-validation" method="post">
                            <div class="card card-shadow mb-4 rounded-3  pt-4 pb-4">
                                <img class="mb-4 mx-auto logo"
                                    src="{{ asset('assets/frontend/default/img/consultantreg/letter.png') }}"
                                    alt="Edu Expert Hub" />
                                <div>
                                    <h4 class="mt-3 text-center mx-auto">Verify your email address</h4>
                                </div>
                                <div class="card-body my-auto">
                                    <p>We just sent an email to your email address. Please check your email inbox and click
                                        the link provided to verify your email address.</p>
                                    <div class="row profile-chlinks text-center">
                                        <div class="col-sm-5 pl-0 pr-0 pb-2">
                                            <a href="#" class="a-underline">Change email address</a>
                                        </div>
                                        <div class="col-sm-7 pl-0 pr-0 pb-2">
                                            <a href="#" class="a-underline">I need help verifying my email address</a>
                                        </div>
                                        </p>
                                        <button type="button"
                                            class="w-100 btn btn-lg btn-primary mt-3 btn-join ff-colfax">Resend
                                            verification email</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
