<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

                @foreach($categories as $category)
                <span id="category_{{$category->id}}"
                  class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                  {{$category ->name}} |<p class="m-0  d-inline fw-700" onclick="removeCategory({{$category->id}})">
                    X</p>
                </span>
                @endforeach
                <!-- search bar  -->
                <input type="hidden" name="type" value="freelancer">
                <form class="" method="GET">
                  <div class=" d-flex align-items-center w-100">
                    <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                      data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                      <i class="las la-filter"></i>
                    </button>
                    <div class="input-group rounded-2">
                      <input type="text" class="form-control rounded  "
                        placeholder="{{ translate('Search for consultants') }}" name="keyword" value="{{ $keyword }}">
                      <button class="input-group-prepend rounded " style="background-color:#275846;" type="submit">
                        <span class="input-group-text text-white border-0" : style="background-color:#275846;">
                          <i class="las la-search"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- categories  -->

                <div class="mt-3">
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Categories') }}</span>
                  </h6>
                  @foreach(\App\Models\ProjectCategory::all() as $category)

                  <label class="aiz-checkbox w-100">
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" onchange="applyFilter()"
                      @if(in_array($category->id, $category_ids)) checked @endif >
                    {{$category->name}}
                    <span class="aiz-square-check"></span>
                    <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                  </label>
                  @endforeach
                </div>

                <!-- Skills -->
                <div class="card-body pl-lg-0">
                  <div class="">
                    <h6 class="text-left mb-3 fs-14 fw-700">
                      <span class="pr-3">{{ translate('Skills') }}</span>
                    </h6>
                    <div class="mb-4">
                      <div class="">
                        <div class="mb-5 border-bottom">
                          <select class="select2 form-control aiz-selectpicker rounded-1" name="skill_id[]"
                            onchange="applyFilter()" data-toggle="select2" data-live-search="true">

                            <option value="">{{ translate('Search skills') }}</option>
                            @foreach (\App\Models\Skill::all() as $key => $skill)
                            <option value="{{ $skill->id }}" @if (in_array($skill->id, (array)$skill_ids ))
                              selected
                              @endif>{{ $skill->name }}</option>
                            @endforeach
                          </select>

                          <div class="mt-3">
                            @foreach (\App\Models\ParentSkill::all() as $key => $parentSkill)
                            <a class="text-dark d-flex justify-content-start align-items-center mb-1"
                              data-toggle="collapse" href="#skill_{{$parentSkill->id}}" role="button"
                              aria-expanded="true" aria-controls="skill_{{ $parentSkill->id}}">
                              <label class="fas fa-plus "
                                style="border: 1px solid gray;border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: gray;color: white;display: flex;justify-content: center;align-content: center; font-size:9px"></label>
                              <p class="mb-0 fs-14 fw-500">{{ $parentSkill->name }}</p>
                            </a>
                            <div class="overflow-auto h-130px collapse " id="skill_{{$parentSkill->id}}">
                              @foreach (\App\Models\Skill::where('parent_skill_id', $parentSkill->id)->get() as
                              $subSkill)
                              <div class=" w-200px child-skill-project-filtering">
                                <div class="mb-1 ">
                                  <input type="checkbox" name="childSkill_id[]" id="{{$subSkill->id}}"
                                    value="{{$subSkill->id}}" class=" d-none" onchange="applyFilter()">
                                  <label class="c-pointer fs-12 text-dark ml-3 fw-500 mb-0" for="{{$subSkill->id}}">
                                    {{ $subSkill->name }}</label>
                                </div>
                              </div>
                              @endforeach
                            </div>
                            @endforeach
                          </div>

                        </div>
                      </div>


                    </div>

                  </div>


                  <!-- Hourly rates -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Hourly Rate (USD)') }}</span>
                  </h6>
                  <div class="mb-5 border-bottom">
                    <div class="mb-2 mt-3">
                      <select multiple class="select2 form-control aiz-selectpicker rounded-1" data-toggle="select2"
                        data-live-search="true">
                        <option selected>
                          {{ translate('Any hourly rate') }}
                        </option>
                        <option name="rate1" onchange="applyFilter()" value="10">
                          < $10/hour </option>
                        </option name="rate1" onchange="applyFilter()" value="20">
                        $10-20/hour </option>
                        <option name="rate1" onchange="applyFilter()" value="30">
                          $20-30/hour </option>
                        </option>
                        <option name="rate1" onchange="applyFilter()" value="40">
                          $30-40/hour </option>
                        <option name="rate1" onchange="applyFilter()" value="50">
                          > $40/hour </option>
                      </select>

                    </div>
                  </div>


                  <!-- countries  -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Countries') }}</span>
                  </h6>

                  <div class=" mb-5 ">
                    <div class=" py-2 border-bottom ">
                      <select class=" select2 form-control aiz-selectpicker rounded-1" name="country_id"
                        onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                        <option value="">{{ translate('Search countries') }}</option>
                        @foreach (\App\Models\Country::all() as $key => $country)
                        <option value="{{ $country->id }}" @if (isset($country_id) && $country_id==$country->id )
                          selected
                          @endif>{{ $country->name }}</option>
                        @endforeach
                      </select>

                    </div>
                  </div>
                  <!-- Rating -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Rating') }}</span>
                  </h6>
                  <div class="d-flex border-bottom">
                    <div class="star-widget">
                      <input type="radio" name="rate" id="rate-5" value="5" @if ($rate=='5' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-5" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-4" value="4" @if ($rate=='4' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-4" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-3" value="3" @if ($rate=='3' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-3" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-2" value="2" @if ($rate=='2' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-2" class="fas fa-star"></label>
                      <input type="radio" name="rate" id="rate-1" value="1" @if ($rate=='1' ) checked @endif
                        onchange="applyFilter()">
                      <label for="rate-1" class="fas fa-star"></label>
                      @if($rate)
                      <input type="radio" name="rate" id="rate-0" value="" onchange="applyFilter()" @if ($rate=='' )
                        checked @endif">
                      <label for="rate-0" class="fas fa-minus" style=" color:red !important; cursor:pointer;"></label>
                      @endif
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
<<<<<<< HEAD

                      @if($freelancer->user->address->country->photo ==null)
=======
>>>>>>> 50ab65fe708aa6f68f1cb85ecb38a660c7fe9c1b

                      @php
                        if ( !empty($freelancer->user->address->country['photo'])) {
                          $flag_url=$freelancer->user->address->country['photo'];
                        } else {
                          $flag_url="/public/assets/frontend/default/img/avatar-place.png";
                        }
                      @endphp

                      <span>
                        <img class=" mx-2 " src="{{url($flag_url)}}"
                          alt="{{ $freelancer->user->address->country['name'] }}" style="width:21px; height:14px; " />
                      </span>

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