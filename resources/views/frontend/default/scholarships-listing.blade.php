@extends('frontend.default.layouts.app')

@section('content')
    <div class="container-main-projects-banner">
        <div class="mb-4 pb-lg-4" style="background:#275846">
            <div class="row rounded-0 px-2 mt-1 mx-4">
                <div class="col-lg-6 col-sm-12 my-auto">
                    <h3 class="text-white fw-700 fs-30 mt-4 site-font ">Available Academic Scholarships
                    </h3>
                    <p class="fw-400 text-white  site-font fs-18 mb-2">View available academic scholarships and connect with
                        experienced consultants to assist with your application. </p>
                    <a href="register?type=2"
                        class="btn rounded border site-font fs-20 mt-lg-2 frequently-qsn-title  text-white">Get Started</a>
                </div>
                <div class="col-lg-2 col-sm-12 "></div>
                <div class="col-lg-4 col-sm-12 ">
                    <img class="banner-img"
                        src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 pb-lg-5 scholarship-list-page">
        <div class="container-main-scholarship">
            @if ($keyword != null)
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 text-center">
                        <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('ScholarshipTotal') }} <span
                                class="fw-600">{{ $ScholarshipTotal }}</span>
                            {{ translate('freelancers found for') }} <span class="fw-600">{{ $keyword }}</span>
                        </h1>
                    </div>
                </div>
            @endif
            <form id="scholarship-filter-form" class="" action="" method="GET">
                <div class="row  ">
                    <!-- Sidebar -->
                    <div class="col-xl-3 col-lg-4 ">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap  z-1035 shadow-md p-10px"
                            style="background: #F2F7F2;">
                            <div class="rounded-0 border-0 collapse-sidebar c-scrollbar-light ">
                                <div class=" border-0 pl-lg-0">
                                    <h5 class="mb-0 fs-21 fw-700">
                                        @if ($country_name != null)
                                            Scholarship for in {{ $country_name }}
                                        @else
                                            {{ translate('Filter By') }}
                                    </h5>
                                    @endif

                                    <div class="mt-2">

                                        <!-- Level-show -->
                                        @foreach ($levels as $level)
                                            <span id="level_{{ $level->id }}"
                                                class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                                {{ $level->level_name }} |<p onclick="removeLevel({{ $level->id }})"
                                                    class="m-0  d-inline fw-700">
                                                    X</p>
                                            </span>
                                        @endforeach
                                        <!-- field name  -->
                                        @foreach ($fieldStudies as $fieldStudy)
                                            <span id="fieldStudy_{{ $fieldStudy->id }}"
                                                class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                                {{ $fieldStudy->name }} | <p
                                                    onclick="removeFieldStudy({{ $fieldStudy->id }})"
                                                    class="m-0  d-inline fw-700">
                                                    X</p>
                                            </span>
                                        @endforeach
                                        {{-- who can apply --}}
                                        @foreach ($whoCanApplies as $whoCanApply)
                                        <span id="whoCanApply_{{ $whoCanApply->id }}"
                                            class=" btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0 ">
                                            {{ $whoCanApply->name }} | <p
                                                onclick="removewhoCanApply({{ $whoCanApply->id }})"
                                                class="m-0  d-inline fw-700">
                                                X</p>
                                        </span>
                                    @endforeach
                                        <!-- country name -->
                                        @foreach ($countries as $country)
                                            <span id="country_{{ $country->id }}"
                                                class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">
                                                {{ $country->country_name }} |
                                                <p onclick="removeCountry({{ $country->id }})" class="m-0 d-inline fw-700"
                                                    style="cursor: pointer;">X</p>
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
                                        <!-- Level of Study -->
                                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Level of Study') }}</span>
                                        </h6>
                                        <div class="aiz-checkbox-list">
                                            @foreach (\App\Models\ScholarshipLevel::all() as $level)
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="level_id[]" value="{{ $level->id }}"
                                                        onchange="applyFilter()"
                                                        @if (in_array($level->id, $level_id)) checked @endif>
                                                    {{ $level->level_name }}
                                                    <span class="aiz-square-check"></span>
                                                    <span class="float-right text-secondary fs-12"></span>
                                                </label>
                                            @endforeach
                                        </div>

                                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Field of Study') }}</span>
                                        </h6>
                                        <div class="aiz-checkbox-list">
                                            @foreach (\App\Models\ScholarshipFieldStudy::all() as $fieldStudy)
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="fieldStudy_id[]"
                                                        value="{{ $fieldStudy->id }}" onchange="applyFilter()"
                                                        @if (in_array($fieldStudy->id, $fieldStudy_ids)) checked @endif>
                                                    {{ $fieldStudy->name }}
                                                    <span class="aiz-square-check"></span>
                                                    <span class="float-right text-secondary fs-12"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                        {{-- who can apply --}}
                                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Who Can Appaly') }}</span>
                                        </h6>
                                        <div class="aiz-checkbox-list">
                                            @foreach (\App\Models\ScholarshipWhoCanApply::all() as $whoCanApply)
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="whoCanApply_id[]"
                                                        value="{{ $whoCanApply->id }}" onchange="applyFilter()"
                                                        @if (in_array($whoCanApply->id, $whoCanApply_ids)) checked @endif>
                                                    {{ $whoCanApply->name }}
                                                    <span class="aiz-square-check"></span>
                                                    <span class="float-right text-secondary fs-12"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                        <!-- Country -->
                                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                                            <span class=" pr-3">{{ translate('Country') }}</span>
                                        </h6>
                                        <div class="mb-5">

                                            <select multiple class="select2 form-control aiz-selectpicker rounded-1"
                                                name="country_id[]" onchange="applyFilter()" data-toggle="select2"
                                                data-live-search="true">
                                                <option value="0" @if (in_array(0, $country_id) || ($country_id[0] == '' && $country_id == '')) selected @endif>
                                                    {{ translate('All Countries') }}
                                                </option>
                                                @foreach (\App\Models\ScholarshipCountry::all() as $country)
                                                    <option value="{{ $country->id }}"
                                                        @if (in_array($country->id, $country_id)) selected @endif>
                                                        {{ $country->country_name }}</option>
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
                                            <select class="select2 form-control aiz-selectpicker" multiple="multiple"
                                                name="skill_ids[]" onchange="applyFilter()" data-toggle="select2"
                                                data-placeholder="Choose ..." data-live-search="true">
                                                @foreach (\App\Models\Skill::all() as $skill)
                                                    <option value="{{ $skill->id }}"
                                                        @if (in_array($skill->id, $skill_ids)) selected @endif>
                                                        {{ $skill->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
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

                        @foreach ($scholarships as $scholarship)
                            <div class="row py-4  all-scholarship-list">
                                <div class="col-lg-2 col-12">
                                    <div class="d-flex justify-content-center w-100 mb-1" style="border:1px solid #ddd">

                                        <img src="{{ custom_asset($scholarship->banner) }}"
                                            alt="{{ $scholarship->title }}" class="img-fluid lazyload mb-1 p-1">
                                    </div>

                                    <a href="{{ $scholarship->website_link }}"
                                        class="d-flex justify-content-center  text-white btn c-pointer px-4  py-1"
                                        style="background: #275846;" target="_blank">
                                        Website
                                    </a>

                                    <!-- <div class="">
                                                        <p class="btn btn-primary btn-sm mt-2 w-100  fw-700">
                                                            <img class=" px-1  " src=" {{ asset('/assets/find-consultant/logo-1.png') }}" alt="Image" style="width:36px; " />
                                                            {{ translate(' Find a consultant') }}
                                                        </p>
                                                    </div> -->
                                </div>
                                <div class="col-lg-10 border-gray-400">

                                    <div class="site-font">
                                        <p class="site-font"> <!-- @if ($scholarship->university != null)
    <div class="  ">
                                                            <p class=" fre-scsh-uni-name mb-1"> {{ $scholarship->university->university_name }} |
                                                                @if ($scholarship->country != null)
    {{ $scholarship->country->country_name }}
    @endif
                                                            </p>
                                                        </div>
    @endif --></p>
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
                                        <div class="col-lg-9 col-12">
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class=" fs-20 fw-700 site-font pb-1 "
                                                    title="{{ $scholarship->title }}" style="color:#5ABC76;">
                                                    <u>{{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }}</u>
                                                    |
                                                    <u>
                                                        @if ($scholarship->university != null)
                                                            {{ $scholarship->university->university_name }} |
                                                            @if ($scholarship->country != null)
                                                                {{ $scholarship->country->country_name }}
                                                            @endif
                                                        @endif
                                                    </u>
                                                </a>

                                                <!-- <div>
                                                            <img src="{{ asset('assets/frontend/default/img/scholarship/heart.png') }}" alt="">
                                                            <div class="">
                                                                <p class="btn btn-primary btn-sm mt-2 w-100  fw-700">
                                                                    <img class=" px-1  " src=" {{ asset('/assets/find-consultant/logo-1.png') }}" alt="Image" style="width:36px; " />
                                                                    {{ translate(' Find a consultant') }}
                                                                </p>
                                                            </div>
                                                        </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-12">
                                                    <p class="fre-scsh-left-side-title mb-0">
                                                        Who can Apply:
                                                    </p>
                                                </div>
                                                <div class="col-lg-9 col-12 pl-lg-0 pl-3">
                                                    @if ($scholarship->WhoCanApply != null)
                                                        <p class="fre-scsh-right-side-details pb-0 mb-0">
                                                            {{ $scholarship->WhoCanApply->name }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-12 ">
                                                    <p class="fre-scsh-left-side-title mb-1">
                                                        Level of Study:
                                                    </p>
                                                </div>
                                                <div class="col-lg-9 col-12  pl-lg-0 pl-3">
                                                    @if ($scholarship->level != null)
                                                        <p class="fre-scsh-right-side-details  mb-1">
                                                            {{ $scholarship->level->level_name }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-12  pr-0">
                                                    <p class=" fre-scsh-left-side-title ">
                                                        Field of Study:
                                                    </p>
                                                </div>
                                                <div class="col-lg-9 col-12  pl-lg-0 pl-3">
                                                    @php
                                                        $fieldStudys = json_decode($scholarship->fieldStudy_id);
                                                        $studyNames = \App\Models\ScholarshipFieldStudy::whereIn('id', $fieldStudys)->pluck('name')->implode('
                                            | ');
                                                    @endphp
                                                    <p class="fre-scsh-right-side-details text-justify mb-1 pr-4">
                                                        {{ $studyNames }}
                                                    </p>
                                                </div>
                                            </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-12 ">
                                            <p class=" fre-scsh-left-side-title ">
                                                Need help with your Application:
                                            </p>
                                        </div>
                                        <div class="col-lg-9 col-12 pl-lg-0 pl-3 ">
                                            <p class=" fre-scsh-right-side-details text-justify  mb-1 w-100 pr-4">
                                                ConsultantEdu can connect you with experienced consultants who have received
                                                scholarships in your
                                                field. They can review your application and provide valuable feedback to to
                                                ensure you submit a
                                                competitive application.
                                                <!-- <a href="{{ route('register') }}?type=2" class="fre-scsh-find-more-btn text-success m-0">
                                                            Find a consultant
                                                        </a> -->
                                            </p>

                                        </div>

                                    </div>
                                        </div>
                                        <div class="col-lg-3 col-12 mt-lg-0 mt-2">
                                            <div>
                                                <!-- <img src="{{ asset('assets/frontend/default/img/scholarship/heart.png') }}" alt=""> -->

                                                @if (Auth::check() &&
                                                        ($bookmarked_scholarship = \App\Models\BookmarkedScholarship::where('user_id', auth()->user()->id)->where('scholarship_id', $scholarship->id)->first()) != null)
                                                    <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert"
                                                        href="javascript:void(0)"
                                                        data-href="{{ route('bookmarked-scholarships.destroy', $bookmarked_scholarship->id) }}"
                                                        data-target="#bookmark-remove-modal">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span>{{ translate('Remove Bookmark') }}</span>
                                                    </a>
                                                @else
                                                    <a class="btn btn-primary btn-sm  d-flex align-items-center justify-content-center fs-14 fw-700 "
                                                        href="{{ route('bookmarked-scholarships.store', encrypt($scholarship->id)) }}">
                                                        <i class="las la-bookmark fs-16 fw-700"></i>
                                                        <span class="ml-2">{{ translate('Bookmark') }}</span>
                                                    </a>
                                                @endif
                                                <a href="{{ url('/search?keyword=&type=freelancer') }}"
                                                    class="btn btn-primary btn-sm mt-2 d-flex align-items-center justify-content-center fs-14 fw-700  tex-black mb-1">
                                                    <i class="las la-user-tie fs-16 fw-700 mr-1"></i>
                                                    <span>{{ translate('Hire Consultant') }}</span>
                                                </a>

                                            </div>
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
                        <h5 class="text-center mt-lg-3">Navigating scholarships can be challenging. Let us help you:
                        </h5>
                    </div>
                    <div class="row need-help-full-body">
                        <div class="col-xl-3 col-md-6">
                            <div class=" ">
                                <div class=" h-136px align-items-center">
                                    <div class="d-flex">
                                        <img class=" mb-2 mx-auto d-block   p-3"
                                            src=" {{ asset('/assets/home/blog.png') }}" alt="Image"
                                            style="width:55px; border-radius:50%; border:1px solid #000000" />
                                        <div class="need-help-progress-bar"></div>
                                    </div>
                                    <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Post a Job
                                    </p>
                                </div>
                                <h6 class="fs-14 mt-2  text-black text-center">
                                    Create a job posting, specifying your requirements. It’s free.
                                </h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" ">
                                <div class=" h-136px align-items-center">
                                    <div class="d-flex">
                                        <img class="mb-2 mx-auto d-block text-black p-3"
                                            src="{{ asset('/assets/home/quiz1.png') }}" alt="Image"
                                            style="width:55px; border-radius:50%; border:1px solid #000000;" />
                                        <div class="need-help-progress-bar"></div>
                                    </div>
                                    <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Receive
                                        Proposals
                                    </p>
                                </div>
                                <h6 class="fs-14 mt-2  text-black text-center">
                                    Review the proposals from our academic consultants.
                                </h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" ">
                                <div class=" h-136px align-items-center">
                                    <div class="d-flex">
                                        <img class=" mb-2 mx-auto d-block
                                     p-3"
                                            src=" {{ asset('/assets/home/certificate.png') }}" alt="Image"
                                            style="width:55px; border-radius:50%; border:1px solid #000000" />
                                        <div class="need-help-progress-bar"></div>
                                    </div>
                                    <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black"> Make
                                        Selection

                                    </p>
                                </div>
                                <h6 class="fs-14 mt-2  text-black text-center">
                                    Select the consultant who is the best fit for your project.
                                </h6>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" ">
                                <div class=" h-136px align-items-center">
                                    <img class=" mb-2 mx-auto d-block p-3"
                                        src=" {{ asset('/assets/home/checked.png') }}" alt="Image"
                                        style="width:55px; border-radius:50%; border:1px solid #000000" />
                                    <p class="fs-18 fw-700 mb-lg-2 consultant-category text-center text-black">
                                        Pay Securely
                                    </p>
                                </div>
                                <h6 class="fs-14 mt-2  text-black text-center">
                                    Payment held in escrow until project is completed to your satisfaction.
                                </h6>
                            </div>

                        </div>

                    </div>
                    <div class=" text-center py-5">
                        <h5 class="btn rounded-0 text-white" style="background-color:#275846;">
                            Get Started
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
        function removeFieldStudy(fieldStudyId) {
            var fieldStudyElement = document.getElementById('fieldStudy_' + fieldStudyId);
            // console.log(fieldStudyElement);
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
    <script>
        function removeCountry(countryId) {
            var countryElement = document.getElementById('country_' + countryId);
            if (countryElement) {
                countryElement.parentNode.removeChild(countryElement);

                // Unselect the corresponding option
                var selectElement = document.querySelector('select[name="country_id"]');
                if (selectElement) {
                    var optionElement = selectElement.querySelector('option[value="' + countryId + '"]');
                    if (optionElement) {
                        optionElement.selected = false;
                    }
                }
            }
            $('#scholarship-filter-form').submit();
        }
    </script>
   <script>
    function removewhoCanApply(whoCanApplyId) {
        var whoCanApplyElement = document.getElementById('whoCanApply_' + whoCanApplyId);

        if (whoCanApplyElement) {
            whoCanApplyElement.parentNode.removeChild(whoCanApplyElement);

            // Uncheck the corresponding checkbox
            var checkbox = document.querySelector('input[name="whoCanApply_id[]"][value="' + whoCanApplyId + '"]');
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
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection
