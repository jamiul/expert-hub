<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <style type="text/css">
        td.day.highlight {
            color: #DC322F;
            border-radius: 50% !important;
            border: 1px solid #275846;
            /* background-image: linear-gradient(#275846, #275846) !important; */
            color: #0a0a0a !important;
            /* font-weight: 900;
            border-radius: 50%;
            background-color: lightblue; */
        }

        .hidden {
            display: none !important;
        }

        input {
            padding: 10px 20px 10px 20px;
            border: 1px solid lightgrey !important;
            border-radius: 6px !important;
            box-sizing: border-box;
            background-color: #fff !important;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px;
        }

        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #512DA8;
            outline-width: 0;
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        .datepicker {
            background-color: #fff;
            border: none;
            padding: 15px !important
        }

        .datepicker-dropdown {
            top: 0;
            left: 0;
            min-width: 325px !important;
        }

        .datepicker table {
            margin: auto;
            width: 100%;
        }

        .datepicker table tr td.today,
        span.focused {
            border-radius: 50% !important;
        }

        thead tr:nth-child(2) {
            background-color: #275846 !important;
        }

        thead tr:nth-child(3) th {
            color: #275846 !important;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .dow,
        .old-day,
        .day,
        .new-day {
            width: 40px !important;
            height: 40px !important;
            border-radius: 0px !important;
        }

        .old-day:hover,
        .day:hover,
        .new-day:hover,
        .month:hover,
        .year:hover,
        .decade:hover,
        .century:hover {
            border-radius: 50% !important;
            background-color: #eee;
        }

        .active {
            border-radius: 50% !important;
            background-image: linear-gradient(#90CAF9, #64B5F6) !important;
            color: #fff !important;
        }

        .prev,
        .next,
        .datepicker-switch {
            border-radius: 0 !important;
            padding: 20px 10px !important;
            text-transform: uppercase;
            font-size: 20px;
            color: #fff;
            opacity: 0.8;
        }

        .prev:hover,
        .next:hover,
        .datepicker-switch:hover {
            background-color: inherit !important;
            opacity: 1;
        }
    </style>

</head>

<body>
    @extends('frontend.layouts.app')
    @section('content')
        <div class="container-main-projects-banner">
            <div class="mb-4 pb-lg-4" style="background:#275846">
                <div class="row rounded-0 px-2 mt-1 mx-4">
                    <div class="col-lg-6 col-sm-12 my-auto">
                        <h3 class="text-white fw-700 fs-30  site-font mt-3">Training and Expert Support Hub</h3>
                        <p class="fw-400 text-white site-font fs-18 mb-2">Learn a wide variety of the latest statistical
                            methods by participating in expert-led trainings. Our instructors are a recognised experts in
                            their respective fields. With their talent and experience, they make statistics engaging and
                            comprehensible for researchers from diverse backgrounds.</p>
                        <a href="register?type=2"
                            class="btn rounded border site-font fs-20 frequently-qsn-title  text-white">Find Instructors</a>
                    </div>
                    <div class="col-lg-2 col-sm-12 "></div>
                    <div class="col-lg-4 col-sm-12 ">
                        <img class="banner-img"
                            src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-5">
            <div class="container-main-scholarship">
                @if ($keyword != null)
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span
                                    class="fw-600">{{ $total }}</span>
                                {{ translate('training found for') }} <span class="fw-600">{{ $keyword }}</span>
                            </h1>
                        </div>
                    </div>
                @endif
                <form id="training-filter-form" action="" method="GET">
                    <div class="row gutters-10">
                        <!-- Sidebar -->
                        <div class=" col-xs-3 col-sm-12 col-md-12 col-lg-3 mb-5">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap  ">
                                <div class=" rounded-0 border-0 collapse-sidebar c-scrollbar-light p-10px"
                                    style="background: #F2F7F2;">
                                    <div class=" border-0 pl-lg-0">
                                        <h5 class="my-3 fs-16 fw-700">{{ translate('Search Trainings') }}</h5>
                                        {{-- <button type="submit"  class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                            >
                                            <i class="las la-times la-2x"></i>
                                        </button> --}}
                                    </div>
                                    @foreach ($training_category as $category)
                                        <span id="trainingCategory_{{ $category->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $category->name }} |<p class="m-0  d-inline fw-700"
                                                onclick="removeTrainingCategory({{ $category->id }})">
                                                X</p>
                                        </span>
                                    @endforeach
                                    @foreach ($training_modes as $mode)
                                        <span id="trainingMode_{{ $mode->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $mode->name }} |<p class="m-0  d-inline fw-700"
                                                onclick="removeTrainingMode({{ $mode->id }})">
                                                X</p>
                                        </span>
                                    @endforeach
                                    @foreach ($languages as $language)
                                        <span id="trainingLanguage_{{ $language->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $language->name }} |<p class="m-0  d-inline fw-700"
                                                onclick="removeLanguage({{ $language->id }})">
                                                X</p>
                                        </span>
                                    @endforeach
                                    <!-- Training Software Badges -->
                                    @foreach ($trainingSoftware as $software)
                                        <span id="trainingSoftware_{{ $software->id }}"
                                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                                            {{ $software->name }}
                                            <p onclick="removeTrainingSoftware({{ $software->id }})"
                                                class="m-0 d-inline fw-700" style="cursor: pointer;">X</p>
                                        </span>
                                    @endforeach
                                    <!-- search bar  -->
                                    <input type="hidden" name="type" value="training">
                                    <div class="">
                                        <div class="d-flex align-items-center w-100">
                                            <button
                                                class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                                                data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                                {{-- <i class="las la-f ilter"></i> --}}
                                            </button>
                                            <div class="input-group rounded-2">
                                                <input type="text" class="form-control fs-14 rounded  "
                                                    placeholder="{{ translate('Search for training') }}" name="keyword"
                                                    value="{{ $keyword }}">
                                                <div class="input-group-prepend rounded">
                                                    <button type="submit" style="border: none;">
                                                        <span
                                                            class="input-group-text text-white border-left-0 rounded-right"
                                                            : style="background:#275846;">
                                                            <i class="las la-search"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- categories  -->
                                        <div class="mt-3">
                                            <h6 class="text-left mb-3 fs-14 fw-700">
                                                <span class="pr-3">{{ translate('Categories') }}</span>
                                            </h6>
                                            @foreach (getProjectCategory() as $category)
                                                <label class="aiz-checkbox w-100">
                                                    <input type="checkbox" name="category_id[]"
                                                        value="{{ $category['id'] }}" onchange="applyFilter()"
                                                        @if (in_array($category['id'], $category_ids)) checked @endif>
                                                    {{ $category['name'] }}
                                                    <span class="aiz-square-check"></span>
                                                    <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                        <!-- Training software -->
                                        <div class="mt-2" id="training-software" style="display: none">
                                            <h6 class="text-left mb-3 mt-3  fs-16 fw-700">
                                                <span class=" pr-3">{{ translate('Training Software') }}</span>
                                            </h6>
                                            <select class="select2 form-control rounded-1" name="training_software_id"
                                                onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                                <option value="" class="fs-16">
                                                    {{ translate('Search training software') }}
                                                </option>
                                                @foreach (getTrainingSoftwares() as $software)
                                                    <option value="{{ $software['id'] }}"
                                                        @if (in_array($software['id'], $training_software_ids)) selected @endif>
                                                        {{ $software['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Training Mode -->
                                        <div class="mt-2">
                                            <h6 class="text-left mb-3 mt-3  fs-16 fw-700">
                                                <span class=" pr-3">{{ translate('Training Mode') }}</span>
                                            </h6>
                                            <div class="aiz-checkbox-list">
                                                @foreach (getTrainingModes() as $mode)
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="training_mode_id[]"
                                                            value="{{ $mode['id'] }}" onchange="applyFilter()"
                                                            @if (in_array($mode['id'], $training_mode_ids)) checked @endif>{{ $mode['name'] }}
                                                        <span class="aiz-square-check"></span>
                                                        <span class="float-right text-secondary fs-12"></span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- Training date -->
                                        <div class="mt-2">
                                            <h6 class="text-left fs-16 py-2 fw-700">
                                                <span class="fs-16 pr-3">{{ translate('Training date') }}</span>
                                            </h6>
                                            <div class="">
                                                <input type="text" id="dp1"
                                                    class="form-control fs-14 datepicker mr-2"
                                                    placeholder="{{ 'Select Date' }}" name="training_date"
                                                    value="{{ $trainingDate ? $trainingDate : '' }}"><br>
                                            </div>
                                        </div>
                                        <!-- Languages -->
                                        <div class="mt-2">
                                            <h6 class="text-left mb-3 fs-16 fw-700 mt-3">
                                                <span class=" pr-3">{{ translate('Languages') }}</span>
                                            </h6>
                                            <div class="aiz-checkbox-list">
                                                @foreach (getLanguages() as $lang)
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="language_id[]"
                                                            value="{{ $lang['id'] }}" onchange="applyFilter()"
                                                            @if (in_array($lang['id'], $language_ids)) checked @endif>
                                                        {{ $lang['name'] }}
                                                        <span class="aiz-square-check"></span>
                                                        <span class="float-right text-secondary fs-12"></span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Training Topics -->
                                </div>
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            </div>
                        </div>
                        <!-- Training List -->
                        <div class="col-xs-9 col-sm-12 col-md-12 col-lg-9   ">
                            <div class="row" style="background: #F2F7F2;">
                                <div class="col-lg-12">
                                    <div class="mb-4 mt-2">
                                        <div class="row ">
                                            @foreach ($trainings as $training)
                                                <div class="d-lg-flex border-bottom my-2 all-scholarship-list ">
                                                    <div class="col-lg-10 col-12 ">

                                                        <a href="{{ route('training.details', $training->id) }}"
                                                            class=" fw-700"style="color:#5ABC76;">
                                                            <u class="training-title training-heading mx-1">{{ $training->title }}
                                                            </u>
                                                        </a>
                                                        <div class="d-flex justify-content-between">
                                                            <a href="#" class=" fs-16 fw-700 pb-1 "
                                                                style="border-bottom: 2px solid  #000003; color: #000003">
                                                            </a>
                                                        </div>
                                                        <div class="row mb-2 mx-1">
                                                            <div class="col-lg-3 col-12 p-0">
                                                                <p class="fre-scsh-left-side-title mb-0">
                                                                    Training Dates:
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-9 col-12 pl-0">

                                                                <p
                                                                    class="training-small-device-font fre-scsh-right-side-details pb-0  mb-0">
                                                                    {{ $training->training_date ? formattrainingDate($training->training_date) : 'date not set' }}
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="row mx-1 ">
                                                            <div class="col-12 col-lg-3 p-0 ">
                                                                <p class="fre-scsh-left-side-title mb-0 p-0">
                                                                    Training Summary:
                                                                </p>
                                                            </div>
                                                            <div class="col-12 col-lg-9 pl-0">

                                                                <p
                                                                    class="fre-scsh-right-side-details training-small-device-font text-justify  pb-0 mb-0 p-0">
                                                                    This
                                                                    training will give you a strong working understanding of
                                                                    methods
                                                                    used
                                                                    to design and analyse single-case experimental design
                                                                    studies
                                                                    (i.e.,
                                                                    n-of-1 trials, personalised trials, intrasubject,
                                                                    single-subjects,
                                                                    etc.)
                                                                    , including the assumptions underlying these methods and
                                                                    their
                                                                    limitations as well as their benefits. Demonstrations
                                                                    using
                                                                    real
                                                                    datasets will be incorporated together with hand-on
                                                                    exercise
                                                                    so
                                                                    that
                                                                    you will learn both the basic logic of single-case
                                                                    experiments
                                                                    and
                                                                    how to use them in your own research. In-depth
                                                                    interpretation of
                                                                    the
                                                                    obtained results will be made. An official
                                                                    ConsultantEdu,
                                                                    certificate of completion is provided at the conclusion
                                                                    of
                                                                    the
                                                                    training. For European PhD students, each training offers
                                                                    2
                                                                    ECTS..
                                                                    <a
                                                                        href="{{ route('training.details', $training->id) }}"><u
                                                                            class="training-more">Read More</u></a>
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="row mt-lg-3 mt-2 mx-1">
                                                            <div class="col-12 col-lg-3 p-0">
                                                                <p class="fre-scsh-left-side-title ">
                                                                    Instructors:
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="col-lg-9 col-12  pl-0 fre-scsh-right-side-details training-small-device-font  mb-1 p-0">
                                                                <span class="fw-500 training-more">
                                                                    <u>{{ getInstructorName($training->user_id) }}</u> |
                                                                </span>
                                                                <span class="fw-500 training-more">
                                                                    <u>{{ getInstructorName(rand(10, 14)) }}</u>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="row mx-1">
                                                            <div class=" col-12 col-lg-3 p-0  pr-0">
                                                                <p class=" fre-scsh-left-side-title ">
                                                                    Training Mode:
                                                                </p>
                                                            </div>
                                                            <div class="col-12 col-lg-9  pl-0">


                                                                <p
                                                                    class="fre-scsh-right-side-details training-small-device-font text-justify mb-1 pr-4 p-0">
                                                                    {{ getTrainingModeName($training->training_mode_id) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-1">
                                                            <div class="col-12 col-lg-3  p-0 pr-0">
                                                                <p class=" fre-scsh-left-side-title">
                                                                    Software Package:
                                                                </p>
                                                            </div>

                                                            <div class=" col-12 col-lg-9  pl-0">

                                                                <p
                                                                    class="fre-scsh-right-side-details training-small-device-font text-justify mb-1 pr-4 p-0">
                                                                    {{ getSoftwarePackageName($training->training_software_id) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-1">
                                                            <div class="col-12 col-lg-3 p-0 pr-0">
                                                                <p class=" fre-scsh-left-side-title ">
                                                                    Language:
                                                                </p>
                                                            </div>
                                                            <div class=" col-12 col-lg-9 pl-0">

                                                                <p
                                                                    class="fre-scsh-right-side-details training-small-device-font text-justify mb-1 pr-4 p-0">
                                                                    {{ getLanguageName($training->language_id) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mx-1">
                                                            <div class="col-12 col-lg-3 p-0 pr-0">
                                                                <p class=" fre-scsh-left-side-title ">
                                                                    Training Category:
                                                                </p>
                                                            </div>
                                                            <div class=" col-12 col-lg-9 pl-0">

                                                                <p
                                                                    class="fre-scsh-right-side-details training-small-device-font text-justify mb-1 pr-4 p-0">
                                                                    {{ $training->project_category_id ? gettrainingCategory($training->project_category_id) : '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-12">
                                                        <div class="pt-3 pt-lg-0 pt-xl-0">
                                                            <a href="">
                                                                <p class="btn btn-primary btn-sm fs-14  w-100  fw-700">

                                                                    <img class=" px-1  "
                                                                        src=" {{ asset('/assets/training/register.png') }}"
                                                                        alt="Image" style="width:25px; " />
                                                                    {{ translate('Register now') }}

                                                                </p>
                                                            </a>
                                                            <a href="{{ $training->zoom_link }}" target="_blank">
                                                                <p class="btn btn-primary btn-sm  fs-14 w-100  fw-700">

                                                                    <img class=" px-1  "
                                                                        src=" {{ asset('/assets/find-consultant/zoom.png') }}"
                                                                        alt="Image" style="width:28px; " />
                                                                    {{ translate('Zoom link') }}

                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!is_array($trainings))
                                <div class="aiz-pagination aiz-pagination-center flex-grow-1 mt-4">
                                    <ul class="pagination">
                                        {{ $trainings->links() }}
                                    </ul>
                                </div>
                            @endif
                </form>

            </div>

        </section>
        <section>
            <div class="my-5 pb-2 " style="background-color:#F2F7F2;">
                <div class="">
                    <div class="">
                        <div class=" content-title  text-center py-5">
                            <h2 class="fw-700 fs-24 text-black mb-0">Need experts advice help?</h2>
                        </div>
                        <div class="row need-help-full-body">
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class=" mb-2 mx-auto d-block   p-3"
                                                src=" {{ asset('/assets/home/post.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; background-color:#275846; border:1px solid #fff" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                            Post a
                                            job
                                        </p>
                                    </div>
                                    <h6 class="fs-16 mt-2  text-black text-center">
                                        Thousands of degrees, subjects and short courses from leading Australian unis in
                                        one
                                        place.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class="mb-2 mx-auto d-block text-black p-3"
                                                src="{{ asset('/assets/home/quiz.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; background-color:#275846; border:1px solid #fff;" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                            Receive
                                            proposal
                                        </p>
                                    </div>
                                    <h6 class="fs-16 mt-2  text-black text-center">
                                        Guidance to find your best option, based on what's important to you.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class=" mb-2 mx-auto d-block p-3"
                                                src=" {{ asset('/assets/home/enroll.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; background-color:#275846; border:1px solid #fff" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                            Make
                                            Selection

                                        </p>
                                    </div>
                                    <h6 class="fs-16 mt-2  text-black text-center">
                                        Simplified online enrolment to give you easy access to uni study.
                                    </h6>
                                </div>

                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <img class=" mb-2 mx-auto d-block  p-3"
                                            src=" {{ asset('/assets/home/check.png') }}" alt="Image"
                                            style="width:55px; background-color:#275846;  border-radius:50%; border:1px solid #fff" />

                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                            Payment Securely
                                        </p>
                                    </div>
                                    <h6 class="fs-16 mt-2  text-black text-center">
                                        Get started on your study journey today.
                                    </h6>
                                </div>

                            </div>

                        </div>
                        <div class=" text-center py-5">
                            <h5 class="btn rounded-0 text-white" style="background-color:#275846;">
                                Let's get started
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  this script to handle the "Hide All" button click -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const hideAllBtn = document.querySelector(".hide-all-btn");
                const categoryLinks = document.querySelectorAll(".category-link");
                const collapseExample = document.querySelector("#collapseExample");

                // Add click event listener to "Hide All" button
                hideAllBtn.addEventListener("click", function() {
                    // If the category container is already collapsed, don't do anything
                    if (!collapseExample.classList.contains("show")) {
                        return;
                    }

                    // Toggle the collapse state of each category
                    categoryLinks.forEach(function(link) {
                        const target = document.querySelector(link.getAttribute("href"));
                        if (target.classList.contains("show")) {
                            link.click(); // This will collapse the category
                        }
                    });
                });
            });
        </script>
        <script>
            function removeTrainingMode(Id) {

                var trainingModeElement = document.getElementById('trainingMode_' + Id);
                if (trainingModeElement) {
                    trainingModeElement.parentNode.removeChild(trainingModeElement);

                    // Uncheck the corresponding checkbox
                    var checkbox = document.querySelector('input[name="training_mode_id[]"][value="' + Id + '"]');
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
                $('#training-filter-form').submit();
            }

            function removeLanguage(Id) {
                var trainingLanguageElement = document.getElementById('trainingLanguage_' + Id);
                if (trainingLanguageElement) {
                    trainingLanguageElement.parentNode.removeChild(trainingLanguageElement);

                    // Uncheck the corresponding checkbox
                    var checkbox = document.querySelector('input[name="language_id[]"][value="' + Id + '"]');
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
                $('#training-filter-form').submit();
            }

            function removeTrainingCategory(Id) {
                var trainingCategory = document.getElementById('trainingCategory_' + Id);
                if (trainingCategory) {
                    trainingCategory.parentNode.removeChild(trainingCategory);

                    // Uncheck the corresponding checkbox
                    var checkbox = document.querySelector('input[name="category_id[]"][value="' + Id + '"]');
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
                $('#training-filter-form').submit();
            }

            function removeTrainingSoftware(Id) {
                let getTrainingSoftware = document.getElementById('trainingSoftware_' + Id);

                if (getTrainingSoftware) {
                    getTrainingSoftware.parentNode.removeChild(getTrainingSoftware);

                    // Unselect the corresponding option
                    let selectElement = document.querySelector('select[name="training_software_id"]');
                    if (selectElement) {
                        var optionElement = selectElement.querySelector('option[value="' + Id + '"]');
                        if (optionElement) {
                            optionElement.selected = false;
                        }
                    }
                }
                $('#training-filter-form').submit();
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var dateMonths = {!! json_encode($months) !!};
                var dateDays = {!! json_encode($dates) !!};

                const januaryDays = [];
                const februaryDays = [];
                const marchDays = [];
                const aprilDays = [];
                const mayDays = [];
                const juneDays = [];
                const julyDays = [];
                const augustDays = [];
                const septemberDays = [];
                const octoberDays = [];
                const novemberDays = [];
                const decemberDays = [];
                dateMonths.forEach((month, index) => {
                    if (month === 1) {
                        januaryDays.push(dateDays[index]);
                    }
                    if (month === 2) {
                        februaryDays.push(dateDays[index]);
                    }
                    if (month === 3) {
                        marchDays.push(dateDays[index]);
                    }
                    if (month === 4) {
                        aprilDays.push(dateDays[index]);
                    }
                    if (month === 5) {
                        mayDays.push(dateDays[index]);
                    }
                    if (month === 6) {
                        julyDays.push(dateDays[index]);
                    }
                    if (month === 7) {
                        julyDays.push(dateDays[index]);
                    }
                    if (month === 8) {
                        augustDays.push(dateDays[index]);
                    }
                    if (month === 9) {
                        septemberDays.push(dateDays[index]);
                    }
                    if (month === 10) {
                        octoberDays.push(dateDays[index]);
                    }
                    if (month === 11) {
                        novemberDays.push(dateDays[index]);
                    }
                    if (month === 12) {
                        decemberDays.push(dateDays[index]);
                    }
                });

                $('.datepicker').datepicker({
                    format: 'dd-mm-yyyy',
                    toggleActive: true,
                    todayHighlight: true,
                    minDate: 0,
                    clearBtn: true,
                    // weekStart: 1,
                    // daysOfWeekHighlighted: "6,0",
                    autoclose: true,
                    beforeShowDay: function(date) {
                        // get current month
                        var currentMonth = new Date().getMonth();
                        var currentYear = new Date().getFullYear();

                        console.log("Current Month: " + currentMonth);
                        console.log("Current Year: " + date.getFullYear());
                        // if date.getMonth() === currentMonth, then highlight the date
                        if (date.getMonth() === 0 && currentYear === date.getFullYear()) {
                            var hilightedDays = januaryDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 1 && currentYear === date.getFullYear()) {
                            var hilightedDays = februaryDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 2 && currentYear === date.getFullYear()) {
                            var hilightedDays = marchDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 3 && currentYear === date.getFullYear()) {
                            var hilightedDays = aprilDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 4 && currentYear === date.getFullYear()) {
                            var hilightedDays = mayDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 5 && currentYear === date.getFullYear()) {
                            var hilightedDays = juneDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 6 && currentYear === date.getFullYear()) {
                            var hilightedDays = julyDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }

                        if (date.getMonth() === 7 && currentYear === date.getFullYear()) {
                            var hilightedDays = augustDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 8 && currentYear === date.getFullYear()) {
                            var hilightedDays = septemberDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }

                        }
                        if (date.getMonth() === 9 && currentYear === date.getFullYear()) {
                            var hilightedDays = octoberDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }

                        }
                        if (date.getMonth() === 10 && currentYear === date.getFullYear()) {
                            var hilightedDays = novemberDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                        if (date.getMonth() === 11 && currentYear === date.getFullYear()) {
                            var hilightedDays = decemberDays;
                            if (hilightedDays != undefined && ~hilightedDays.indexOf(date.getDate()) && (
                                    hilightedDays)) {
                                return {
                                    classes: 'highlight',
                                    tooltip: 'Training'
                                }
                            }
                        }
                    }
                }).on('show', function(e, date) {
                    $('td.highlight').tooltip();
                }).on('hide', function(e, date) {
                    $('.tooltip-inner').addClass('hidden');
                    $('.arrow').addClass('hidden');
                }).on('changeDate', function(e, date) {
                    applyFilter();
                });
                showSemianrSoftwate();
            });

            // Hide and show training software
            function showTrainingSoftwate() {
                let trainingSoftware = {!! json_encode($category_ids) !!};
                for (let i = 0; i < trainingSoftware.length; i++) {
                    // When category "Research and Analysis"
                    // then show training software
                    if (trainingSoftware[i] == 12) {
                        $("#training-software").show();
                    }
                }
            }

            function applyFilter() {
                $('#training-filter-form').submit();
            }
        </script>
    @endsection

    <script type="text/javascript">
        function applyFilter() {
            $('#training-filter-form').submit();
        }

        function rangefilter(arg) {
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            applyFilter();
        };
    </script>
</body>

</html>
