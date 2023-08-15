<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
    <style type="text/css">
        .datepicker {
            font-size: 0.875em;
        }

        .datepicker td,
        .datepicker th {
            width: 1.5em;
            height: 1.5em;
        }
        td.day.highlight {
            color: #DC322F;
            font-weight: 900;
        }
        .hidden{
            display: none !important;
        }
    </style>

</head>

<body>
    @extends('frontend.default.layouts.app')
    @section('content')
        <section class="mt-5">
            <div class="container-main-scholarship">
                @if ($keyword != null)
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span
                                    class="fw-600">{{ $total }}</span>
                                {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span>
                            </h1>
                        </div>
                    </div>
                @endif
                <form id="freelancer-filter-form" action="" method="GET">
                    <div class="row gutters-10">
                        <!-- Sidebar -->
                        <div class=" col-xs-3 col-sm-12 col-md-12 col-lg-3 mb-5">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap  ">
                                <div class=" rounded-0 border-0 collapse-sidebar c-scrollbar-light p-10px"
                                    style="background: #F2F7F2;">
                                    <div class=" border-0 pl-lg-0">
                                        <h5 class="my-3 fs-21 fw-700">{{ translate('Search Seminars') }}</h5>
                                        <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-times la-2x"></i>
                                        </button>
                                    </div>

                                    @foreach ($categories as $category)
                                        <span id="category_{{ $category->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $category->name }} |<p class="m-0  d-inline fw-700"
                                                onclick="removeCategory({{ $category->id }})">
                                                X</p>
                                        </span>
                                    @endforeach
                                    <!-- search bar  -->

                                    <div class="">
                                        <div class="d-flex align-items-center w-100">
                                            <button
                                                class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                                                data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                                <i class="las la-filter"></i>
                                            </button>
                                            <div class="input-group rounded-2">
                                                <input type="text" class="form-control rounded  "
                                                    placeholder="{{ translate('Search for seminar') }}" name="keyword"
                                                    value="{{ $keyword }}">
                                                <div class="input-group-prepend rounded">
                                                    <span class="input-group-text text-white border-left-0 rounded-right" :
                                                        style="background:#275846;">
                                                        <i class="las la-search"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Seminar date -->
                                    <div class="card-body pl-lg-0">
                                        <div class="">
                                            <h6 class="text-left mb-3 fs-14 fw-700">
                                                <span class=" pr-3">{{ translate('Seminar date') }}</span>
                                            </h6>
                                            <div class="mb-5">
                                                <input type="text" class="form-control" name="filterDate" placeholder="Select Date"
                                                    data-date-format="dd/mm/yyyy" id="datepicker">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seminar Mode -->

                                    <div>
                                        <h6 class="text-left mb-3 mt-3  fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Seminar Mode') }}</span>
                                        </h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Live via Zoom
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Face-to-Face
                                            </label>
                                        </div>

                                    </div>

                                    <!-- Seminar Topics -->

                                    <div class="mb-5">
                                        <h6 class="text-left mb-3 mt-3  fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Seminar Software') }}</span>
                                        </h6>

                                        <select multiple class="select2 form-control aiz-selectpicker rounded-1"
                                            data-toggle="select2" data-live-search="true" placeholder=" Search software ">

                                            <option value="0">AMOS </option>
                                            <option value="0"> SPSS</option>
                                            <option value="0"> R</option>
                                            <option value="0">Excel </option>
                                            <option value="0">EViews </option>
                                            <option value="0"> SAS</option>
                                            <option value="0">SmartPLS </option>
                                            <option value="0">Stata </option>
                                            <option value="0">Python </option>
                                            <option value="0">Minitab </option>
                                            <option value="0"> MATLAB</option>
                                            <option value="0">JMP </option>
                                            <option value="0"> IBM SPSS Modeler</option>
                                            <option value="0">ATLAS.ti </option>
                                            <option value="0"> NVivo</option>
                                            <option value="0"> MAXQDA</option>
                                            <option value="0"> Dedoose</option>
                                            <option value="0">QDA Miner </option>
                                            <option value="0">HyperRESEARCH </option>
                                            <option value="0"> Transana</option>
                                            <option value="0"> Quirkos</option>
                                            <option value="0">Weft QDA </option>
                                            <option value="0"> AnSWR</option>
                                            <option value="0"> CAQDAS</option>
                                            <option value="0"> TAMS Analyzer</option>
                                            <option value="0"> RQDA</option>
                                            <option value="0"> XSight</option>
                                            <option value="0">f4analyse </option>
                                            <option value="0"> Coding Analysis Toolkit (CAT)</option>
                                            <option value="0"> Qiqqa</option>
                                            <option value="0"> Taguette</option>
                                            <option value="0">NUD*IST (N6) </option>
                                            <option value="0">NVivo </option>
                                            <option value="0">ATLAS.ti </option>
                                            <option value="0">MAXQDA </option>
                                            <option value="0">QDA Miner </option>
                                            <option value="0">DeDoose</option>
                                            <option value="0">R</option>
                                            <option value="0">IBM SPSS</option>
                                            <option value="0">Minitab</option>
                                            <option value="0"> Excel</option>
                                            <option value="0"> TAMS Analyzer</option>
                                            <option value="0"> Transana</option>
                                            <option value="0"> HyperRESEARCH</option>
                                            <option value="0"> Quirkos</option>
                                            <option value="0"> Nvivo 12 Plus</option>
                                            <option value="0"> Dedoose</option>
                                            <option value="0">ANTHROPAC </option>
                                            <option value="0">Weft QDA </option>
                                            <option value="0">Qiqqa </option>
                                            <option value="0">Raven's Eye </option>
                                            <option value="0">CAQDAS </option>
                                        </select>
                                    </div>

                                    <!-- Languages -->
                                    <div>
                                        <h6 class="text-left mb-3 fs-14 fw-700 mt-3">
                                            <span class=" pr-3">{{ translate('Languages') }}</span>
                                        </h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                English
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                French
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Hindi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Malay
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Bangla
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDisabled">
                                            <label class="form-check-label fs-14" for="flexCheckDisabled">
                                                Chinese
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            </div>
                        </div>


                        <!-- Freelancer List -->

                        <div class="col-xs-9 col-sm-12 col-md-12 col-lg-9  c-pointer ">
                            <div class="row" style="background: #F2F7F2;">
                                <div class="col-lg-12">
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4 mt-3">
                                        <div class="row ">
                                            <div class="col-lg-10 col-12">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
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

                                                        <p class="fre-scsh-right-side-details pb-0  mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mx-1 ">
                                                    <div class="col-lg-3 col-12 p-0 ">
                                                        <p class="fre-scsh-left-side-title mb-0 p-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0 p-0">
                                                            This
                                                            seminar will give you a strong working understanding of methods
                                                            used
                                                            to design and analyse single-case experimental design studies
                                                            (i.e.,
                                                            n-of-1 trials, personalised trials, intrasubject,
                                                            single-subjects,
                                                            etc.), including the assumptions underlying these methods and
                                                            their
                                                            limitations as well as their benefits. Demonstrations using real
                                                            datasets will be incorporated together with hand-on exercise so
                                                            that
                                                            you will learn both the basic logic of single-case experiments
                                                            and
                                                            how to use them in your own research. In-depth interpretation of
                                                            the
                                                            obtained results will be made. An official ConsultantEdu,
                                                            certificate of completion is provided at the conclusion of the
                                                            seminar. For European PhD students, each seminar offers 2 ECTS..
                                                            <a href="{{ route('seminar-details') }}"><u>More info</u></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3 mx-1">
                                                    <div class="col-lg-3 col-12 p-0">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1 p-0"><span
                                                                class="fw-700">Mariola Moeyaert</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1"><span
                                                                class="fw-700">Mahammad Riyadh</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>

                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-12">
                                                <div>
                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/seminar/register.png') }}"
                                                                alt="Image" style="width:25px; " />
                                                            {{ translate('Register now') }}

                                                        </p>
                                                    </a>

                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/zoom.png') }}"
                                                                alt="Image" style="width:28px; " />
                                                            {{ translate('Zoom link') }}

                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4 mt-3">
                                        <div class="row ">
                                            <div class="col-lg-10 col-12">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
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

                                                        <p class="fre-scsh-right-side-details pb-0  mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mx-1 ">
                                                    <div class="col-lg-3 col-12 p-0 ">
                                                        <p class="fre-scsh-left-side-title mb-0 p-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0 p-0">
                                                            This
                                                            seminar will give you a strong working understanding of methods
                                                            used
                                                            to design and analyse single-case experimental design studies
                                                            (i.e.,
                                                            n-of-1 trials, personalised trials, intrasubject,
                                                            single-subjects,
                                                            etc.), including the assumptions underlying these methods and
                                                            their
                                                            limitations as well as their benefits. Demonstrations using real
                                                            datasets will be incorporated together with hand-on exercise so
                                                            that
                                                            you will learn both the basic logic of single-case experiments
                                                            and
                                                            how to use them in your own research. In-depth interpretation of
                                                            the
                                                            obtained results will be made. An official ConsultantEdu,
                                                            certificate of completion is provided at the conclusion of the
                                                            seminar. For European PhD students, each seminar offers 2 ECTS..
                                                            <a href="{{ route('seminar-details') }}"><u>More info</u></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3 mx-1">
                                                    <div class="col-lg-3 col-12 p-0">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1 p-0"><span
                                                                class="fw-700">Mariola Moeyaert</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1"><span
                                                                class="fw-700">Mahammad Riyadh</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>

                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-12">
                                                <div>
                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/seminar/register.png') }}"
                                                                alt="Image" style="width:25px; " />
                                                            {{ translate('Register now') }}

                                                        </p>
                                                    </a>

                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/zoom.png') }}"
                                                                alt="Image" style="width:28px; " />
                                                            {{ translate('Zoom link') }}

                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4 mt-3">
                                        <div class="row ">
                                            <div class="col-lg-10 col-12">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
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

                                                        <p class="fre-scsh-right-side-details pb-0  mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mx-1 ">
                                                    <div class="col-lg-3 col-12 p-0 ">
                                                        <p class="fre-scsh-left-side-title mb-0 p-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12 pl-0">

                                                        <p
                                                            class="fre-scsh-right-side-details text-justify pb-0 mb-0 p-0 fs-14">
                                                            This
                                                            seminar will give you a strong working understanding of methods
                                                            used
                                                            to design and analyse single-case experimental design studies
                                                            (i.e.,
                                                            n-of-1 trials, personalised trials, intrasubject,
                                                            single-subjects,
                                                            etc.), including the assumptions underlying these methods and
                                                            their
                                                            limitations as well as their benefits. Demonstrations using real
                                                            datasets will be incorporated together with hand-on exercise so
                                                            that
                                                            you will learn both the basic logic of single-case experiments
                                                            and
                                                            how to use them in your own research. In-depth interpretation of
                                                            the
                                                            obtained results will be made. An official ConsultantEdu,
                                                            certificate of completion is provided at the conclusion of the
                                                            seminar. For European PhD students, each seminar offers 2 ECTS..
                                                            <a href="{{ route('seminar-details') }}"><u>More info</u></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3 mx-1">
                                                    <div class="col-lg-3 col-12 p-0">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1 p-0"><span
                                                                class="fw-700">Mariola Moeyaert</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1"><span
                                                                class="fw-700">Mahammad Riyadh</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>

                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-12">
                                                <div>
                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/seminar/register.png') }}"
                                                                alt="Image" style="width:25px; " />
                                                            {{ translate('Register now') }}

                                                        </p>
                                                    </a>

                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/zoom.png') }}"
                                                                alt="Image" style="width:28px; " />
                                                            {{ translate('Zoom link') }}

                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list  mb-4 mt-3">
                                        <div class="row ">
                                            <div class="col-lg-10 col-12">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
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

                                                        <p class="fre-scsh-right-side-details pb-0  mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mx-1 ">
                                                    <div class="col-lg-3 col-12 p-0 ">
                                                        <p class="fre-scsh-left-side-title mb-0 p-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0 p-0">
                                                            This
                                                            seminar will give you a strong working understanding of methods
                                                            used
                                                            to design and analyse single-case experimental design studies
                                                            (i.e.,
                                                            n-of-1 trials, personalised trials, intrasubject,
                                                            single-subjects,
                                                            etc.), including the assumptions underlying these methods and
                                                            their
                                                            limitations as well as their benefits. Demonstrations using real
                                                            datasets will be incorporated together with hand-on exercise so
                                                            that
                                                            you will learn both the basic logic of single-case experiments
                                                            and
                                                            how to use them in your own research. In-depth interpretation of
                                                            the
                                                            obtained results will be made. An official ConsultantEdu,
                                                            certificate of completion is provided at the conclusion of the
                                                            seminar. For European PhD students, each seminar offers 2 ECTS..
                                                            <a href="{{ route('seminar-details') }}"><u>More info</u></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3 mx-1">
                                                    <div class="col-lg-3 col-12 p-0">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1 p-0"><span
                                                                class="fw-700">Mariola Moeyaert</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1"><span
                                                                class="fw-700">Mahammad Riyadh</span> |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>

                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mx-1">
                                                    <div class="col-lg-3 col-12 p-0 pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9 col-12  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4 p-0">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-12">
                                                <div>
                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/seminar/register.png') }}"
                                                                alt="Image" style="width:25px; " />
                                                            {{ translate('Register now') }}

                                                        </p>
                                                    </a>

                                                    <a href="">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">

                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/zoom.png') }}"
                                                                alt="Image" style="width:28px; " />
                                                            {{ translate('Zoom link') }}

                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                </form>
            </div>
            <div class="mt-5 pb-2 " style="background-color:#F2F7F2;">
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
                                                src=" {{ url('/public/assets/home/blog.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; border:1px solid #000000" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Post a
                                            job
                                        </p>
                                    </div>
                                    <h6 class="fs-14 mt-2  text-black text-center">
                                        Thousands of degrees, subjects and short courses from leading Australian unis in one
                                        place.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class="mb-2 mx-auto d-block text-black p-3"
                                                src="{{ url('/public/assets/home/quiz1.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; border:1px solid #000000;" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Receive
                                            proposal
                                        </p>
                                    </div>
                                    <h6 class="fs-14 mt-2  text-black text-center">
                                        Guidance to find your best option, based on what's important to you.
                                    </h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class=" mb-2 mx-auto d-block p-3"
                                                src=" {{ url('/public/assets/home/certificate.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; border:1px solid #000000" />
                                            <div class="need-help-progress-bar"></div>
                                        </div>
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Make
                                            Selection

                                        </p>
                                    </div>
                                    <h6 class="fs-14 mt-2  text-black text-center">
                                        Simplified online enrolment to give you easy access to uni study.
                                    </h6>
                                </div>

                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <img class=" mb-2 mx-auto d-block p-3"
                                            src=" {{ url('/public/assets/home/checked.png') }}" alt="Image"
                                            style="width:55px; border-radius:50%; border:1px solid #000000" />
                                        <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                            Payment Securely
                                        </p>
                                    </div>
                                    <h6 class="fs-14 mt-2  text-black text-center">
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
            // Get references to the month and year elements
            const monthSelect = document.getElementById('month');
            const yearInput = document.getElementById('year');

            // Event listener to handle changes in month or year
            monthSelect.addEventListener('change', updateCalendar);
            yearInput.addEventListener('input', updateCalendar);

            // Initial calendar rendering
            updateCalendar();

            // Function to update the calendar based on selected month and year
            function updateCalendar() {
                const month = parseInt(monthSelect.value);
                const year = parseInt(yearInput.value);

                // Clear the old calendar content
                document.getElementById('calendar').innerHTML = '';

                // Your logic to generate the calendar for the selected month and year goes here
                // You can use JavaScript to create the calendar grid and populate it with dates

                // Example: Display the selected month and year in the console
                console.log(`Selected Month: ${month}, Selected Year: ${year}`);
            }
        </script>
        <script>
            function generateCalendar() {
                var month = document.getElementById("monthSelect").value;
                var year = document.getElementById("yearInput").value;
                var daysInMonth = new Date(year, month, 0).getDate();
                var firstDay = new Date(year, month - 1, 1).getDay();
                var calendar = document.getElementById("calendar");

                var table = '<table class="table"><thead><tr><th colspan="7" class="text-center">' + year + ' - ' + month +
                    '</th></tr><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr>';

                var dayCount = 1;
                // Add blank cells for days before the first day of the month
                for (var i = 0; i < firstDay; i++) {
                    table += '<td></td>';
                }
                // Add cells for each day in the month
                for (var j = firstDay; j < 7; j++) {
                    if (dayCount <= daysInMonth) {
                        table += '<td>' + dayCount + '</td>';
                        dayCount++;
                    } else {
                        table += '<td></td>';
                    }
                }

                // Add remaining cells
                while (dayCount <= daysInMonth) {
                    if (new Date(year, month - 1, dayCount).getDay() === 0) {
                        table += '</tr><tr>';
                    }
                    table += '<td>' + dayCount + '</td>';
                    dayCount++;
                }

                table += '</tr></tbody></table>';
                calendar.innerHTML = table;
            }
        </script>
        <script>
            function removeCategory(categoryId) {

                var categoryElement = document.getElementById('category_' + categoryId);
                if (categoryElement) {
                    categoryElement.parentNode.removeChild(categoryElement);

                    // Uncheck the corresponding checkbox
                    var checkbox = document.querySelector('input[name="category_id[]"][value="' + categoryId + '"]');
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
                $('#freelancer-filter-form').submit();
            }
        </script>
    @endsection

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript">
        $('#datepicker').datepicker({
            todayHighlight: true,
            minDate: 0,
            clearBtn: true,
            // weekStart: 1,
            // daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
            beforeShowDay: function(date) {
            var hilightedDays = [5, 6, 12, 30];

            // get current month
            var currentMonth = new Date().getMonth();

            // if date.getMonth() === currentMonth, then highlight the date
            if (date.getMonth() === currentMonth && ~hilightedDays.indexOf(date.getDate()) && (hilightedDays)) {
                return {
                classes: 'highlight',
                tooltip: 'Seminar'
                }
            }
        }
    }).on('show', function(e, date) {
        $('td.highlight').tooltip();
    }).on('hide', function(e, date) {
        $('.tooltip-inner').addClass('hidden');
        $('.arrow').addClass('hidden');
    });

    $('#datepicker').datepicker("setDate", new Date());

            function applyFilter() {
                $('#freelancer-filter-form').submit();
            }

            function rangefilter(arg) {
                $('input[name=min_price]').val(arg[0]);
                $('input[name=max_price]').val(arg[1]);
                applyFilter();
            };
        </script>
    @endsection
</body>

</html>
