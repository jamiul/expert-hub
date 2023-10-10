@extends('frontend.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <section class="exp-my2">
        <div class="py-4 py-lg-4">
            <div class="container">
                <div class="row prcomplete">
                    <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <form class="needs-validation" method="post">
                            <div class="card card-shadow mb-4 rounded-3  p-4">
                                <div class="col-lg-2 pl-5">
                                    <img class="mb-4logo"
                                        src="{{ asset('assets/frontend/default/img/consultantreg/letter.png') }}"
                                        alt="Edu Expert Hub" /> 
                                </div>
                                <div class="card-body my-auto">
                                    <div>
                                        <h4 class="mt-3 fw-bold">Dear Professor Michael</h4>
                                    </div>
                                    <p class="mt-3">Thank you for taking the time to complete your EduExHub profile. Since
                                        we only list
                                        academic experts on our platform, we conduct a thorough evaluation of edu expert
                                        profiles before listing them on EduExHub. We will notify you of our decision by
                                        email
                                        within 72 hours.</p>
                                    <div class=" kind-regard-eduexhub col-sm-12 pl-0 mt-5 pr-0 pb-2 ">
                                        <p>Kind Regards</p>
                                        <p>The EduExHub Team</p>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
