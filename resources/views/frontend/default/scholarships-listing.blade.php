@extends('frontend.default.layouts.app')

@section('content')

<section class="py-4 py-lg-5 scholarship-list-page">

  <div class="container-main-scholarship">
    @if ($keyword != null)
    <div class="row">
      <div class="col-xl-8 offset-xl-2 text-center">
        <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span>
          {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span>
        </h1>
      </div>
    </div>


    @endif
    <form id="scholarship-filter-form" class="" action="" method="GET">
      <div class="row  ">
        <!-- Sidebar -->
        <div class="col-xl-3 col-lg-4 ">
          <div class="aiz-filter-sidebar collapse-sidebar-wrap  z-1035 shadow-md " style="background: #F2F7F2;">
            <div class="rounded-0 border-0 collapse-sidebar c-scrollbar-light ">
              <div class=" border-0 pl-lg-0">
                <h5 class="mb-0 fs-21 fw-700">
                  @if($country_name !=null)
                  Scholarship for in {{$country_name}}
                  @else
                  {{ translate('Scholarship search filter') }}
                </h5>
                @endif
                <div class="mt-2">
                  @foreach($categories as $category)
                  <span id="category_{{$category->id}}"
                    class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                    <p onclick="removeCategory({{$category->id}})  " class="m-0  d-inline fw-700">
                      X</p>
                    |
                    {{$category ->category_name}}
                  </span>
                  @endforeach
                  <!-- Level-show -->
                  @foreach($levels as $level)
                  <span id="level_{{$level->id}}"
                    class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                    <p onclick="removeLevel({{$level->id}})" class="m-0  d-inline fw-700">
                      <input type="hidden" name="category_id[]" value="{{$level->id}}">X
                    </p> |
                    {{$level ->level_name}}
                  </span>
                  @endforeach
                  <!-- field name  -->
                  @foreach($fieldStudies as $fieldStudy)
                  <span id="fieldStudy_{{$fieldStudy->id}}"
                    class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                    <p onclick="removefieldStudy(fieldStudy->id}})" class="m-0  d-inline fw-700">
                      X</p> |
                    {{$fieldStudy ->name}}
                  </span>
                  @endforeach
                  <!-- country name -->
                  @foreach($countries as $country)
                  <span id="country_{{$country->id}}"
                    class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                    <p onclick="removeCountry(country->id}})" class="m-0  d-inline fw-700">
                      X</p> |
                    {{$country ->country_name}}
                  </span>
                  @endforeach

                </div>
                <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle"
                  data-target=".aiz-filter-sidebar" type="button">
                  <i class="las la-times la-2x"></i>
                </button>
              </div>
              <div class="card-body pt-2 pl-lg-0">
                <div class="">

                  <!--   Scholarship Type-->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Scholarships by Category') }}</span>
                  </h6>
                  <div class="aiz-checkbox-list">

                    @foreach(\App\Models\ScholarshipCategory:: all() as $category)
                    <label class="aiz-checkbox">
                      <input type="checkbox" name="category_id[]" value="{{$category->id}}" @if (in_array($category->id,
                      $category_id)) checked @endif onchange="applyFilter()"> {{ $category->category_name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                  <!-- Level of Study -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('    Level of Study') }}</span>
                  </h6>
                  <div class="aiz-checkbox-list">

                    @foreach(\App\Models\ScholarshipLevel:: all() as $Level)

                    <label class="aiz-checkbox">
                      <input type="checkbox" name="level_id[]" value="{{$Level->id}}" onchange="applyFilter()"
                        @if(in_array($Level->id, $level_id)) checked @endif > {{ $Level->level_name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>

                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Scholarships by Field of Study')}}</span>
                  </h6>
                  <div class="aiz-checkbox-list">
                    @foreach(\App\Models\ScholarshipFieldStudy:: all() as $fieldStudy)

                    <label class="aiz-checkbox">
                      <input type="checkbox" name="fieldStudy_id[]" value="{{$fieldStudy->id}}" onchange="applyFilter()"
                        @if (in_array($fieldStudy->id, $fieldStudy_id)) checked @endif > {{ $fieldStudy->name }}
                      <span class="aiz-square-check"></span>
                      <span class="float-right text-secondary fs-12"></span>
                    </label>
                    @endforeach
                  </div>
                  <!-- <div class="mb-3">
                                        <select multiple class="select2 form-control aiz-selectpicker rounded-1" name="fieldStudy_id[]" onchange="applyFilter()" data-toggle="select3" data-live-search="true">
                                            <option value="">{{ translate('Field of Study') }}</option>
                                            @foreach(\App\Models\ScholarshipFieldStudy:: all() as $FieldStudy)
                                            <option value="{{$FieldStudy->id}}" @if (isset($fieldStudy_id) && $fieldStudy_id==$FieldStudy->id ) selected
                                                @endif>{{ $FieldStudy->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
                  <!--  Location -->
                  <h6 class="text-left mb-3 fs-14 fw-700">
                    <span class=" pr-3">{{ translate('Scholarships by Country') }}</span>
                  </h6>
                  <div class="mb-5">
                    <select multiple class="select2 form-control aiz-selectpicker rounded-1" name="country_id[]"
                      onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                      <option value="">{{ translate('All Countries') }}</option>
                      @foreach(\App\Models\ScholarshipCountry:: all() as $country)
                      <option value="{{ $country->id }}" @if (isset($country->id) && $country_id==$country->id )
                        selected
                        @endif>{{ $country->country_name }}</option>
                      @endforeach
                    </select>
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
                      @foreach(\App\Models\Skill:: all() as $skill)
                      <option value="{{$skill->id}}" @if (in_array($skill->id, $skill_ids)) selected @endif>
                        {{$skill->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="">
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
        <div class="col-xl-9 col-lg-7  shadow-md c-pointer " style="background: #F2F7F2;">
          <input type="hidden" name="type" value="scholarships">

          @foreach($scholarships as $scholarship )
          <div class="row py-4  all-scholarship-list">
            <div class="col-lg-2 ">
              <div class="d-flex justify-content-center w-100 mb-1" style="border:1px solid #ddd">

                <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}"
                  class="img-fluid lazyload mb-1 p-1">
              </div>

              <a href="{{$scholarship->website_link}}"
                class="d-flex justify-content-center text-white btn c-pointer px-4  py-1" style="background: #275846;"
                target="_blank">
                Website
              </a>
            </div>
            <div class="col-lg-10 border-gray-400">
              <h2 class="fs-18 fw-700 mb-1 d-flex justify-content-between">
                <a href="#" class=" fs-16 fw-700 pb-1 " title="{{ $scholarship->title }}"
                  style="border-bottom: 2px solid  #000003; color: #000003">
                  {{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }} |

                  @if($scholarship->university != null)
                  {{ $scholarship->university->university_name }} |
                  @if($scholarship->country !=null)
                  {{ $scholarship->country->	country_name }}
                  @endif
                  @endif
                </a>
                <img src="{{my_asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
              </h2>
              <div>
                <!-- @if($scholarship->university != null)
                                <div class="  ">
                                    <p class=" fre-scsh-uni-name mb-1"> {{ $scholarship->university->university_name }} |
                                        @if($scholarship->country !=null)
                                        {{ $scholarship->country->	country_name }}
                                        @endif
                                    </p>
                                </div>
                                @endif -->
              </div>
              <!-- <div class="row">
                                <div class="col-3 pr-0">
                                    <p class="fre-scsh-left-side-title">
                                        Scholarships Overview:
                                    </p>
                                </div>
                                <div class="col-9 pl-0">


                                    <p class="fre-scsh-right-side-details text-justify pr-4  mb-0 pb-0">
                                        The Western Sydney University provides a wide range of research scholarships to support
                                        domestic and international research candidates. Scholarships are awarded based on a
                                        competitive process and are open to both new and current candidates
                                        <a class="fre-scsh-find-more-btn pt-0 text-success ">
                                            Read more
                                        </a>
                                    </p>

                                </div>

                            </div> -->
              <div class="row">
                <div class="col-3">
                  <p class="fre-scsh-left-side-title mb-0">
                    Who can Apply:
                  </p>
                </div>
                <div class="col-9 pl-0">
                  @if($scholarship->WhoCanApply != null)

                  <p class="fre-scsh-right-side-details pb-0 mb-0">{{ $scholarship->WhoCanApply->title}}
                  </p>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col-3 ">
                  <p class="fre-scsh-left-side-title mb-1">
                    Level of Study:
                  </p>
                </div>
                <div class="col-9  pl-0">
                  @if($scholarship->level != null)
                  <p class="fre-scsh-right-side-details  mb-1">{{ $scholarship->level->level_name }}</p>
                  @endif
                </div>


              </div>
              <div class="row">
                <div class="col-lg-3  pr-0">

                  <p class=" fre-scsh-left-side-title ">
                    Field of Study:
                  </p>
                </div>
                <div class="col-lg-9  pl-0">
                  <p class=" fre-scsh-right-side-details text-justify  mb-1 pr-4 ">

                    Agriculture and Environmental Sciences | Arts and Humanities | Business and Economics |Education |
                    Health and Medicine | Law | Mathematics and Statistics | Physical Education and Sports Science |
                    Science and Engineering | Social Sciences
                  </p>
                  <!-- @if($scholarship->fieldStudy !== null)
                                    @foreach($scholarship->fieldStudy as $fieldStudy)
                                    <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                        {{ $fieldStudy['name'] }}
                                    </p>
                                    @endforeach
                                    @endif -->
                </div>
              </div>



              <div class="row">
                <div class="col-lg-3  pr-0">

                  <p class=" fre-scsh-left-side-title ">
                    Need help with your Application:
                  </p>
                </div>
                <div class="col-lg-9  pl-0">

                  <p class=" fre-scsh-right-side-details text-justify  mb-1 pr-4">
                    FreelancerEdu can connect you with experienced consultants who have received scholarships in your
                    field. They can review your application and provide valuable feedback to to ensure you submit a
                    competitive application.
                    <a href="{{ route('register') }}?type=2" class="fre-scsh-find-more-btn text-success m-0">
                      Find a consultant
                    </a>
                    <!-- <button class="border-0  text-white fs-16  btn  px-3 py-2 m-0" style="background: #275846;">Find a consultant</button> -->
                  </p>
                </div>
              </div>

            </div>
          </div>
          <div class="lg:mx-10 lg:mb-20 " style="border:1px solid #ddd "></div>

          @endforeach
          <div class="mt-3">
            {{ $scholarships->links() }}
          </div>


        </div>
      </div>
    </form>
  </div>

  <div class="mt-5 pb-2 " style="background-color:#F2F7F2;">
    <div class="">
      <div class="">
        <div class=" content-title  text-center py-5">
          <h2 class="fw-700 fs-24 text-black mb-0">Need Scholarship help?</h2>
        </div>
        <div class="row container-fluid">
          <div class="col-xl-3 col-md-6">
            <div class=" ">
              <div class=" h-136px align-items-center">
                <div class="d-flex">
                  <img class=" mb-2 mx-auto d-block   p-3" src=" {{url('/public/assets/home/blog.png')}}" alt="Image"
                    style="width:55px; border-radius:50%; border:1px solid #000000" />
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
                  <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{url('/public/assets/home/quiz1.png')}}"
                    alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
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
                                     p-3" src=" {{url('/public/assets/home/certificate.png')}}" alt="Image"
                    style="width:55px; border-radius:50%; border:1px solid #000000" />
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
                <img class=" mb-2 mx-auto d-block p-3" src=" {{url('/public/assets/home/checked.png')}}" alt="Image"
                  style="width:55px; border-radius:50%; border:1px solid #000000" />
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
          <h5 class="btn rounded-1 text-black" style="border:1px solid #dddd">
            Let's get started
          </h5>

        </div>
      </div>
    </div>
  </div>
</section>
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
  $('#scholarship-filter-form').submit();
}
</script>
<script>
function removeLevel(levelId) {
  var levelElement = document.getElementById('level_' + levelId);
  if (levelElement) {
    levelElement.parentNode.removeChild(levelElement);

    // Uncheck the corresponding checkbox
    var checkbox = document.querySelector('input[name="level_id[]"][value="' + levelId + '"]');
    if (checkbox) {
      checkbox.checked = false;
    }
  }
  $('#scholarship-filter-form').submit();
}
</script>
<script>
function removeCountry(countryId) {
  var countryElement = document.getElementById('country_' + countryId);
  if (countryElement) {
    countryElement.parentNode.removeChild(countryElement);

    // Uncheck the corresponding checkbox
    // var checkbox = document.querySelector('input[name="country_id[]"][value="' + countryId + '"]');
    // if (checkbox) {
    //     checkbox.checked = false;
    // }
  }
}
</script>
<script>
function removeFieldStudy(fieldStudyId) {
  var fieldStudyElement = document.getElementById('fieldStudy_' + fieldStudyId);
  if (fieldStudyElement) {
    fieldStudyElement.parentNode.removeChild(fieldStudyElement);

    // Uncheck the corresponding checkbox
    var checkbox = document.querySelector('input[name="fieldStudy_id[]"][value="' + fieldStudyId + '"]');
    if (checkbox) {
      checkbox.checked = false;
    }
    $('#scholarship-filter-form').submit();

  }
}
</script>
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