@extends('frontend.default.layouts.app')

@section('content')
<section class="py-4 py-lg-5">
  <div class="container">
    @if ($keyword != null)
    <div class="row">
      <div class="col-xl-8 offset-xl-2 text-center">
        <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span>
          {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span>
        </h1>
      </div>
    </div>
    @endif
    <form id="scholarship-filter-form" action="" method="GET">
      <div class="row gutters-10">
        <!-- Sidebar -->
        <div class="col-xl-3 col-lg-4">
          <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
            <div class="card rounded-0 border-0 collapse-sidebar c-scrollbar-light shadow-none">
              <div class="card-header border-0 pl-lg-0">
                <h5 class="mb-0 fs-21 fw-700">{{ translate('Filter By') }}</h5>
                <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                  data-target=".aiz-filter-sidebar" type="button">
                  <i class="las la-times la-2x"></i>
                </button>
              </div>
              <div class="card-body pl-lg-0">
                <div class="">
                  <!-- Categories -->
                  <!-- <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Categories') }}</span>
                                    </h6>
                                    <div class="mb-5">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="category_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                            <option value="">{{ translate('All Categories') }}</option>
                                            @foreach(\App\Models\ScholarshipCategory::all() as $category)
                                            <option value="{{ $category->slug }}" @if (isset($_GET['category_id']) && $_GET['category_id']==$category->slug ) selected @endif>
                                                {{$category->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div> -->
                  <!-- Countries -->
                  <!-- <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Countries') }}</span>
                                    </h6>
                                    <div class="mb-5">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="country_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                            <option value="">{{ translate('All Countries') }}</option>
                                            @foreach (\App\Models\Country::all() as $key => $country)
                                            <option value="{{ $country->id }}" @if (isset($country_id) && $country_id==$country->id ) selected
                                                @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
                  <!-- Hourly Rate -->
                  <!-- <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Hourly Rate') }}</span>
                                    </h6>
                                    <div class="aiz-range-slider mb-5 px-3">
                                        <div id="input-slider-range" data-range-value-min="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::min('hourly_rate') }} @endif" data-range-value-max="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::max('hourly_rate') }} @endif">
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70" @if (isset($min_price)) data-range-value-low="{{ $min_price }}" @elseif(count($freelancers)> 1 &&
                                                    $freelancers->min('hourly_rate') > 0)
                                                    data-range-value-low="{{ $freelancers->min('hourly_rate') }}"
                                                    @else
                                                    data-range-value-low="0"
                                                    @endif
                                                    id="input-slider-range-value-low"
                                                    ></span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70" @if (isset($max_price)) data-range-value-high="{{ $max_price }}" @elseif(count($freelancers)> 1 &&
                                                    $freelancers->max('hourly_rate') > 0)
                                                    data-range-value-high="{{ $freelancers->max('hourly_rate') }}"
                                                    @else
                                                    data-range-value-high="0"
                                                    @endif
                                                    id="input-slider-range-value-high"
                                                    ></span>
                                            </div>
                                        </div>
                                    </div> -->
                  <!--   Scholarship Type-->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="bg-white pr-3">{{ translate('  Scholarship Type') }}</span>
                  </h6>
                  <div class="aiz-checkbox-list">

                    @foreach(\App\Models\ScholarshipCategory::All() as $category)
                    <label class="aiz-checkbox">
                      <input type="checkbox" name="category_id" value="{{$category->id}}" onchange="applyFilter()" @if
                        ($category_id=='{{$category->id}}' ) checked @endif> {{ $category->category_name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                  <!-- Level of Study -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="bg-white pr-3">{{ translate('    Level of Study') }}</span>
                  </h6>
                  <div class="aiz-checkbox-list">

                    @foreach(\App\Models\ScholarshipLevel::All() as $Level)
                    <label class="aiz-checkbox">
                      <input type="checkbox" name="level_id" value="{{$Level->id}}" onchange="applyFilter()" @if
                        ($level_id=='{{$Level->id}}' ) checked @endif> {{ $Level->level_name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                  <!-- Field of Study -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="bg-white pr-3">{{ translate('   Field of Study') }}</span>
                  </h6>
                  <div class="aiz-checkbox-list">

                    @foreach(\App\Models\ScholarshipFieldStudy::All() as $FieldStudy)
                    <label class="aiz-checkbox">
                      <input type="checkbox" name="fieldStudy_id" value="{{$FieldStudy->id}}" onchange="applyFilter()"
                        @if ($fieldStudy_id=='{{$FieldStudy->id}}' ) checked @endif> {{ $FieldStudy->name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                  <!--  Location -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="bg-white pr-3">{{ translate('    Location') }}</span>
                  </h6>

                  <div class="aiz-checkbox-list">
                    <!-- search box -->
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-append">
                        <!-- here button -->
                      </div>
                    </div>
                    @foreach(\App\Models\ScholarshipCountry::All() as $Country)
                    <label class="aiz-checkbox">
                      <input type="checkbox" name="country_id" value="{{$Country->id}}" onchange="applyFilter()" @if
                        ($country_id=='{{$Country->id}}' ) checked @endif> {{ $Country->country_name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                </div>
                <!-- Skills -->
                <div class="pt-3 d-none">
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class="bg-white pr-3">{{ translate('Skills') }}</span>
                  </h6>
                  <div class="">
                    <select class="select2 form-control aiz-selectpicker" multiple="multiple" name="skill_ids[]"
                      onchange="applyFilter()" data-toggle="select2" data-placeholder="Choose ..."
                      data-live-search="true">
                      @foreach(\App\Models\Skill::all() as $skill)
                      <option value="{{$skill->id}}" @if (in_array($skill->id, $skill_ids)) selected @endif>
                        {{$skill->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="mt-3">
                  <button type="submit"
                    class="border-0  text-white fs-16  btn btn-primary px-3 py-2 mt-3">Submit</button>
                </div>
              </div>
            </div>
            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
              data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
          </div>
        </div>

        <!-- scholarships List -->
        <div class="col-xl-9 col-lg-8">
          <input type="hidden" name="type" value="scholarships">
          @foreach($scholarships as $scholarship )

          <div class="">
            <div class="row py-4">
              <div class="col-lg-2 ">
                <div class="d-flex justify-content-center w-100">

                  <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}"
                    class="img-fluid lazyload mb-3">
                </div>

                <a href="{{$scholarship->website_link}}"
                  class="d-flex justify-content-center text-white btn c-pointer px-4  py-1" style="background: #275846;"
                  target="_blank">
                  Website
                </a>
              </div>
              <div class="col-lg-10 border-gray-400">
                <h2 class="fs-18 fw-700 mb-1 bg-white d-flex justify-content-between">
                  <a href="#" class=" fs-16 fw-700 pb-1 " title="{{ $scholarship->title }}"
                    style="border-bottom: 2px solid  #000003; color: #000003">
                    {{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }}
                  </a>
                  <img src="{{my_asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
                </h2>
                <div>
                  @if($scholarship->university != null)
                  <div class="  ">
                    <p class=" fre-scsh-uni-name"> {{ $scholarship->university->university_name }} |
                      @if($scholarship->country !=null)
                      {{ $scholarship->country->	country_name }}
                      @endif
                    </p>
                  </div>
                  @endif
                </div>
                <div class="row">
                  <div class="col-4 pr-0">
                    <p class="fre-scsh-left-side-title">
                      Scholarships Overview:
                    </p>
                  </div>
                  <div class="col-8 pl-0">


                    <p class="fre-scsh-right-side-details text-justify ">
                      The Western Sydney University provides a wide range of research scholarships to support
                      domestic and international research candidates. Scholarships are awarded based on a
                      competitive process and are open to both new and current candidates
                      <a class="fre-scsh-find-more-btn">
                        Find more
                      </a>
                    </p>

                  </div>

                </div>

                <div class="row">
                  <div class="col-4 ">
                    <p class="fre-scsh-left-side-title mb-1">
                      Level of Study:
                    </p>
                  </div>
                  <div class="col-8  pl-0">
                    @if($scholarship->level != null)
                    <p class="fre-scsh-right-side-details">{{ $scholarship->level->level_name }}</p>
                    @endif
                  </div>


                </div>
                <div class="row">
                  <div class="col-lg-4  pr-0">

                    <p class=" fre-scsh-left-side-title ">
                      Field of Study:
                    </p>
                  </div>
                  <div class="col-lg-8  pl-0">

                    <p class=" fre-scsh-right-side-details text-justify ">
                      Agriculture and Environmental Sciences | Arts and Humanities | Business and Economics
                      |Education | Health and Medicine | Law | Mathematics and Statistics | Physical Education
                      and Sports Science | Science and Engineering | Social Sciences
                    </p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-4">
                    <p class="fre-scsh-left-side-title">
                      Who can Apply:
                    </p>
                  </div>
                  <div class="col-8 pl-0">
                    @if($scholarship->WhoCanApply != null)

                    <p class="fre-scsh-right-side-details">{{ $scholarship->WhoCanApply->title}}
                    </p>
                    @endif
                  </div>

                </div>

                <div class="row">
                  <div class="col-lg-4  pr-0">

                    <p class=" fre-scsh-left-side-title ">
                      Need help with your Application:
                    </p>
                  </div>
                  <div class="col-lg-8  pl-0">

                    <p class=" fre-scsh-right-side-details text-justify ">
                      Would you like someone experienced to review and give
                      feedback prior to submitting your scholarship
                      application? Scholarships Australia can assist you to
                      get connected with consultants who are previous
                      scholarship recipients in your field to ensure you
                      submit a competitive application.
                      <!-- <a class="fre-scsh-find-more-btn m-0">
                            Find a consultant
                        </a> -->
                      <button class="border-0  text-white fs-16  btn  px-3 py-2 m-0" style="background: #275846;">Find a
                        consultant</button>
                    </p>
                  </div>
                </div>

              </div>
            </div>

            <div class="lg:mx-10 lg:mb-20 border-1"></div>
          </div>
          @endforeach
        </div>
      </div>
    </form>
  </div>
</section>

@endsection

@section('script')
<script type="text/javascript">
function applyFilter() {
  $('#scholarship-filter-form').submit();
}

function rangefilter(arg) {
  $('input[name=min_price]').val(arg[0]);
  $('input[name=max_price]').val(arg[1]);
  applyFilter();
};
</script>
@endsection