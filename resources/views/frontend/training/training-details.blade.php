<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
</head>

<body>
    @extends('frontend.layouts.app')
    @section('content')
        <div class="training-content mx-auto shadow-lg my-5">
            <div class="row pt-5 mx-1" style="background: #fff;">
                <div class="col-lg-12 col-12 training-details mx-sm-2 mx-lg-0  px-lg-5 ">
                    <div class=" mb-4 mt-3">
                        <div class="row ">
                            <div class="col-10">
                                <p class="fs-24 mx-lg-1 fw-700"style="color:#5ABC76;">
                                    <u>{{ $training['title'] }}</u>
                                </p>
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <p class="fs-22 mx-lg-1 fw-700"style="color:#5ABC76;">
                                    Training overview
                                </p>
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <div class="d-lg-flex justify-content-between">
                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                    </a>
                                </div>
                                <div class="row mb-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-0">
                                            Training dates:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0">

                                        <p class="fre-scsh-right-side-details pb-0 mb-0 p-0">
                                            {{ $training['training_date'] ? formatTrainingDate($training['training_date']) : 'date not set' }}
                                        </p>

                                    </div>
                                </div>
                                <div class="row mb-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-0">
                                            Training Mode:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0 p-0">

                                        <p class="fre-scsh-right-side-details pb-0 mb-0">
                                            {{ $training['training_mode_id'] ? getTrainingModeName($training['training_mode_id']): '' }}
                                        </p>

                                    </div>
                                </div>
                                <div class="row mb-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-0">
                                            Software Package:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0">

                                        <p class="fre-scsh-right-side-details p-0 pb-0 mb-0">
                                            {{ getSoftwarePackageName($training['training_software_id']) }}
                                        </p>

                                    </div>
                                </div>

                                <div class="row mt-lg-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-1">
                                            Language:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12  pl-0">

                                        <p class="fre-scsh-right-side-details p-0  mb-1">
                                            {{ getLanguageName($training['language_id']) }}</p>

                                    </div>
                                </div>
                                <div class="row mx-1">
                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                        <p class=" fre-scsh-left-side-title ">
                                            Organiser and certificate:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12  pl-0">

                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                            {{ $training['organiser_certificate'] }}
                                        </p>
                                    </div>
                                </div>

                                <div class="row mx-1">
                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                        <p class=" fre-scsh-left-side-title ">
                                            Instructor
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0">

                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-lg-4 p-0">
                                        <p>
                                            <span class="fw-500 training-more fre-scsh-right-side-details">
                                                <u class="">{{ getInstructorName($training['user_id']) }}</u> |
                                            </span>
                                            <span class="fw-500 fre-scsh-right-side-details training-more">
                                                <u class="">{{ getInstructorName(rand(10, 14)) }}</u>
                                            </span>
                                        </p>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mx-1">
                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                        <p class=" fre-scsh-left-side-title ">
                                            Ragistration:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12  pl-0">

                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                        <div>
                                            <a class=" btn-primary border border-1 p-1 fs-16 fw-700  confirm-alert"
                                                href="" data-target="">

                                                <span class=""><u>Register now</u></span>
                                            </a>
                                            <span class="ml-2">(Note: You will be asked to sign up/sign in to
                                                ConsultantEdu before continuing)</span>

                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mx-1">
                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                        <p class=" fre-scsh-left-side-title ">
                                            Course Instructor
                                        </p>
                                    </div>
                                    <div class="col-lg-9  col-12 pl-0">

                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                        <div>
                                            <a class=" btn-primary fs-16  p-1 fw-700  confirm-alert" href=""
                                                data-target="">

                                                <span><u class="">Message now</u></span>
                                            </a>
                                            <span class="ml-2">(Note: You will be asked to sign up/sign in to
                                                ConsultantEdu before continuing)</span>

                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class=" mx-2 mx-lg-0 training-details px-lg-0 ">
                        <div class="">
                            <h5 class="training-objective  fw-700"style="color:#5ABC76;">
                                Course objectives
                            </h5>
                            <div>
                                <p class="text-justify training-objective-details">
                                    {!! $training['course_objectives'] !!}</p>
                            </div>
                            <hr>
                        </div>
                        <div class="pt-2">
                            <h5 class="fs-22 fw-700 "style="color:#5ABC76;">Learning outcomes</h5>
                            <div>
                                <p class="text-justify training-objective-details">
                                    {!! $training['learning_outcomes'] !!}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="pt-2">
                            <h5 class="fs-22 fw-700"style="color:#5ABC76;">Teaching and learning methods
                            </h5>
                            <div>
                                <p class="text-justify training-objective-details">
                                    {!! $training['teaching_learning_methods'] !!}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="pt-2">
                            <h5 class="fs-22 fw-700"style="color:#5ABC76;">Instructors</h5>
                            <p>
                                {!! $training['instructor_descriptions'] !!}
                            </p>
                            <hr>
                        </div>
                        <div class="pt-2">
                            <h5 class="fs-22 fw-700 mt-2"style="color:#5ABC76;">Teaching Resources</h5>
                            <p>
                                {!! $training['teaching_resources'] !!}
                            </p>
                            <hr>
                        </div>
                        <div class="pt-2">
                            <h6 class="fs-22 fw-700 mt-2"style="color:#5ABC76;">Software</h6>
                            <p class="text-justify training-objective-details">
                                {!! $training['software_description'] !!}
                            </p>
                        </div>
                        <div>
                            <div class="row mx-1 ">
                                <div class="col-lg-3 col-12 p-0 pr-0">
                                    <p class=" fre-scsh-left-side-title ">
                                        Ragistration:
                                    </p>
                                </div>
                                <div class="col-lg-9 col-12  pl-0">

                                    <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                    <div>
                                        <a class=" btn-primary border border-1 p-1 fs-16 fw-700  confirm-alert"
                                            href="" data-target="">

                                            <span class=""><u>Register now</u></span>
                                        </a>
                                        <span class="ml-2">(Note: You will be asked to sign up/sign in to
                                            ConsultantEdu before continuing)</span>

                                    </div>
                                    </p>
                                </div>
                            </div class="pb-2">
                            <div class="row mx-1">
                                <div class="col-lg-3 col-12 p-0  pr-0">
                                    <p class=" fre-scsh-left-side-title ">
                                        Course Instructor
                                    </p>
                                </div>
                                <div class="col-lg-9  col-12 pl-0">

                                    <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                    <div>
                                        <a class=" btn-primary fs-16  p-1 fw-700  confirm-alert" href=""
                                            data-target="">

                                            <span><u class="">Message now</u></span>
                                        </a>
                                        <span class="ml-2">(Note: You will be asked to sign up/sign in to
                                            ConsultantEdu before continuing)</span>

                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    @endsection
</body>

</html>
