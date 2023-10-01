@extends('frontend.default.layouts.app')

@section('content')
<style>
    .kind-regard-eduexhub{
        line-height:0.3;
        color:#6e737c;
    }
    </style>
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/consultantreg.css') }}">
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row prcomplete">
                <div class="col-xxl-5 col-xl-5 col-md-7 mx-auto">
                    <form class="needs-validation" method="post">
                        <div class="card card-shadow mb-4 rounded-3  pt-4 pb-4">
                            <div class="col-lg-2 pl-5">
                                <img class="mb-4logo"
                                    src="{{ asset('assets/frontend/default/img/consultantreg/letter.png') }}"
                                    alt="Edu Expert Hub" />
                            </div>
                            <div class="card-body my-auto">
                                <div>
                                    <h4 class="mt-3">Dear Professor Michael</h4>
                                </div>
                                <p class="mt-3">Thank you for taking the time to complete your EduExHub profile. Since we only list
                                    academic experts on our platform, we conduct a thorough evaluation of edu expert
                                    profiles before listing them on EduExHub. We will notify you of our decision by email
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
@endsection
