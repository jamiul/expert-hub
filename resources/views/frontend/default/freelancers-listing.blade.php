<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    @extends('frontend.default.layouts.app')
    @section('content')
        {{-- <div class="p-lg-4 mb-4 mt-1" style="background:#275846">
            <div class="row rounded-0 px-lg-2 mx-lg-5 px-4">
                <div class="col-lg-7 col-12  w-100 my-auto">
                    <h3 class="text-white fw-700  frequently-qsn-title  ">Find Our Experts</h3>
                    <p class="text-white fs-16 text-justify w-100 consultant-banner-device-style">Expand your knowledge and
                        master a diverse range of cutting-edge statistical methods through personalized consultations with
                        our expert consultants. Our consultants are renowned authorities in their specialized domains,
                        ensuring that you receive unparalleled guidance tailored to your specific needs. With their
                        expertise and a keen focus on your unique requirements, you'll gain a deep understanding of
                        statistics, no matter your background.</p>
                    <a href="register?type=2" class="btn rounded border fs-20 frequently-qsn-title  text-white">Find
                        Instructors</a>
                </div>

                {{-- @dd(getCountryName($country_id)); --}}

                @foreach($categories as $category)
                <span id="category_{{$category->id}}"
                  class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                  {{$category ->name}} |<p class="m-0  d-inline fw-700" onclick="removeCategory({{$category->id}})">
                    X</p>
                </span>
                @endforeach

                <!-- hourly rate badge  -->
                @if(count($hourly_rate) > 0)
                  @foreach ($hourly_rate as $rate)
                    @if ($rate != 'all')
                      <span id="hourlyRate_{{ $rate }}" class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                        {{ getHourlyRateName($rate) }}
                          <p onclick="removeHourlyRate({{ $rate }})" class="m-0 d-inline fw-700" style="cursor: pointer;">X</p>
                      </span>
                    @endif
                  @endforeach
                @endif

                <!-- country badge  -->
                @if(! empty($country_id))
                  <span id="countryID_{{ $country_id }}" class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                    {{ getCountryName($country_id) }}
                      <p onclick="removeCountryName({{ $country_id }})" class="m-0 d-inline fw-700" style="cursor: pointer;">X</p>
                  </span>
                @endif
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
                      <button class="input-group-prepend rounded" type="submit">
                        <span class="input-group-text text-white border-left-0 rounded-right" : style="">
                          <i class="las la-search"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- categories  -->

                <div class="mt-3">
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="pr-3">{{ translate('Categoriesss') }}</span>
                  </h6>
                  @foreach(\App\Models\ProjectCategory::all()->reverse() as $category)

                  <label class="aiz-checkbox w-100">
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" onchange="applyFilter()"
                      @if(in_array($category->id, $category_ids)) checked @endif >
                    {{$category->name}}
                    <span class="aiz-square-check"></span>
                    <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                  </label>
                  @endforeach

                <div class="col-lg-1 col-12 my-auto"></div>
                <div class="col-lg-4 col-12">
                    <img class="banner-img"
                        src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                        alt="">

                </div>
            </div>
        </div> --}}
        <div class="container-main-projects-banner">
            <div class="mb-4 pb-lg-4" style="background:#275846">
                <div class="row rounded-0 px-2 mt-1 mx-4">
                    <div class="col-lg-6 col-sm-12 my-auto">
                        <h3 class="text-white fw-700 fs-30 site-font  ">Hire Academic Consultants
                        </h3>
                        <p class="fw-400 text-white site-font fs-18 mb-2">Connect with a diverse range of experts in the
                            field you are searching for to meet your academic requirements.

                        </p>
                        <a href="register?type=2"
                            class="btn rounded border site-font fs-20 mt-lg-3 frequently-qsn-title  text-white">Get Started</a>


                    </div>
                    <div class="col-lg-2 col-sm-12 "></div>
                    <div class="col-lg-4 col-sm-12 ">
                        <img class="banner-img"
                            src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <section class="">
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
                                        <h5 class="my-3 fs-21 fw-700">{{ translate('Consultant for hire') }}</h5>
                                        <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-times la-2x"></i>
                                        </button>
                                    </div>
                                    {{-- @dd(getCountryName($country_id)); --}}

                                    @foreach ($categories as $category)
                                        <span id="category_{{ $category->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $category->name }} |<p class="m-0  d-inline fw-700"
                                                onclick="removeCategory({{ $category->id }})">
                                                X</p>
                                        </span>
                                    @endforeach

                                    <!-- hourly rate badge  -->
                                    @if (count($hourly_rate) > 0)
                                        @foreach ($hourly_rate as $rate)
                                            @if ($rate != 'all')
                                                <span id="hourlyRate_{{ $rate }}"
                                                    class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                                                    {{ getHourlyRateName($rate) }}
                                                    <p onclick="removeHourlyRate({{ $rate }})"
                                                        class="m-0 d-inline fw-700" style="cursor: pointer;">X</p>
                                                </span>
                                            @endif
                                        @endforeach
                                    @endif

                                    <!-- country badge  -->
                                    @if (!empty($country_id))
                                        <span id="countryID_{{ $country_id }}"
                                            class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                                            {{ getCountryName($country_id) }}
                                            <p onclick="removeCountryName({{ $country_id }})" class="m-0 d-inline fw-700"
                                                style="cursor: pointer;">X</p>
                                        </span>
                                    @endif
                                    <!-- search bar  -->
                                    <input type="hidden" name="type" value="freelancer">
                                    <form class="" method="GET">
                                        <div class=" d-flex align-items-center w-100">
                                            <button
                                                class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                                                data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                                <i class="las la-filter"></i>
                                            </button>
                                            <div class="input-group rounded-2">
                                                <input type="text" class="form-control rounded  "
                                                    placeholder="{{ translate('Search for consultants') }}" name="keyword"
                                                    value="{{ $keyword }}">
                                                <button class="input-group-prepend rounded" type="submit">
                                                    <span class="input-group-text text-white border-left-0 rounded-right" :
                                                        style="">
                                                        <i class="las la-search"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- categories  -->

                                    <div class="mt-3">
                                        <h6 class="text-left mb-3 fs-14 ">
                                            <span class="pr-3 site-font fw-700">{{ translate('Categories') }}</span>
                                        </h6>
                                        @foreach (\App\Models\ProjectCategory::all() as $category)
                                            <label class="aiz-checkbox site-font w-100">
                                                <input type="checkbox" name="category_id[]" value="{{ $category->id }}"
                                                    onchange="applyFilter()"
                                                    @if (in_array($category->id, $category_ids)) checked @endif>
                                                {{ $category->name }}
                                                <span class="aiz-square-check"></span>
                                                <span class="float-right text-secondary fs-lg-16 fs-14"></span>
                                            </label>
                                        @endforeach
                                    </div>

                                    <!-- Skills -->
                                    <div class="card-body pl-lg-0">
                                        <div class="">
                                            <h6 class="text-left mb-3 fs-14">
                                                <span class="pr-3 site-font fw-700">{{ translate('Skills') }}</span>
                                            </h6>
                                            <div class="mb-4">
                                                <div class="">
                                                    <div class="mb-5 border-bottom">
                                                        <select
                                                            class="select2 site-font form-control aiz-selectpicker rounded-1"
                                                            name="skill_id[]" onchange="applyFilter()" data-toggle="select2"
                                                            data-live-search="true">

                                                            <option value="" class="site-font">
                                                                {{ translate('Search skills') }}
                                                            </option>
                                                            @foreach (\App\Models\Skill::all() as $key => $skill)
                                                                <option class="site-font" value="{{ $skill->id }}"
                                                                    @if (in_array($skill->id, (array) $skill_ids)) selected @endif>
                                                                    {{ $skill->name }}</option>
                                                            @endforeach
                                                        </select>

                                                        <div class="mt-3">
                                                            @foreach (\App\Models\ParentSkill::all() as $key => $parentSkill)
                                                                <a class="text-dark d-flex justify-content-start align-items-center site-font mb-1"
                                                                    data-toggle="collapse"
                                                                    href="#skill_{{ $parentSkill->id }}" role="button"
                                                                    aria-expanded="true"
                                                                    aria-controls="skill_{{ $parentSkill->id }}">
                                                                    <label class="fas fa-plus "
                                                                        style="border: 1px solid gray;border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: gray;color: white;display: flex;justify-content: center;align-content: center; font-size:9px"></label>
                                                                    <p class="mb-0 fs-14 fw-500">{{ $parentSkill->name }}
                                                                    </p>
                                                                </a>
                                                                <div class="overflow-auto h-130px collapse "
                                                                    id="skill_{{ $parentSkill->id }}">
                                                                    @foreach (\App\Models\Skill::where('parent_skill_id', $parentSkill->id)->get() as $subSkill)
                                                                        <div
                                                                            class=" w-200px child-skill-project-filtering">
                                                                            <div class="mb-1 ">
                                                                                <input type="checkbox"
                                                                                    name="childSkill_id[]"
                                                                                    id="{{ $subSkill->id }}"
                                                                                    value="{{ $subSkill->id }}"
                                                                                    class=" d-none"
                                                                                    onchange="applyFilter()">
                                                                                <label
                                                                                    class="c-pointer site-font fs-12 text-dark ml-3 fw-500 mb-0"
                                                                                    for="{{ $subSkill->id }}">
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
                                        <h6 class="text-left mb-3 fs-14">
                                            <span
                                                class="pr-3 site-font fw-700">{{ translate('Hourly Rate (USD)') }}</span>
                                        </h6>
                                        <div class="mb-5 border-bottom">
                                            <div class="mb-2 mt-3" style="width: 245px;">
                                                <select class="select2 form-control site-font aiz-selectpicker rounded-1"
                                                    onchange="applyFilter()" data-live-search="true"
                                                    name="hourly_rate[]">
                                                    <option value="all"
                                                        @if (in_array('all', $hourly_rate)) selected @endif>
                                                        {{ translate('Any hourly rate') }}</option>

                                                    @foreach (getHourlyRate() as $key => $rate)
                                                        <option value="{{ $key }}"
                                                            @if (in_array($key, $hourly_rate)) selected @endif>
                                                            {{ $rate }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <!-- countries  -->
                                        <h6 class="text-left mb-3 fs-14">
                                            <span class="pr-3 site-font fw-700">{{ translate('Countries') }}</span>
                                        </h6>

                                        <div class=" mb-5 ">
                                            <div class=" py-2 border-bottom ">
                                                <select class="select2 site-font form-control aiz-selectpicker rounded-1"
                                                    name="country_id" onchange="applyFilter()" data-toggle="select2"
                                                    data-live-search="true">
                                                    <option value="" class="site-font">
                                                        {{ translate('Search countries') }}</option>
                                                    @foreach (\App\Models\Country::all() as $key => $country)
                                                        <option value="{{ $country->id }}"
                                                            @if (isset($country_id) && $country_id == $country->id) selected @endif>
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <!-- Rating -->
                                        <h6 class="text-left mb-3 fs-14">
                                            <span class=" pr-3 site-font fw-700">{{ translate('Rating') }}</span>
                                        </h6>
                                        <div class="d-flex border-bottom">
                                            <div class="star-widget">
                                                <input type="radio" name="rating" id="rate-5" value="5"
                                                    @if ($rating == '5') checked @endif
                                                    onchange="applyFilter()">
                                                <label for="rate-5" class="fas fa-star"></label>
                                                <input type="radio" name="rating" id="rate-4" value="4"
                                                    @if ($rating == '4') checked @endif
                                                    onchange="applyFilter()">
                                                <label for="rate-4" class="fas fa-star"></label>
                                                <input type="radio" name="rating" id="rate-3" value="3"
                                                    @if ($rating == '3') checked @endif
                                                    onchange="applyFilter()">
                                                <label for="rate-3" class="fas fa-star"></label>
                                                <input type="radio" name="rating" id="rate-2" value="2"
                                                    @if ($rating == '2') checked @endif
                                                    onchange="applyFilter()">
                                                <label for="rate-2" class="fas fa-star"></label>
                                                <input type="radio" name="rating" id="rate-1" value="1"
                                                    @if ($rating == '1') checked @endif
                                                    onchange="applyFilter()">
                                                <label for="rate-1" class="fas fa-star"></label>
                                                @if ($rating)
                                                    <input type="radio" name="rating" id="rate-0" value=""
                                                        onchange="applyFilter()"
                                                        @if ($rating == '') checked @endif">
                                                    <label for="rate-0" class="fas fa-minus"
                                                        style=" color:red !important; cursor:pointer;"></label>
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
                                            <div
                                                class="d-block site-font d-xl-flex site-font text-inherit all-scholarship-list px-3 py-4 border-bottom">
                                                <a href="{{ route('freelancer.details', $freelancer->user->user_name) }}">
                                                    <span class="avatar flex-shrink-0 mr-4">
                                                        @if ($freelancer->user->photo != null)
                                                            <img src="{{ custom_asset($freelancer->user->photo) }}"
                                                                alt="{{ $freelancer->user->name }}">
                                                        @else
                                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                                                alt="{{ $freelancer->user->name }}">
                                                        @endif
                                                        @if (Cache::has('user-is-online-' . $freelancer->user->id))
                                                            <span
                                                                class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                        @else
                                                            <span
                                                                class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                        @endif
                                                    </span>
                                                </a>
                                                <div class="flex-grow-1 ">
                                                    <a
                                                        href="{{ route('freelancer.details', $freelancer->user->user_name) }}">
                                                        <div class="d-flex">
                                                            <h5 class=" fs-18 fw-700 mb-1">{{ $freelancer->user->name }}
                                                            </h5>

                                                            @if ($freelancer->user->address->country->photo == null)
                                                                @php
                                                                    $flag_url = '/public/assets/frontend/default/img/avatar-place.png';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $flag_url = $freelancer->user->address->country->photo;
                                                                @endphp
                                                            @endif
                                                            <span>

                                                                <img class=" mx-2 " src="{{ url($flag_url) }}"
                                                                    alt="{{ $freelancer->user->address->country->name }}"
                                                                    style="width:21px; height:14px; " />
                                                            </span>
                                                        </div>
                                                    </a>

                                                    @if ($freelancer->specialistAt != null)
                                                        <p class="fs-16 ">{{ $freelancer->specialistAt->name }}</p>
                                                    @endif

                                                    <div class="d-flex text-dark fs-14 mb-3">
                                                        <div class="mr-2">
                                                            <span class="bg-rating p-1 text-white px-1 mr-1 fs-10"
                                                                style="background:#95DF00;">
                                                                {{ formatRating(getAverageRating($freelancer->user->id)) }}
                                                            </span>
                                                            <span class="rating rating-md rating-mr-1">
                                                                {{ renderStarRating(getAverageRating($freelancer->user->id)) }}
                                                            </span>
                                                            <span>(0 Jobs)</span>
                                                            <span class="mx-2">
                                                                {{ count($freelancer->user->reviews) }}
                                                                {{ translate('Reviews') }}
                                                            </span>

                                                            <span>
                                                                {{ single_price($freelancer->hourly_rate) }} USD per hour
                                                            </span>

                                                        </div>

                                                    </div>
                                                    <div class="text-dark lh-1-8">
                                                        <p class="text-truncate-3 fs-14">{{ $freelancer->bio }}</p>
                                                    </div>
                                                    @if ($freelancer->skills != null)
                                                        <div>
                                                            @foreach (json_decode($freelancer->skills) as $key => $skill_id)
                                                                @php
                                                                    $skill = \App\Models\Skill::find($skill_id);
                                                                @endphp
                                                                @if ($skill != null)
                                                                    <span
                                                                        class="btn btn-light btn-xs border  mb-1 ml-1  text-dark rounded border-0 fs-14"
                                                                        style="  color:#6560E6 !important;">{{ $skill->name }}</span>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 flex-xl-column w-lg-80px"
                                                    style="">
                                                    <div class="d-flex w-100 mx-0">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">
                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/logo-1.png') }}"
                                                                alt="Image" style="width:36px; " />
                                                            {{ translate('Hire me') }}
                                                        </p>
                                                    </div>
                                                    <div class="d-flex w-100 mx-0">
                                                        <p class="btn btn-primary btn-sm  w-100  fw-700">
                                                            <img class=" px-1  "
                                                                src=" {{ url('/public/assets/find-consultant/zoom.png') }}"
                                                                alt="Image" style="width:28px; " />
                                                            {{ translate('Zoom me') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
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

            // remove hourly rate by clicking x sign
            function removeHourlyRate(value) {
                let getHourlyRateId = document.getElementById('hourlyRate_' + value);

                if (getHourlyRateId) {
                    getHourlyRateId.parentNode.removeChild(getHourlyRateId);

                    // Unselect the corresponding option
                    var selectElement = document.querySelector('select[name="hourly_rate[]"]');
                    if (selectElement) {
                        var optionElement = selectElement.querySelector('option[value="' + value + '"]');
                        if (optionElement) {
                            optionElement.selected = false;
                        }
                    }
                }
                $('#freelancer-filter-form').submit();
            }

            // remove country name from badges
            function removeCountryName(countryID) {
                let getCountry = document.getElementById('countryID_' + countryID);

                if (getCountry) {
                    getCountry.parentNode.removeChild(getCountry);

                    // Unselect the corresponding option
                    let selectElement = document.querySelector('select[name="country_id"]');
                    if (selectElement) {
                        var optionElement = selectElement.querySelector('option[value="' + countryID + '"]');
                        if (optionElement) {
                            optionElement.selected = false;
                        }
                    }
                }
                $('#freelancer-filter-form').submit();
            }
        </script>
    @endsection

    @section('script')
        <script type="text/javascript">
            let e = document.getElementById("hourlyRateSelect");

            var value = e.value;
            var text = e.options[e.selectedIndex].text;

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
