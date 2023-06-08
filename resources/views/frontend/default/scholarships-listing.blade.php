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
                <div class="col-xl-3 col-lg-4 mr-4 ">
                    <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035 shadow-lg p-10px" style="background: #F2F7F2;">
                        <div class="rounded-0 border-0 collapse-sidebar c-scrollbar-light ">
                            <div class=" border-0 pl-lg-0">
                                <h5 class="mb-0 fs-21 fw-700">{{ translate('Filter By') }}</h5>
                                <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                    <i class="las la-times la-2x"></i>
                                </button>
                            </div>
                            <div class="card-body pl-lg-0">
                                <div class="">

                                    <!--   Scholarship Type-->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class=" pr-3">{{ translate('  Scholarship Type') }}</span>
                                    </h6>
                                    <div class="aiz-checkbox-list">

                                        @foreach(\App\Models\ScholarshipCategory:: all() as $category)
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="category_id" value="{{$category->id}}" @if (isset($category_id) && $category_id==$category->id) checked @endif onchange="applyFilter()"> {{ $category->category_name }}
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
                                            <input type="checkbox" name="level_id" value="{{$Level->id}}" onchange="applyFilter()" @if (isset($level_id) && $level_id==$Level->id ) checked @endif> {{ $Level->level_name }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        @endforeach
                                    </div>
                                    <!-- Field of Study -->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class=" pr-3">{{ translate('Field of Study') }}</span>
                                    </h6>
                                    <div class="mb-3">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="fieldStudy_id" onchange="applyFilter()" data-toggle="select3" data-live-search="true">
                                            <option value="">{{ translate('Field of Study') }}</option>
                                            @foreach(\App\Models\ScholarshipFieldStudy:: all() as $FieldStudy)
                                            <option value="{{$FieldStudy->id}}" @if (isset($fieldStudy_id) && $fieldStudy_id==$FieldStudy->id ) selected
                                                @endif>{{ $FieldStudy->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--  Location -->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class=" pr-3">{{ translate('Location') }}</span>
                                    </h6>
                                    <div class="mb-5">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="country_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                            <option value="">{{ translate('All Countries') }}</option>
                                            @foreach(\App\Models\ScholarshipCountry:: all() as $country)
                                            <option value="{{ $country->id }}" @if (isset($country_id) && $country_id==$country->id ) selected
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
                                        <select class="select2 form-control aiz-selectpicker" multiple="multiple" name="skill_ids[]" onchange="applyFilter()" data-toggle="select2" data-placeholder="Choose ..." data-live-search="true">
                                            @foreach(\App\Models\Skill:: all() as $skill)
                                            <option value="{{$skill->id}}" @if (in_array($skill->id, $skill_ids)) selected @endif>
                                                {{$skill->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="">
                                    <button type="submit" class="border-0  text-white fs-16  btn btn-primary px-3 py-2 mt-3">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                    </div>
                </div>

                <!-- scholarships List -->
                <div class="col-xl-8 col-lg-7  shadow-lg  c-pointer " style="background: #F2F7F2;">
                    <input type="hidden" name="type" value="scholarships">

                        @foreach($scholarships as $scholarship )
                        <div class="row py-4  all-scholarship-list">
                            <div class="col-lg-2 ">
                                <div class="d-flex justify-content-center w-100 mb-1" style="border:1px solid #ddd">

                                    <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}" class="img-fluid lazyload mb-1 p-1">
                                </div>

                                <a href="{{$scholarship->website_link}}" class="d-flex justify-content-center text-white btn c-pointer px-4  py-1" style="background: #275846;" target="_blank">
                                    Website
                                </a>
                            </div>
                            <div class="col-lg-10 border-gray-400">
                                <h2 class="fs-18 fw-700 mb-1 d-flex justify-content-between">
                                    <a href="#" class=" fs-16 fw-700 pb-1 " title="{{ $scholarship->title }}" style="border-bottom: 2px solid  #000003; color: #000003">
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
                                            <a class="fre-scsh-find-more-btn text-success">
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
                                            <a href="{{ route('register') }}?type=2" class="fre-scsh-find-more-btn text-success m-0">
                                                Find a consultant
                                            </a>
                                            <!-- <button class="border-0  text-white fs-16  btn  px-3 py-2 m-0" style="background: #275846;">Find a consultant</button> -->
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="lg:mx-10 lg:mb-20 border-1"></div>

                        @endforeach
                       <div class="mt-3">
                       {{ $scholarships->links() }}
                       </div>


                </div>
            </div>
        </form>
    </div>

    <div class="mt-5 pb-2 " style="background-color:#FBF7ED;">
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
                                    <img class=" mb-2 mx-auto d-block   p-3" src=" {{url('/public/assets/home/blog.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000" />
                                    <div class="need-help-progress-bar"></div>
                                </div>
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Post a job

                                </p>
                            </div>

                            <h6 class="fs-14 mt-2  text-black text-justify">
                                Thousands of degrees, subjects and short courses from leading Australian unis in one place.
                            </h6>
                        </div>

                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class=" ">
                            <div class=" h-136px align-items-center">
                                <div class="d-flex">
                                    <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{url('/public/assets/home/quiz1.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
                                    <div class="need-help-progress-bar"></div>
                                </div>
                                <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Receive proposal
                                </p>
                            </div>
                            <h6 class="fs-14 mt-2  text-black text-justify">
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
                            <h6 class="fs-14 mt-2  text-black text-justify">
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
                            <h6 class="fs-14 mt-2  text-black text-justify">
                                Get started on your study journey today.
                            </h6>
                        </div>

                    </div>

                </div>
                <div class=" text-center py-5">
                    <h5 class="btn rounded-1 text-black border">
                        Let's get started
                    </h5>

                </div>
            </div>
        </div>
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
