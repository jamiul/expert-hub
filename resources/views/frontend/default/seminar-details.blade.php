<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')
    @section('content')
        <div class="seminar-content mx-auto shadow-lg my-5">
            <div class="row pt-5" style="background: #fff;">
                <div class="col-lg-12 col-12 seminar-details px-5 px-lg-0 ">
                    <div class=" mb-4 mt-3">
                        <div class="row ">
                            <div class="col-10">
                                <p class="fs-24 fw-700"style="color:#5ABC76;">
                                    {{ $seminar->title }}
                                </p>
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <p class="fs-22 fw-700"style="color:#5ABC76;">
                                    <u>Seminar overview</u>
                                </p>
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                    </a>
                                </div>
                                <div class="row mb-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-0">
                                            Seminar dates:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0">

                                        <p class="fre-scsh-right-side-details pb-0 mb-0 p-0">Wed Sep 6 – Fri
                                            Sep 8,
                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                        </p>

                                    </div>
                                </div>
                                <div class="row mb-2 mx-1">
                                    <div class="col-lg-3 col-12 p-0">
                                        <p class="fre-scsh-left-side-title mb-0">
                                            Seminar Mode:
                                        </p>
                                    </div>
                                    <div class="col-lg-9 col-12 pl-0 p-0">

                                        <p class="fre-scsh-right-side-details pb-0 mb-0">
                                            {{ getSeminarModeName($seminar->seminar_mode_id) }}
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
                                            {{ getSoftwarePackageName($seminar->seminar_software_id) }}
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
                                            {{ getLanguageName($seminar->language_id) }}</p>

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
                                            {{ $seminar->organiser_certificate }}
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
                                            {{-- <span class="fw-500 text-dark"><u class="seminar-more">Mariola
                                                    Moeyaert</u></span> | Associate Professor of Statistics and Director |
                                            University at
                                            Albany --}}
                                            {{ getInstructorName($seminar->user_id) }}
                                        </p>
                                        {{-- <p class="fre-scsh-right-side-details text-justify mb-1 pr-lg-4">
                                            <span class="fw-500 text-dark"><u class="seminar-more">Mariola
                                                    Moeyaert</u></span> | Associate Professor of Statistics and Director |
                                            University at
                                            Albany
                                        </p> --}}
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
                </div>
                <div class="details-seminar seminar-details px-5 px-lg-0 ">
                    <div class="">
                        <h5 class="seminar-objective fw-700 mx-auto fw-700"style="color:#5ABC76;"><u>Course objectives</u>
                        </h5>
                        <div>
                            <p class="text-justify seminar-objective-details">
                                {!! $seminar->course_objectives !!}</p>
                        </div>
                        <hr>
                    </div>
                    <div class="pt-2">
                        <h5 class="fs-22 fw-700 "style="color:#5ABC76;"><u>Learning outcomes</u></h5>
                        <div>
                            <p class="text-justify seminar-objective-details">
                                {!! $seminar->learning_outcomes !!}
                            </p>
                        </div>

                    </div>
                    <hr>
                </div>
                <div class="pt-2">
                    <h5 class="fs-22 fw-700"style="color:#5ABC76;"><u>Teaching and learning methods</u></h5>
                    <div>
                        <p class="text-justify seminar-objective-details">
                            {!! $seminar->teaching_learning_methods !!}
                        </p>


                    </div>
                    <hr>
                </div>
                {{-- <div class="pt-2">
                        <h5 class="fs-22 fw-700 text-justify"style="color:#5ABC76;"><u>Preliminary course schedule
                                (Australian
                                Eastern Standard Time)</u>
                        </h5>
                        <div>
                            
                            <h5 class="fs-20 text-dark fw-700"> December 11, 2023
                            </h5>
                            <p class="text-justify seminar-objective-details"> 09:00-10:00 PLS-SEM Clinic - Our experts
                                will be available to answer
                                PLS-SEM-related
                                questions regarding your own research models
                            </p>


                        </div>
                        <hr>
                    </div> --}}
                <div class="pt-2">
                    <h5 class="fs-22 fw-700"style="color:#5ABC76;"><u>Instructors</u></h5>
                    <div>

                        {!! $seminar->instructor_descriptions !!}





                    </div>
                    <hr>
                </div>
                <section class="pt-2">
                    <h5 class="fs-22 fw-700 mt-2"style="color:#5ABC76;"><u>Teaching Resources</u></h5>
                    <div>

                        {!! $seminar->teaching_resources !!}
                        <h5 class="fs-20 fw-700 mt-2 text-dark">Articles:</h5>

                        <li class="seminar-objective-details">Becker, J.-M. and Ismail, I. R. (2016), Accounting for
                            Sampling Weights in PLS Path
                            Modeling: Simulations and Empirical
                            Examples, European Management Journal, 34(6), 606-617.</li>
                        <li class="seminar-objective-details">Hair, J. F., Risher, J. J., Sarstedt, M., & Ringle, C. M.
                            (2019). When to Use and How to
                            Report the Results of PLS-SEM. European Business
                            Review, 31(1), 2-24.</li>
                        <li class="seminar-objective-details">Henseler, J., Ringle, C. M., & Sarstedt, M. (2015). A New
                            Criterion for Assessing
                            Discriminant Validity in Variance-based Structural
                            Equation Modeling. Journal of the Academy of Marketing Science, 43(1), 115-135.</li>
                        <li class="seminar-objective-details">Ringle, C. M., Sarstedt, M., Sinkovics, N., & Sinkovics,
                            R. R. (2023). A Perspective on
                            Using Partial LEast Squares Structural Equation
                            Modeling in Data Articles. Data in Brief, 48(June), 109074.</li>
                        <li class="seminar-objective-details">Ringle, C. M., Sarstedt, M., Sinkovics, N., & Sinkovics,
                            R. R. (2023). A Perspective on
                            Using Partial LEast Squares Structural Equation
                            Modeling in Data Articles. Data in Brief, 48(June), 109074.</li>
                        <li class="seminar-objective-details">Sarstedt, M., Hair, J. F., Nitzl, C., Ringle, C. M., &
                            Howard, M. C. (2020). Beyond a
                            Tandem Analysis of SEM and PROCESS: Use PLS-SEM
                            for Mediation Analyses! International Journal of Market Research, 62(3), 288–299.</li>
                        <li class="seminar-objective-details">Sarstedt, M., Hair, J. F., & Ringle, C. M. (2022).
                            "PLS-SEM: Indeed a Silver Bullet" –
                            Retrospective Observations and Recent
                            Advances. Journal of Marketing Theory & Practice, forthcoming</li>
                        <li class="seminar-objective-details">Sarstedt, M., Hair, J. F., Ringle, C. M., Thiele, K. O.,
                            & Gudergan, S. P. (2016).
                            Estimation Issues with PLS and CBSEM: Where the Bias
                            Lies! Journal of Business Research, 69(10), 3998-4010.</li>
                        <li class="seminar-objective-details">Sarstedt, M., Ringle, C. M., & Hair, J. F. (2022).
                            Partial Least Squares Structural
                            Equation Modeling. In Homburg, C., Klarmann, M., &
                            Vomberg, A. (Eds.), Handbook of Market Research. Cham: Springer, 587–632.</li>
                        <li class="seminar-objective-details">
                            Sharma, P. N., Liengaard, B. D., Hair, J. F., Sarstedt, M., & Ringle, C. M. (2023).
                            Predictive Model Assessment and Selection in
                            Composite-based Modeling Using PLS-SEM: Extensions and Guidelines for Using CVPAT.
                            European Journal of Marketing, 56(6), 1662-
                            1677.</li>
                        <li class="seminar-objective-details">Shmueli, G., Sarstedt, M., Hair, J. F., Cheah, J.-H.,
                            Ting, H., & Ringle, C. M. (2019).
                            Predictive model assessment in PLS-SEM: Guidelines
                            for using PLSpredict. European Journal of Marketing, 53(11), 2322-2347.</li>

                    </div>
                    <hr>
                </section>
                <section>
                    <div class="pt-2">
                        <h6 class="fs-22 fw-700 mt-2"style="color:#5ABC76;"><u>Software</u></h6>
                        <p class="text-justify seminar-objective-details">
                            {!! $seminar->software_description !!}
                        </p>
                    </div>
                </section>
                <section class="mb-lg-5">
                    <div class="row mx-1">
                        <div class="col-lg-3 col-12 p-0 pr-0">
                            <p class=" fre-scsh-left-side-title ">
                                Ragistration:
                            </p>
                        </div>
                        <div class="col-lg-9 p-0  pl-0">

                            <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                            <div>
                                <a class=" btn-primary p-1 fs-14 fw-700  confirm-alert" href="" data-target="">

                                    <span><u class="fs-16">Register now</u></span>
                                </a>
                                <span class="ml-2">(Note: You will be asked to sign up/sign in to ConsultantEdu
                                    before continuing)</span>

                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="row mx-1">
                        <div class="col-lg-3 col-12 p-0  pr-0">
                            <p class=" fre-scsh-left-side-title ">
                                Contact Instructor:
                            </p>
                        </div>
                        <div class="col-lg-9 col-12 p-0 pl-0">

                            <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                            <div>
                                <a class=" btn-primary p-1 fs-14 fw-700  confirm-alert" href="" data-target="">

                                    <span><u class="fs-16">Message now</u></span>
                                </a>
                                <span class="ml-2">(Note: You will be asked to sign up/sign in to ConsultantEdu
                                    before continuing)</span>

                            </div>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        </div>
        </div>
    @endsection
</body>

</html>
