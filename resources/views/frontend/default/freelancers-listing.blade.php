<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">

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
                  <h5 class="my-3 fs-21 fw-700">{{ translate('Consultant for hire') }}</h5>
                  <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                    data-target=".aiz-filter-sidebar" type="button">
                    <i class="las la-times la-2x"></i>
                  </button>
                </div>


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
                        placeholder="{{ translate('Search for consultants') }}" name="keyword" value="{{ $keyword }}">
                      <div class="input-group-prepend rounded">
                        <span class="input-group-text text-white border-left-0 rounded-right" :
                          style="background:#275846;">
                          <i class="las la-search"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>


                <h6 class="text-left mb-3 mt-lg-5 fs-14 fw-700">
                  <span class=" pr-3">{{ translate('Categories') }}</span>
                </h6>
                @foreach(\App\Models\ProjectCategory::all() as $category)

                <label class="aiz-checkbox">
                  <input type="checkbox" name="category_id" value="{{$category->slug}}" onchange="applyFilter()"
                    @if(isset($_GET['category_id']) && $_GET['category_id']==$category->slug ) checked @endif>
                  {{$category->name}}
                  <span class="aiz-square-check"></span>
                  <span class="float-right text-secondary fs-12"></span>
                </label>
                @endforeach
                <!-- Categories -->
                <div class="card-body pl-lg-0">
                  <div class="">
                    <!-- Countries -->
                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class="pr-3">{{ translate('Countries') }}</span>
                    </h6>
                    <div class="mb-5">
                      <select class="select2 form-control aiz-selectpicker rounded-1" name="country_id"
                        onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                        <option value="">{{ translate('All Countries') }}</option>
                        @foreach (\App\Models\Country::all() as $key => $country)
                        <option value="{{ $country->id }}" @if (isset($country_id) && $country_id==$country->id )
                          selected
                          @endif>{{ $country->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- Hourly Rate -->
                    <input type="hidden" name="min_price" value="">
                    <input type="hidden" name="max_price" value="">
                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class=" pr-3">{{ translate('Hourly Rate') }}</span>
                    </h6>
                    <div class="aiz-range-slider mb-5 px-3">
                      <div id="input-slider-range"
                        data-range-value-min="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::min('hourly_rate') }} @endif"
                        data-range-value-max="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::max('hourly_rate') }} @endif">
                      </div>

                      <div class="row mt-2">
                        <div class="col-6">
                          <span class="range-slider-value value-low fs-14 fw-600 opacity-70" @if (isset($min_price))
                            data-range-value-low="{{ $min_price }}" @elseif(count($freelancers)> 1 &&
                            $freelancers->min('hourly_rate') > 0)
                            data-range-value-low="{{ $freelancers->min('hourly_rate') }}"
                            @else
                            data-range-value-low="0"
                            @endif
                            id="input-slider-range-value-low"
                            ></span>
                        </div>
                        <div class="col-6 text-right">
                          <span class="range-slider-value value-high fs-14 fw-600 opacity-70" @if (isset($max_price))
                            data-range-value-high="{{ $max_price }}" @elseif(count($freelancers)> 1 &&
                            $freelancers->max('hourly_rate') > 0)
                            data-range-value-high="{{ $freelancers->max('hourly_rate') }}"
                            @else
                            data-range-value-high="0"
                            @endif
                            id="input-slider-range-value-high"
                            ></span>
                        </div>
                      </div>
                    </div>
                    <!-- Rating -->
                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class=" pr-3">{{ translate('Rating') }}</span>
                    </h6>
                    <div class="aiz-radio-list">
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="" onchange="applyFilter()" @if ($rating=='' ) checked
                          @endif> {{ translate('Any rating') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
                      </label>
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="4+" onchange="applyFilter()" @if ($rating=='4+' )
                          checked @endif> {{ translate('4 star +') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
                      </label>
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="3-4" onchange="applyFilter()" @if ($rating=='3-4' )
                          checked @endif> {{ translate('3 to 4 star') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
                      </label>
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="2-3" onchange="applyFilter()" @if ($rating=='2-3' )
                          checked @endif> {{ translate('2 to 3 star') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
                      </label>
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="1-2" onchange="applyFilter()" @if ($rating=='1-2' )
                          checked @endif> {{ translate('1 to 2 star') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
                      </label>
                      <label class="aiz-radio">
                        <input type="radio" name="rating" value="0-1" onchange="applyFilter()" @if ($rating=='0-1' )
                          checked @endif> {{ translate('0 to 1 star') }}
                        <span class="aiz-rounded-check"></span>
                        <span class="float-right text-secondary fs-12"></span>
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

                        <img class=" px-1 " src="{{url($flag_url)}}"
                          alt="{{ $freelancer->user->address->country->name }}" style="width:30px; " />
                      </span>
                    </div>

                    @if ($freelancer->specialistAt != null)
                    <p class="fs-16 ">{{ $freelancer->specialistAt->name }}</p>
                    @endif

                    <div class="d-flex text-dark fs-12 mb-3">
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
                    <div class="text-muted lh-1-8">
                      <p class="text-truncate-3">{{ $freelancer->bio }}</p>
                    </div>
                    @if($freelancer->skills != null)
                    <div>
                      @foreach (json_decode($freelancer->skills) as $key => $skill_id)
                      @php
                      $skill = \App\Models\Skill::find($skill_id);
                      @endphp
                      @if ($skill != null)
                      <span
                        class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light text-dark rounded border-0">{{ $skill->name }}</span>
                      @endif
                      @endforeach
                    </div>
                    @endif
                  </div>
                  <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px" style="">

                    <div class="d-flex w-100 mx-0">
                      <p class="btn btn-primary btn-sm mt-2 w-100  fw-700">

                        <img class=" px-1 " src=" {{url('/public/assets/find-consultant/logo-1.png')}}" alt="Image"
                          style="width:36px; " />
                        {{ translate('Hire me') }}

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