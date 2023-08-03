<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

  <!-- new  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  @extends('frontend.default.layouts.app')

  @section('content')
  <section class="mt-5">
    <div class="container-main-scholarship">
      @if ($keyword != null)
      <div class="row">
        <div class="col-xl-8 offset-xl-2 text-center">
          <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span>
            {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span></h1>
        </div>
      </div>
      @endif
      <form id="freelancer-filter-form" action="" method="GET">
        <div class="row gutters-10">
          <!-- Sidebar -->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
              <div class=" rounded-0 border-0 collapse-sidebar c-scrollbar-light p-10px" style="background: #F2F7F2;">
                <div class=" border-0 pl-lg-0">
                  <h5 class="my-3 fs-21 fw-700">{{ translate('Search Seminars') }}</h5>
                  <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                    data-target=".aiz-filter-sidebar" type="button">
                    <i class="las la-times la-2x"></i>
                  </button>
                </div>

                @foreach($categories as $category)
                <span id="category_{{$category->id}}"
                  class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                  {{$category ->name}} |<p class="m-0  d-inline fw-700" onclick="removeCategory({{$category->id}})">
                    X</p>
                </span>
                @endforeach
                <!-- search bar  -->
                <input type="hidden" name="type" value="freelancer">
                <div class="">
                  <div class="d-flex align-items-center w-100">
                    <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                      data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                      <i class="las la-filter"></i>
                    </button>
                    <div class="input-group rounded-2">
                      <input type="text" class="form-control rounded  "
                        placeholder="{{ translate('Search for seminar') }}" name="keyword" value="{{ $keyword }}">
                      <div class="input-group-prepend rounded">
                        <span class="input-group-text text-white border-left-0 rounded-right" :
                          style="background:#275846;">
                          <i class="las la-search"></i>
                        </span>
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
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      Live seminar
                    </label>

                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      On-demand seminar
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      Free seminars
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      Experts advice
                    </label>
                  </div>
                </div>

                <!-- Seminar Topics -->

                <div>
                  <h6 class="text-left mt-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Seminar Topics') }}</span>
                  </h6>
                  <div class="form-check">
                    <input class="form-check-input " type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" class="" for="flexCheckDisabled">
                      Quantitative Methods
                    </label>

                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      Qualitative Methods
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                    <label class="form-check-label fs-14" for="flexCheckDisabled">
                      Mixed-Methods
                    </label>
                  </div>
                </div>
                <div>
                  <div class="mt-3">
                    <div class="d-flex">
                      <label class=" fas fa-plus "
                        style=" border: 1px solid gray; border-radius: 50%; height: 18px; width:17px; align-items:center; margin: 0 5px 0 0; background:gray; color:white; display:flex; justify-content: center; align-content:center; font-size:9px"></label>

                      <p class="text-dark" data-toggle="collapse" href="#qualitative" role=" button"
                        aria-expanded="false" aria-controls="qualitative">
                        Qualitative Methods
                      </p>
                    </div>
                    <div class="scroll collapse" id="qualitative">
                      <div class=" py-2">
                        <h6> <a href="" class="fs-12  ">AMOS</a></h6>
                        <h6><a href="" class="fs-12  ">SPSS</a></h6>
                        <h6><a href="" class="fs-12  ">R</a></h6>
                        <h6><a href="" class="fs-12  ">Excel</a></h6>
                        <h6> <a href="" class="fs-12  ">EViews</a></h6>
                        <h6> <a href="" class="fs-12  ">SmartPLS</a></h6>
                        <h6><a href="" class="fs-12  ">Stata</a></h6>
                        <h6><a href="" class="fs-12  ">Python</a></h6>
                        <h6> <a href="" class="fs-12  ">Minitab</a></h6>
                        <h6> <a href="" class="fs-12  ">MATLAB</a></h6>
                        <h6><a href="" class="fs-12  ">JMP</a></h6>
                        <h6><a href="" class="fs-12  ">IBM SPSS Modeler</a></h6>

                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="d-flex">
                      <label class=" fas fa-plus "
                        style=" border: 1px solid gray; border-radius: 50%; height: 18px; width:17px; align-items:center; margin: 0 5px 0 0; background:gray; color:white; display:flex; justify-content: center; align-content:center; font-size:9px;"></label>

                      <p class="text-dark" data-toggle="collapse" href="#quantitative" role=" button"
                        aria-expanded="false" aria-controls="quantitative">
                        Quantitative Methods
                      </p>
                    </div>
                    <div class="scroll collapse" id="quantitative">
                      <div class=" py-2">
                        <h6> <a href="" class="fs-12  ">ATLAS.ti</a></h6>
                        <h6><a href="" class="fs-12  ">NVivo</a></h6>
                        <h6><a href="" class="fs-12  ">MAXQDA</a></h6>
                        <h6><a href="" class="fs-12  ">Dedoose</a></h6>
                        <h6> <a href="" class="fs-12  ">QDA Miner</a></h6>
                        <h6> <a href="" class="fs-12  ">HyperRESEARCH</a></h6>
                        <h6> <a href="" class="fs-12  ">Transana</a></h6>
                        <h6><a href="" class="fs-12  ">Quirkos</a></h6>
                        <h6><a href="" class="fs-12  ">Weft QDA</a></h6>
                        <h6><a href="" class="fs-12  ">AnSWR</a></h6>
                        <h6> <a href="" class="fs-12  ">CAQDAS</a></h6>
                        <h6> <a href="" class="fs-12  ">TAMS Analyzer</a></h6>
                        <h6><a href="" class="fs-12  ">RQDA</a></h6>
                        <h6><a href="" class="fs-12  ">XSight</a></h6>
                        <h6> <a href="" class="fs-12  ">f4analyse</a></h6>
                        <h6> <a href="" class="fs-12  ">Coding Analysis Toolkit (CAT)</a></h6>
                        <h6><a href="" class="fs-12  ">Qiqqa</a></h6>
                        <h6> <a href="" class="fs-12  ">Taguette</a></h6>
                        <h6> <a href="" class="fs-12  ">NUD*IST (N6)</a></h6>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="d-flex">
                      <label class=" fas fa-plus "
                        style=" border: 1px solid gray; border-radius: 50%; height: 18px; width:17px; align-items:center; margin: 0 5px 0 0; background:gray; color:white; display:flex; justify-content: center; align-content:center; font-size:9px"></label>

                      <p class="text-dark" data-toggle="collapse" href="#mixed" role=" button" aria-expanded="false"
                        aria-controls="mixed">
                        Mixed Methods
                      </p>
                    </div>
                    <div class="scroll collapse" id="mixed">
                      <div class=" py-2">
                        <h6> <a href="" class="fs-12  ">NVivo</a></h6>
                        <h6><a href="" class="fs-12  ">ATLAS.ti</a></h6>
                        <h6><a href="" class="fs-12  ">MAXQDA</a></h6>
                        <h6><a href="" class="fs-12  ">QDA Miner</a></h6>
                        <h6> <a href="" class="fs-12  ">QDA Miner</a></h6>
                        <h6> <a href="" class="fs-12  ">DeDoose</a></h6>
                        <h6> <a href="" class="fs-12  ">R</a></h6>
                        <h6><a href="" class="fs-12  ">IBM SPSS</a></h6>
                        <h6><a href="" class="fs-12  ">NVivo f</a></h6>
                        <h6><a href="" class="fs-12  ">Minitab</a></h6>
                        <h6> <a href="" class="fs-12  ">Excel</a></h6>
                        <h6> <a href="" class="fs-12  ">TAMS Analyzer</a></h6>
                        <h6><a href="" class="fs-12  ">Transana</a></h6>
                        <h6><a href="" class="fs-12  ">HyperRESEARCH</a></h6>
                        <h6><a href="" class="fs-12  ">Quirkos</a></h6>
                        <h6> <a href="" class="fs-12  ">Nvivo 12 Plus</a></h6>
                        <h6> <a href="" class="fs-12  ">Dedoose</a></h6>

                        <h6> <a href="" class="fs-12  ">ANTHROPAC</a></h6>
                        <h6><a href="" class="fs-12  ">Weft QDA</a></h6>
                        <h6><a href="" class="fs-12  ">Qiqqa</a></h6>
                        <h6><a href="" class="fs-12  ">Raven's Eye</a></h6>
                        <h6> <a href="" class="fs-12  ">CAQDAS</a></h6>

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



                    <!-- Languages -->

                    <h6 class="text-left mb-3 fs-14 fw-700 mt-3">
                      <span class=" pr-3">{{ translate('Languages') }}</span>
                    </h6>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                      <label class="form-check-label fs-14" for="flexCheckDisabled">
                        English
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                      <label class="form-check-label fs-14" for="flexCheckDisabled">
                        French
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                      <label class="form-check-label fs-14" for="flexCheckDisabled">
                        Hindi
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                      <label class="form-check-label fs-14" for="flexCheckDisabled">
                        Malay
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                      <label class="form-check-label fs-14" for="flexCheckDisabled">
                        Bangla
                      </label>
                    </div>

                  </div>
                </div>
              </div>
              <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
            </div>
          </div>

          <!-- Freelancer List -->
          <div class="col-xl-9 col-lg-7">
            <div class="card mb-lg-0 rounded border-gray-light" style="background: #F2F7F2;">
              <div class="card-body p-0">
                <a href="" class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">

                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">

                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>

                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Longitudinal Research with Mplus: From Design and Analysis to
                        Publicationihan</h5>
                    </div>
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Islam Mohammad Raihanul</h5>
                    </div>
                    <p class="fs-16 ">Department of Management, Mays Business School at Texas A&M University</p>


                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class=" p-1  px-1 mr-1 fs-14">
                          Live Streaming 3-Day Workshop
                        </span> |
                        <span class="rating rating-md rating-mr-1">
                          August 15th - 17th
                        </span> |
                        <span>English,Mandarin</span>
                      </div>
                    </div>
                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Transana</span>
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">TAMS</span>
                        <span class=" p-1 text-white px-1 mr-1 fs-10">
                          <span
                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">CAQDAS</span>
                          <span class=" p-1 text-white px-1 mr-1 fs-10">
                            <span
                              class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">IBM
                              SPSS</span>
                            <span class=" p-1 text-white px-1 mr-1 fs-10">
                              <span
                                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">XSight</span>
                              <span class=" p-1 text-white px-1 mr-1 fs-10">

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
                        recusandae saepe delectus porro eum amet blanditiis! Minima atque ipsa sit, molestiae quo, enim
                        odit explicabo sequi ratione similique blanditiis non! ...<u>More</u>
                      </p>
                    </div>

                    <div>

                    </div>

                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Register Here') }}

                      </p>
                    </div>
                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/zoom.png')}}" alt="Image"
                          style="width:28px; " />
                        {{ translate('Zoom me') }}

                      </p>
                    </div>
                  </div>
                </a>

              </div>
              <div class="card-body p-0">
                <a href="" class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">

                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">

                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>

                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Single-Case Experimental Design and Analysis</h5>
                    </div>
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Md jukarburg</h5>
                    </div>
                    <p class="fs-16 ">School of Education, University at Albany, and Statistical Solutions Inc.</p>


                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class=" p-1  px-1 mr-1 fs-14">
                          Live Streaming 3-Day Workshop
                        </span> |
                        <span class="rating rating-md rating-mr-1">
                          August 15th - 17th
                        </span> |
                        <span>English, Japanese,Bangla</span>
                      </div>
                    </div>
                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">ANTHROPAC</span>
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Dedoose</span>
                        <span class=" p-1 text-white px-1 mr-1 fs-10">
                          <span
                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">WeQ
                            QDA</span>
                          <span class=" p-1 text-white px-1 mr-1 fs-10">
                            <span
                              class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">SEQuirkosO</span>
                            <span class=" p-1 text-white px-1 mr-1 fs-10">
                              <span
                                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Qiqqa</span>
                              <span class=" p-1 text-white px-1 mr-1 fs-10">

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
                        recusandae saepe delectus porro eum amet blanditiis! Minima atque ipsa sit, molestiae quo, enim
                        odit explicabo sequi ratione similique blanditiis non! ...<u>More</u>
                      </p>
                    </div>

                    <div>

                    </div>

                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Register Here') }}

                      </p>
                    </div>
                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/zoom.png')}}" alt="Image"
                          style="width:28px; " />
                        {{ translate('Zoom me') }}

                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="card-body p-0">
                <a href="" class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">

                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">

                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>

                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Harnessing NVivo for Qualitative and Mixed-Methods Research</h5>
                    </div>
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Tanvir haider</h5>
                    </div>
                    <p class="fs-16 ">IBM SPSS Networking Project, University of british colombia and Qualitative Data
                      Analysis
                      Services</p>


                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class=" p-1  px-1 mr-1 fs-14">
                          Live Streaming 3-Day Workshop
                        </span> |
                        <span class="rating rating-md rating-mr-1">
                          August 15th - 17th
                        </span> |
                        <span>English,German</span>
                      </div>
                    </div>
                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">SENvivo
                          12 PlusO</span>
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Qiqqa</span>
                        <span class=" p-1 text-white px-1 mr-1 fs-10">
                          <span
                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Dedoose</span>
                          <span class=" p-1 text-white px-1 mr-1 fs-10">
                            <span
                              class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">NVivo</span>
                            <span class=" p-1 text-white px-1 mr-1 fs-10">
                              <span
                                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Excel</span>
                              <span class=" p-1 text-white px-1 mr-1 fs-10">

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
                        recusandae saepe delectus porro eum amet blanditiis! Minima atque ipsa sit, molestiae quo, enim
                        odit explicabo sequi ratione similique blanditiis non! ...<u>More</u>
                      </p>
                    </div>

                    <div>

                    </div>

                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Register Here') }}

                      </p>
                    </div>
                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/zoom.png')}}" alt="Image"
                          style="width:28px; " />
                        {{ translate('Zoom me') }}

                      </p>
                    </div>
                  </div>
                </a>

              </div>
              <div class="card-body p-0">
                <a href="" class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">

                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">

                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>

                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Longitudinal Research with Mplus: From Design and Analysis to
                        Publicationihan</h5>
                    </div>
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">Stephen fleming</h5>
                    </div>
                    <p class="fs-16 ">Islamic civilization in Aisa and mid-list</p>


                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class=" p-1  px-1 mr-1 fs-14">
                          Live Streaming 3-Day Workshop
                        </span> |
                        <span class="rating rating-md rating-mr-1">
                          August 15th - 17th
                        </span> |
                        <span>English,Arabic</span>
                      </div>
                    </div>
                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">IBM
                          SPSS</span>
                        <span
                          class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">NVivo</span>
                        <span class=" p-1 text-white px-1 mr-1 fs-10">
                          <span
                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">TAMS</span>
                          <span class=" p-1 text-white px-1 mr-1 fs-10">
                            <span
                              class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Transana</span>
                            <span class=" p-1 text-white px-1 mr-1 fs-10">
                              <span
                                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">Excel</span>
                              <span class=" p-1 text-white px-1 mr-1 fs-10">

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
                        recusandae saepe delectus porro eum amet blanditiis! Minima atque ipsa sit, molestiae quo, enim
                        odit explicabo sequi ratione similique blanditiis non! ...<u>More</u>
                      </p>

                    </div>

                    <div>

                    </div>

                  </div>
                  <div class=" flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Register Here') }}

                      </p>
                    </div>
                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/zoom.png')}}" alt="Image"
                          style="width:28px; " />
                        {{ translate('Zoom me') }}

                      </p>
                    </div>
                  </div>
                </a>

              </div>

              <div class="card-footer">
                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                  <ul class="pagination">

                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
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
                                    <img class=" mb-2 mx-auto d-block   p-3" src=" {{url('/public/assets/home/blog.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000" />
                                    <div class="need-help-progress-bar"></div>
                                </div>
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Post a job
                                </p>
                            </div>
                            <h6 class="fs-14 mt-2  text-black text-center">
                                Thousands of degrees, subjects and short courses from leading Australian unis in one place.
                            </h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class=" ">
                            <div class=" h-136px align-items-center">
                                <div class="d-flex">
                                    <img class="mb-2 mx-auto d-block text-black p-3" src="{{url('/public/assets/home/quiz1.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000;" />
                                    <div class="need-help-progress-bar"></div>
                                </div>
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Receive proposal
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
                                     p-3" src=" {{url('/public/assets/home/certificate.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000" />
                                    <div class="need-help-progress-bar"></div>
                                </div>
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Make Selection

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
                                <img class=" mb-2 mx-auto d-block p-3" src=" {{url('/public/assets/home/checked.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000" />
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Payment Securely
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
    </div>
  </section>
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