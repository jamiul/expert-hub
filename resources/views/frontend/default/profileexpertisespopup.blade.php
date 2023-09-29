@extends('frontend.default.layouts.app')

@section('content')
    <style>
        .custom-input-group {
            position: relative;
        }
        .clogin .card .card-body .first-input input {
            background: #f4f7f6;
            border: 1px solid #275846;
            border-radius: 5px;
            font-weight: 700;
            font-size: 19px;
        }
        .clogin .expertise {
            font-size: 18px;
            text-align: left !important;
            padding-left: 30px !important;
        }
        .clogin button.btn.btn-primary.architecture-2, button.btn.btn-primary.lms-2{
            background-color:#5ABC76 !important;
            border-color:#4f9869;
        }
        .clogin button.btn.btn-primary.architecture-1, button.btn.btn-primary.lms-1{
            background-color:#f9f9f9 !important;
            border-color:#c3c5c8;
            color:#000000;
        }
        .d-grid.architecture-lms.gap-2.d-md-block {
            text-align: left !important;
            margin-left:30px;
            margin-top:20px;
            margin-bottom:20px;
        }
        .clogin button.btn.btn-primary.architecture-1, button.btn.btn-primary.architecture-2, button.btn.btn-primary.lms-1, button.btn.btn-primary.lms-2 {
            margin-right: 15px;
            text-align:left;
        }
        @media only screen and (max-width: 600px) {
            .d-grid.architecture-lms.gap-2.d-md-block {
            text-align: left !important;
            margin-left: 15px;
        }
        }
        .custom-input-group input[type="text"] {
            padding-left: 40px;
        }
        .custom-input-group .icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            width: 32px;
        }
        .textOnInput {
             position: relative;
        }
        .textOnInput label {
            position: absolute;
            top: -10px;
            left: 45px;
            padding: 2px;
            z-index: 1;
            background-color:#FFFFFF;
        }
        .clogin .form-control {
            width: 85%;
            margin-left:30px;
            padding: 1.675rem 0.75rem  !important;
            font-size: 1rem;
        }
        .clogin button.create-consultant.btn.btn-lg.btn-primary {
            width: 85%;
            margin-left: 30px;
        }
        .custom-input-group .bold-text {
            position: absolute;
            top: 50%;
            left: 50px;
            transform: translateY(-50%);
            font-weight: bold;
        }
        .custom-input-group input[type="radio"] {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }
    </style>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row clogin">
                <div class="col-xxl-6 col-xl-5 col-md-7 mx-auto">
                    <div class="card mb-4 text-right rounded-3 shadow-sm pt-4  pb-4">
                        <p class="pr-3">X</p>
                        <div class="">
                            <h4 class="my-0  expertise mx-auto">In which of your areas of expertise would you like to offer consultation <span class="text-left"> service? </span> </h4>
                        </div>
                        <div class="d-grid architecture-lms gap-2 d-md-block">
                            <button class="btn btn-primary architecture-1" type="button">Architecture 1</button>
                            <button class="btn btn-primary architecture-2" type="button">Architecture 2</button>
                            <button class="btn btn-primary lms-1" type="button">LMS 1</button>
                            <button class="btn btn-primary lms-2" type="button">LMS 2</button>
                        </div>
                            <div class="custom-input-group mt-3">
                                <div class="textOnInput">
                                    <label for="inputText">Value / 30 mins</label>
                                    <input class="form-control mt-3 py-2" placeholder="eg. $120 / 30 min" type="email">
                                </div>
                            </div>
                            <button type="button" class=" create-consultant btn btn-lg btn-primary mt-4 mb-3">Create Consultant</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
