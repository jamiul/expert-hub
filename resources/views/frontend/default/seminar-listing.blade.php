<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
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
                <h6 class="text-left mb-3 mt-3  fs-14 fw-700">
                  <span class=" pr-3">{{ translate('Seminar Mode') }}</span>
                </h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    On demand seminar
                  </label>

                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    Live seminar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    Structured courses
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    Free seminars
                  </label>
                </div>
                <h6 class="text-left mt-3 fs-14 fw-700">
                  <span class="pr-3">{{ translate('Seminar Topics') }}</span>
                </h6>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" class="" for="flexCheckDisabled">
                    On demand seminar
                  </label>

                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    Live seminar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for="flexCheckDisabled">
                    Structured courses
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled">
                  <label class="form-check-label fs-14" for=" flexCheckDisabled">
                    Free seminars
                  </label>
                </div>
                <div class="mt-3">

                  <a class="text-dark d-flex justify-content-start align-items-center mb-1" data-toggle="collapse"
                    href="" role="button" aria-expanded="true" aria-controls="">
                    <label class="fas fa-plus "
                      style="border: 1px solid gray;border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: gray;color: white;display: flex;justify-content: center;align-content: center; font-size:9px"></label>
                    <p class="mb-0 fs-14 fw-500">1</p>
                  </a>
                  <div class="overflow-auto h-130px collapse " id="">

                    <div class=" w-200px child-skill-project-filtering">
                      <div class="mb-1 ">
                        <input type="checkbox" name="" id="}" value="" class=" d-none" onchange="applyFilter()">
                        <label class="c-pointer fs-12 text-dark ml-3 fw-500 mb-0" for="">
                        </label>
                      </div>
                    </div>

                  </div>

                </div>

                <!-- <div class="card-body pl-lg-0">
                  <div class="">

                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class="pr-3">{{ translate('Seminar Topics') }}</span>
                    </h6>
                    <div class="mb-5">
                      <select class="select2 form-control aiz-selectpicker rounded-1" name="skill_id"
                        onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                        <option value="">{{ translate('Skills') }}</option>
                        @foreach (\App\Models\Skill::all() as $key => $skill)
                        <option value="{{ $skill->id }}" @if (isset($skill_id) && $skill_id==$skill->id )
                          selected
                          @endif>{{ $skill->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> -->


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
                        <!-- Continue adding rows for the rest of the days in the month -->
                        <!-- You can use PHP or JavaScript to dynamically generate the calendar -->
                      </div>
                    </div>


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
                @foreach ($freelancers as $key => $freelancer)
                @if ($freelancer->user != null)
                <a href="{{ route('freelancer.details', $freelancer->user->user_name) }}"
                  class="d-block d-xl-flex  text-inherit all-scholarship-list px-3 py-4 border-bottom">
                  <span class="avatar flex-shrink-0 mr-4">
                    @if ($freelancer->user->photo != null)
                    <img src="{{ custom_asset($freelancer->user->photo) }}" alt="{{ $freelancer->user->name }}">
                    @else
                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                      alt="{{ $freelancer->user->name }}">
                    @endif
                    @if(Cache::has('user-is-online-' . $freelancer->user->id))
                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                    @else
                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                    @endif
                  </span>
                  <div class="flex-grow-1 ">
                    <div class="d-flex">
                      <h5 class=" fs-18 fw-700 mb-1">{{ $freelancer->user->name }}</h5>

                      @if ($freelancer->user->address->country->photo ==null)
                      @php
                      $flag_url="/public/assets/frontend/default/img/avatar-place.png";
                      @endphp
                      @else

                      @php
                      $flag_url=$freelancer->user->address->country->photo;
                      @endphp
                      @endif
                      <span>

                        <img class=" mx-2 " src="{{url($flag_url)}}"
                          alt="{{ $freelancer->user->address->country->name }}" style="width:21px; height:14px; " />
                      </span>
                    </div>

                    @if ($freelancer->specialistAt != null)
                    <p class="fs-16 ">{{ $freelancer->specialistAt->name }}</p>
                    @endif

                    <div class="d-flex text-dark fs-14 mb-3">
                      <div class="mr-2">
                        <span class="bg-rating p-1 text-white px-1 mr-1 fs-10" style="background:#95DF00;">
                          {{ formatRating(getAverageRating($freelancer->user->id)) }}
                        </span>
                        <span class="rating rating-md rating-mr-1">
                          {{ renderStarRating(getAverageRating($freelancer->user->id)) }}
                        </span>
                        <span>(0 Jobs)</span>
                        <span class="mx-2">
                          {{ count($freelancer->user->reviews) }} {{ translate('Reviews') }}
                        </span>

                        <span>
                          {{ single_price($freelancer->hourly_rate) }} USD per hour
                        </span>

                      </div>

                    </div>
                    <div class="text-dark lh-1-8">
                      <p class="text-truncate-3 fs-14">{{ $freelancer->bio }}</p>
                    </div>
                    @if($freelancer->skills != null)
                    <div>
                      @foreach (json_decode($freelancer->skills) as $key => $skill_id)
                      @php
                      $skill = \App\Models\Skill::find($skill_id);
                      @endphp
                      @if ($skill != null)
                      <span
                        class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0 fs-14">{{ $skill->name }}</span>
                      @endif
                      @endforeach
                    </div>
                    @endif
                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm  w-100  fw-700">

                        <img class=" px-1  " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Hire me') }}

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
                @endif
                @endforeach
              </div>
              @if (!is_array($freelancers))
              <div class="card-footer">
                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                  <ul class="pagination">
                    {{ $freelancers->links() }}
                  </ul>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <script>

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