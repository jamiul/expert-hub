<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />


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
                        <div class="col-xl-3 col-lg-4 mb-5">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
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
                                    <input type="hidden" name="type" value="freelancer">
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
                                            <div class="container">
                                                <div class="calendar">
                                                    <div class="row calendar-header">
                                                        <div class="col text-center">Sun</div>
                                                        <div class="col text-center">Mon</div>
                                                        <div class="col text-center">Tue</div>
                                                        <div class="col text-center">Wed</div>
                                                        <div class="col text-center">Thur</div>
                                                        <div class="col text-center">Fri</div>
                                                        <div class="col text-center">Sat</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center calendar-cell"> </div>
                                                        <div class="col text-center calendar-cell"> </div>
                                                        <div class="col text-center calendar-cell">1</div>
                                                        <div class="col text-center calendar-cell">2</div>
                                                        <div class="col text-center calendar-cell">3</div>
                                                        <div class="col text-center calendar-cell">4</div>
                                                        <div class="col text-center calendar-cell">5</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center calendar-cell">6</div>
                                                        <div class="col text-center calendar-cell">7</div>
                                                        <div class="col text-center calendar-cell">8</div>
                                                        <div class="col text-center calendar-cell">9</div>
                                                        <div class="col text-center calendar-cell">10</div>
                                                        <div class="col text-center calendar-cell">11</div>
                                                        <div class="col text-center calendar-cell">12</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center calendar-cell">12</div>
                                                        <div class="col text-center calendar-cell">13</div>
                                                        <div class="col text-center calendar-cell">14</div>
                                                        <div class="col text-center calendar-cell">15</div>
                                                        <div class="col text-center calendar-cell">16</div>
                                                        <div class="col text-center calendar-cell">17</div>
                                                        <div class="col text-center calendar-cell">18</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center calendar-cell">19</div>
                                                        <div class="col text-center calendar-cell">20</div>
                                                        <div class="col text-center calendar-cell">21</div>
                                                        <div class="col text-center calendar-cell">22</div>
                                                        <div class="col text-center calendar-cell">23</div>
                                                        <div class="col text-center calendar-cell">24</div>
                                                        <div class="col text-center calendar-cell">25</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-center calendar-cell">26</div>
                                                        <div class="col text-center calendar-cell">27</div>
                                                        <div class="col text-center calendar-cell">28</div>
                                                        <div class="col text-center calendar-cell">29</div>
                                                        <div class="col text-center calendar-cell">30</div>
                                                        <div class="col text-center calendar-cell"></div>
                                                        <div class="col text-center calendar-cell"></div>
                                                    </div>
                                                </div>
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
                                            onchange="applyFilter()" data-toggle="select2" data-live-search="true"
                                            placeholder=" Search software ">

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

                        <div class="col-xl-9 col-lg-9  c-pointer ">
                            <div class="row" style="background: #F2F7F2;">
                                <div class="col-lg-12">
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4 mt-3">
                                        <div class="row   ">
                                            <div class="col-10">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                                    </a>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar dates:
                                                        </p>
                                                    </div>
                                                    <div class="col-9 pl-0">

                                                        <p class="fre-scsh-right-side-details pb-0 mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-8 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0">This
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
                                                            <u><a href="{{ route('seminar-details') }}">More</a></u>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3">
                                                    <div class="col-3 ">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-9  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1">Mariola Moeyaert |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1">Mahammad Riyadh |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Field of Study:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            raihan
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Register Now</span>
                                                    </a>

                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Zoom Link</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4">
                                        <div class="row   ">
                                            <div class="col-10">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                                    </a>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar dates:
                                                        </p>
                                                    </div>
                                                    <div class="col-9 pl-0">

                                                        <p class="fre-scsh-right-side-details pb-0 mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-8 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0">This
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
                                                            <u><a href="{{ route('scholarship.create') }}">More</a></u>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3">
                                                    <div class="col-3 ">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-9  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1">Mariola Moeyaert |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1">Mahammad Riyadh |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Field of Study:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            raihan
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Register Now</span>
                                                    </a>

                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Zoom Link</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list border-bottom border-gray-600 mb-4">
                                        <div class="row   ">
                                            <div class="col-10">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                                    </a>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar dates:
                                                        </p>
                                                    </div>
                                                    <div class="col-9 pl-0">

                                                        <p class="fre-scsh-right-side-details pb-0 mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-8 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0">This
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
                                                            <u><a href="{{ route('scholarship.create') }}">More</a></u>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3">
                                                    <div class="col-3 ">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-9  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1">Mariola Moeyaert |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1">Mahammad Riyadh |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Field of Study:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            raihan
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Register Now</span>
                                                    </a>

                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Zoom Link</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-scholarship-list  mb-4">
                                        <div class="row   ">
                                            <div class="col-10">
                                                <p class="fs-18 fw-700"style="color:#5ABC76;">
                                                    <u>Foundations of PLS-SEM Using SmartPLS 4</u>
                                                </p>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class=" fs-16 fw-700 pb-1 "
                                                        style="border-bottom: 2px solid  #000003; color: #000003">
                                                    </a>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar dates:
                                                        </p>
                                                    </div>
                                                    <div class="col-9 pl-0">

                                                        <p class="fre-scsh-right-side-details pb-0 mb-0">Wed Sep 6 – Fri
                                                            Sep 8,
                                                            2023, from 10am – 3pm daily (Australian Eastern Standard Time)
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p class="fre-scsh-left-side-title mb-0">
                                                            Seminar Summary:
                                                        </p>
                                                    </div>
                                                    <div class="col-8 pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify pb-0 mb-0">This
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
                                                            <u><a href="{{ route('scholarship.create') }}">More</a></u>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="row mt-lg-3">
                                                    <div class="col-3 ">
                                                        <p class="fre-scsh-left-side-title mb-1 ">
                                                            Instructors:
                                                        </p>
                                                    </div>
                                                    <div class="col-9  pl-0">

                                                        <p class="fre-scsh-right-side-details  mb-1">Mariola Moeyaert |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>
                                                        <p class="fre-scsh-right-side-details  mb-1">Mahammad Riyadh |
                                                            Associate Professor of Statistics and Director | University at
                                                            Albany</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Field of Study:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            raihan
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Seminar Mode:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            Live via Zoom
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Software Package:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            R
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3  pr-0">
                                                        <p class=" fre-scsh-left-side-title ">
                                                            Language:
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-9  pl-0">

                                                        <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div>
                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Register Now</span>
                                                    </a>

                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="" data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>Zoom Link</span>
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
                                            <img class=" mb-2 mx-auto d-block
                                     p-3"
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
        <script type="text/javascript">
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
