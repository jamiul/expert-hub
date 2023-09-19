<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">
    <link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/card.css') }}">

</head>
<style>
    .text-overlay {
        position: relative;
    }

    .text-overlay h2,
    .text-overlay p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }
</style>

<body>
    @extends('frontend.default.layouts.app')
    @section('content')
        @if (get_setting('slider_section_show') == 'on')
            <section>
                <section class=" hero-section " id="frontHomeTab">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="">
                            <div class="carousel-item active">
                                <video style="min-width:100%;" playsinline autoplay muted loop>
                                    <source class=" opacity-100" src=" {{ url('/public/assets/home/01.mp4') }}"
                                        type="video/mp4" />
                                </video>
                                <div class="carousel-caption carousel-caption-background">
                                </div>
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-lg-10 col-sm-12 home-cacap-head">
                                            <h2 class=" sm-mx-auto fw-700 fs-40 fs-sm-36px" style="">
                                               Find a top academic expert for your project </h2>
                                            <p class="fs-20 fs-sm-14 mt-4 mb-5 ">ConsultantEdu Hub is an exclusive platform featuring top academic experts across diverse fields. Whether it's a personal or institutional project or media interviews, our pool of top academic experts is here to assist.</p>
                                            <div class="lg-my-3 mt-5 my-sm-0 home-banner-button ">
                                                <a href="{{ route('register') }}?type=2"
                                                    class="btn text-white fw-700  fs-20 fs-sm-12 mr-2 mb-3"
                                                    style="background-color:#1d4335;">{{ translate('Find an expert') }}</a>
                                                <a href="{{ route('register') }}?type=1"
                                                    class="btn text-white fw-700  fs-20 fs-sm-12  mb-3"
                                                    style="background-color:#1d4335;">{{ translate('Become an expert') }}</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        @endif
        <!--  Used by -->
        {{-- <section class="">
            <div class=" home-slider">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12">
                        <div class=" row ">
                            <div class=" col-lg-4 col-sm-12">
                                <h4 class="trusted heading-title fw-700" style="font-size:19px; color:#5ABC76;"> Used by
                                </h4>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{ my_asset('Microsoft.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{ my_asset('Airbnb.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{ my_asset('automatic.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{ my_asset('Bissell.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{ my_asset('NASDAQ.svg') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section> --}}

        <!-- explore services -->
        @if (get_setting('how_it_works_show') == 'on')
            <div class="border-top pb-2 " style="background-color:#275846;">
                <div class="mt-5 pb-2">
                        <div class="">
                            <div class=" content-title  text-center pb-5 pt-3">
                                <h2 class="fw-700 fs-36 text-white mb-3">Looking for a top academic expert in the field?</h2>
                                <p class="fw-700 fs-20 text-white mb-3 main-content" >Navigating academia can be challenging. We are the largest, globally connected network of top academic talent, and we're prepared to tackle your most critical projects.</p>

                            </div>
                            <div class="row need-help-section">
                                <div class="col-xl-3 col-md-6">
                                    <div class=" ">
                                        <div class=" h-136px align-items-center">
                                            <div class="d-flex">
                                                <img class=" mb-2 mx-auto d-block   p-3"
                                                    src=" {{ url('/public/assets/home/post.png') }}" alt="Image"
                                                    style="width:55px; border-radius:50%; border:1px solid #fff" />
                                                <div class="need-help-section-bar"></div>
                                            </div>
                                            <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white">
                                                Post your academic projects


                                            </p>
                                        </div>

                                        <h6 class="fs-18 mt-3  text-white text-center">
                                            Whether it is a personal or institutional project, or media interviews, our pool of top academic experts are here to assist.

                                        </h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class=" ">
                                        <div class=" h-136px align-items-center">
                                            <!-- <div class="d-flex">
                                                                                    <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{ url('/public/assets/home/quiz1.png') }}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
                                                                                    <div class="need-help-progress-bar"></div>
                                                                                </div> -->
                                            <div class="d-flex">
                                            <img class="mb-2 mx-auto d-block text-black p-3"
                                                    src="{{ url('/public/assets/home/quiz.png') }}" alt="Image"
                                                    style="width:55px; border-radius:50%; border:1px solid #fff;" />
                                            <div class="need-help-section-bar">
                                            </div>
                                            </div>
                                            <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white">
                                                Receive project interests

                                            </p>
                                        </div>
                                        <h6 class="fs-18 mt-3  text-white text-center">
                                            Review expressions of interest from our network of academic experts who are interested in working on your project.

                                        </h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class=" ">
                                        <div class=" h-136px align-items-center">
                                            <div class="d-flex">
                                                <img class=" mb-2 mx-auto d-block
                                     p-3"
                                                    src=" {{ url('/public/assets/home/enroll.png') }}" alt="Image"
                                                    style="width:55px; border-radius:50%; border:1px solid #fff" />
                                                <div class="need-help-section-bar"></div>
                                            </div>
                                            <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white">
                                                Book meetings

                                            </p>
                                        </div>
                                        <h6 class="fs-18 mt-3  text-white text-center">
                                     Schedule meetings with the interested academic experts to determine which expert aligns best with your project requirements.

                                        </h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class=" ">
                                        <div class=" h-136px align-items-center">
                                            <img class=" mb-2 mx-auto d-block p-3"
                                                src=" {{ url('/public/assets/home/check.png') }}" alt="Image"
                                                style="width:55px; border-radius:50%; border:1px solid #fff" />
                                            <p class="fs-22 mt-3 fw-700 mb-lg-2 consultant-category text-center text-white">
                                                Select the best match for you
                                            </p>
                                        </div>
                                        <h6 class="fs-18 mt-3 text-white text-center">
                                            Make an informed decision to choose the academic expert who best matches your project needs and objectives.
                                        </h6>
                                    </div>

                                </div>

                            </div>
                            <div class=" text-center py-5">
                                <a href="{{ url('/register') }}" class=" btn rounded border text-white fs-18"
                                    style="background-color:#275846;">
                                    Get Started
                                </a>

                            </div>
                        </div>
                </div>
            </div>
        @endif

        <!-- Consultant Service Category -->
        @if (get_setting('featured_category_show') == 'on')
            <form id=" consultant-filter-form" action="" method="GET">
                <section class="bg-white border-top">
                    <div class="container-home">

                        <div class="d-flex justify-content-between ">
                            <div class="w-lg-75w-lg-75 lh-1-8 content-title ">
                                <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                                <h2 class="fw-700 fre-small-font text-success">Hire academic consultants by category</h2>
                                <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                            </div>
                            <div>
                                <a href="search?keyword=&type=freelancer"
                                    class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                    <span>All
                                        Consultants</span>
                                    <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}"
                                        alt="Image" style="width:18px;" />
                                </a>
                            </div>
                        </div>

                        <div class="row gutters-10">
                            @if (get_setting('featured_category_list') != null)
                                    @php
                                        $consultant_categories = \App\Models\ConsultantCategory::take(8)->get();
                                    @endphp
                                @foreach ( $consultant_categories as $category )
                                        <div class="col-md-3">
                                            <div class="card" style="height:350px;">
                                                <img class="w-100 h-170px" src=" {{ custom_asset($category->photo) }}"
                                                    alt="Image" />
                                                <div class="card-body" style=" padding:13px;">
                                                    <a class=" featured_category text-dark" onclick="applyFilter()"
                                                        href="{{ route('freelancer.category', $category->id) }}">
                                                        <p class="fs-22 fw-600 " style="height:45px; line-height:23px;">
                                                            {{ $category->name }}
                                                        </p>
                                                        <p class="fs-18 " style=" line-height:23px;">
                                                            {{ $category->description }} <a
                                                                href="{{ route('freelancer.category', $category->id) }}"
                                                                class="nav-toggle "style="color:#6560E6;">Find
                                                                Consultants</a></p>
                                                </div>
                                            </div>
                                        </div>

                                @endforeach
                            @endif
                        </div>
                        <h5 class="fre-button-show">
                            <a href="{{ route('search') }}?category="
                                class="fs-16 text-dark ">{{ translate('All Consultants') }}
                                <img class=" " src=" {{ url('/public/assets/home/arrow-right.png') }}"
                                    alt="Image" style="width:20px;" />
                            </a>
                        </h5>
                    </div>
                </section>

            </form>
        @endif



        <!-- Find academic jobs Category -->
        @if (get_setting('featured_category_show') == 'on')
            <form id=" consultant-filter-form" action="" method="GET">
                <section class="bg-white border-top">
                    <div class="container-home">
                        <div class="d-flex justify-content-between ">
                            <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                                <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                                <h2 class="fw-700 fre-small-font text-success">Find academic projects by category</h2>
                                <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                            </div>
                            <div>
                                <a href="{{ route('search') }}?category="
                                    class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                    <span>All
                                        Projects</span>
                                    <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}"
                                        alt="Image" style="width:18px;" />
                                </a>
                            </div>
                        </div>
                        <div class="row gutters-10">
                            @php
                                $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                                    ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                                    ->pluck('user_id');

                                $services = \App\Models\ProjectCategory::take(8)->get();
                            @endphp
                            @foreach ($services as $category)
                                <div class="col-md-3">
                                    <a href="{{ route('projects.category', $category->slug) }} " class="text-dark">
                                        <div class=" card" style="height:283px;">
                                            <img class="w-100 h-200px" src=" {{ custom_asset($category->photo) }}"
                                                alt="Image" />
                                            <div class="card-body" style=" padding:13px;">


                                                <p class="fs-22 fw-600 " style="height:45px; line-height:23px;">
                                                    {{ $category->name }}
                                                </p>


                                            </div>
                                        </div>

                                </div>
                                </a>
                            @endforeach

                        </div>

                        <a href="{{ route('search') }}?category="
                            class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category fre-button-show">
                            <span>All
                                Projects</span>
                            <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}"
                                alt="Image" style="width:18px;" />
                        </a>
                        <!-- <h5 class="mx-3 fre-button-show">
                                                                        <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark ">
                                                                            <span>All
                                                                                Jobs</span>
                                                                        </a>
                                                                        <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}" alt="Image" style="width:18px;" />
                                                                        </a>
                                                                    </h5> -->
                    </div>

                </section>

            </form>
        @endif


        <!-- Join us -->
        @if (get_setting('latest_project_show') == 'on')
            <section class="border-top bg-white">


                <div class="container-home">

                    <div class="my-5 mx-4" id="FAQs">
                        <h1 class="fw-700 fre-small-font text-success mb-2"> What sets ConsultantEdu apart?
                        </h1>
                        {{-- <p class="fs-16 fw-700 text-black">ConsultantEdu is your premium platform for connecting with top-tier academic experts, serving a diverse clientele that includes esteemed higher education institutions, prominent media outlets, and individuals seeking expert guidance for their academic pursuits. Discover what makes us stand out:</p> --}}
                        <hr>

                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item mr-2">
                                    <a class="  fs-20 p-1   btn  btn-outline-primary px-4" id="for-consultants" data-toggle="tab"
                                        href="#consultant" role="tab" aria-controls="consultant" aria-selected="true">For Clients </a>
                                </li>

                                <li class="nav-item">
                                    <a class=" fs-20 p-1 btn  btn-outline-primary px-4 " id="for-client" data-toggle="tab"
                                        href="#client" role="tab" aria-controls="client" aria-selected="false">
                                        For Consultant </a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-2" id="consultant" role="tabpanel"
                            aria-labelledby="for-consultants">
                            <!-- Frequently asked questions -->
                            <div class=" rounded-2" style="background: #F2F7F2;">
                                <div class="mx-2 mt-5 row">
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <img class="banner-img"
                                            src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-leave">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            A Wealth of Expertise</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        ConsultantEdu takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.
                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            Our platform is home to a vast pool of professionals, ensuring that users can readily access highly qualified experts with specialized knowledge tailored to their unique requirements.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-leave">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-leave">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-contest">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Global Accessibility</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            This international perspective proves invaluable when seeking insights on global or cross-cultural educational challenges and opportunities.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-contest">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-contest">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-freelancing">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Comprehensive Support</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        ConsultantEdu offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            program design, policy formulation, scholarship advice, or managing complete educational projects, our platform provides in-house experts to assist them at every step.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-freelancing">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-Intuitive">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Intuitive User Experience</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            ensuring that users can swiftly identify the ideal expert for their needs while saving valuable time.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-Intuitive">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-Intuitive">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-aliored">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Tailored Expert Selection</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount at ConsultantEdu. To guarantee peace of mind for both users and experts, we hold payments in escrow until

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-aliored">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-aliored">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-secure">
                                                        <h4 class="text-success make-impressive-title ml-1 text-success">
                                                            Secure Transactions</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount at ConsultantEdu. To guarantee peace of mind for both users and experts, we hold payments in escrow until


                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-secure">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-secure">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <p class="frequently-qsn-details text-justify">
                                                Choose ConsultantEdu as your trusted partner in the pursuit of academic excellence. Explore our platform, post your projects, and connect with top academic experts dedicated to helping you achieve your educational and professional aspirations. Together, we'll make a remarkable difference in the world of academia and beyond.
                                            </p>
                                        </div> --}}


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade mt-2" id="client" role="tabpanel" aria-labelledby="for-client">
                            <!-- Frequently asked questions -->
                            <div class=" rounded-2" style="background: #F2F7F2;">
                                <div class="mx-2 mt-5 row">
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <img class="banner-img"
                                            src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-leave">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            A Wealth of Expertise</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        ConsultantEdu takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.
                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            Our platform is home to a vast pool of professionals, ensuring that users can readily access highly qualified experts with specialized knowledge tailored to their unique requirements.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-leave">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-leave">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-contest">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Global Accessibility</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        With our platform's global reach, users can tap into the expertise of top academic professionals from around the world.

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            This international perspective proves invaluable when seeking insights on global or cross-cultural educational challenges and opportunities.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-contest">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-contest">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-freelancing">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Comprehensive Support</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        ConsultantEdu offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            program design, policy formulation, scholarship advice, or managing complete educational projects, our platform provides in-house experts to assist them at every step.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-freelancing">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-Intuitive">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Intuitive User Experience</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Our user-friendly interface and streamlined process cater to users with varying levels of technical proficiency. Posting academic projects has never been easier,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            ensuring that users can swiftly identify the ideal expert for their needs while saving valuable time.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-Intuitive">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-Intuitive">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-aliored">

                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Tailored Expert Selection</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount at ConsultantEdu. To guarantee peace of mind for both users and experts, we hold payments in escrow until

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-aliored">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-aliored">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{my_asset('tick.png')}}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-secure">
                                                        <h4 class="make-impressive-title ml-1 text-success">
                                                            Secure Transactions</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount at ConsultantEdu. To guarantee peace of mind for both users and experts, we hold payments in escrow until


                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-secure">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-secure">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <p class="frequently-qsn-details text-justify">
                                                Choose ConsultantEdu as your trusted partner in the pursuit of academic excellence. Explore our platform, post your projects, and connect with top academic experts dedicated to helping you achieve your educational and professional aspirations. Together, we'll make a remarkable difference in the world of academia and beyond.
                                            </p>
                                        </div> --}}


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="queries" role="tabpanel" aria-labelledby="other-queries">
                            <p class="text-center text-red fw-700 fs-16" style="color:red">Upcoming topic</p>
                        </div>

                    </div>
                </div>
            </section>

        @endif

        <!--Find scholarship by category -->
        @if (get_setting('latest_project_show') == 'on')
            <section class="border-top" style="background-color:#FBF7ED; padding-bottom:10px;">
                <div class="container-home" style=" ">

                    <div class="d-flex justify-content-between ">
                        <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">

                            <h2 class="fw-700 fre-small-font text-success">
                                {{ translate('Find academic scholarships by category') }}
                            </h2>

                        </div>
                        <div>
                            <a href="{{ route('scholarshipSearch') }}?keyword=&type=scholarships"
                                class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                <span>All Scholarships</span>
                                <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}"
                                    alt="Image" style="width:18px;" />
                            </a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=15&type=scholarships') }} "
                                    class="text-dark">
                                    <div class="card rounded " style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/agriculture.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>
                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Agriculture</p>
                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 15;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }} </span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=8&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/university.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Business and
                                                        Economics</p>

                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px;  margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 8;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=10&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/medical.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Health
                                                        and Medicine</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 10;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=11&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/humnaties.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;"> Law
                                                    </p>

                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 11;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=9&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/education.jpeg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Education</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 9;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=7&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/arts.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Arts
                                                        and Humanities</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 7;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18">{{ $count }} </span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=14&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/eng.jpg') }}" class="card-img-top"
                                                    alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Science and Engineering</p>

                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>
                                                        @php
                                                            $fieldStudyId = 14;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ url('scholarshipSearch?fieldStudy_id%5B%5D=12&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ url('/public/assets/home/Find-scholarship/IT.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>
                                                    <a class="card-title  fs-19 fs-700"
                                                        style=" line-height:17px;">Mathematics and Statistics
                                                    </a>
                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ url('/public/assets/home/star (2).png') }}"
                                                                alt="Image" style="width:14px; margin-bottom:5px;" />
                                                        </span>@php
                                                            $fieldStudyId = 12;
                                                            $count = \App\Models\Scholarship::where('fieldStudy_id', 'LIKE', '%"' . $fieldStudyId . '"%')->count();
                                                        @endphp
                                                        <span class="fs-18"> {{ $count }}</span>
                                                        <span class="fs-18"> Available</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                    <h5 class=" fre-button-show">
                        <a href="" class="fs-16 text-dark  "><span>All Scholarships
                            </span></a>
                        <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}" alt="Image"
                            style="width:18px;" />
                    </h5>
            </section>
        @endif

        <!-- Academic training -->
        @if (get_setting('latest_project_show') == 'on')
            <section class="border-top bg-white" style=" padding-bottom:10px;">
                <div class="container-home">
                    <div class="d-flex justify-content-between ">
                        <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                            <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                            <h2 class="fw-700 fre-small-font text-success">Find academic training</h2>
                            <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                        </div>
                        <div>
                            <a href="{{ url('/search?keyword=&type=seminar') }}"
                                class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                <span>All seminars</span>
                                <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}"
                                    alt="Image" style="width:18px;" />
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        @php
                            $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                                ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                                ->pluck('user_id');

                            $seminars = \App\Models\Seminar::all();
                        @endphp
                        @foreach ($seminars as $seminar)
                       
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card border-1" style="height:350px;">
                                    <img class="w-100 h-190px" src=" {{ custom_asset($seminar->attachment) }}"
                                        alt="Image" />
                                    <div class="p-3">
                                        <h5 class="card-title fs-20 mt-2 seminar-home-content"> {{ $seminar->title }}</h5>
                                        <p style="line-height:16px;">
                                            <span class="fw-500 fs-16 seminar-more">
                                                <u>{{ getInstructorName($seminar->user_id) }}</u> |
                                            </span>
                                            <span class="fw-500 seminar-more">
                                                <u>{{ getInstructorName(rand(10, 14)) }}</u>
                                            </span>
                                        </p>
                                        <p
                                            class="fre-scsh-right-side-details seminar-small-device-font text-justify mb-1 pr-4 p-0">
                                            {{ getSeminarModeName($seminar->seminar_mode_id) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <h5 class="fre-button-show">
                        <a href="{{ url('/search?keyword=&type=seminar') }}" class="fs-16 text-dark  "><span>All
                                seminars</span></a>
                        <img class=" category-list " src=" {{ url('/public/assets/findJob/right.png') }}" alt="Image"
                            style="width:18px;" />
                    </h5>
                </div>
            </section>
        @endif

        <!-- learn with scholarship australia -->
        @if (get_setting('latest_project_show') == 'on')
            <section class="border-bottom" style="background-color:#FBF7ED; padding-top:10px;">
                <div class=" container-home">
                    <div class="content-title">
                        <h2 class="fw-700 fre-small-font site-font text-success" style="">Client Feedback at
                            ConsultantEdu</h2>
                    </div>
                    <div class="">
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class=" card rounded-1 " style="height:350px;">
                                    <div class=" card-body">
                                        <p class="text-primary mt-2 fs-20">Client Name: Dr. Emily Johnson
                                        </p>
                                        <p class="mt-3 fs-16 text-justify mobile-text" style="height:160px;">Prof. David
                                            Smith
                                            played a pivotal role in the development of our university curriculum. His
                                            expertise, creativity, and dedication to ensuring our program met the highest
                                            standards were truly outstanding. We are grateful for his contributions and
                                            highly recommend his services to any educational institution.
                                        </p>
                                        <hr>
                                        <div class="d-flex">
                                            <div>
                                                <img class="mr-2 border "
                                                    src=" {{ url('/public/assets/home/review-1.jpeg') }}" alt="Image"
                                                    style="width:30px; border-radius:50%;" />
                                            </div>
                                            <div>
                                                <small class="fw-700 fs-14 text-black"
                                                    style="  color:#6560E6 !important;"> Review for:
                                                    Prof. David Smith</small>
                                                <h6 class="fs-14 text-muted" style="Line height:10px;"> Curriculum
                                                    Development Consultant
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class=" card rounded-1 " style="height:350px;">
                                    <div class=" card-body">
                                        <p class="text-primary mt-2 fs-20">Client Name: Jennifer Martinez
                                        </p>
                                        <p class="mt-3 fs-16 text-justify mobile-text second" style="height:180px;">
                                            We are immensely grateful to Dr. Johnson for his invaluable assistance in our
                                            university's accreditation process His deep knowledge of accreditation standards
                                            and guidance were instrumental in helping us meet and criteria. We highly
                                            recommend Dr. Johnson's consultancy services to any educational institution
                                            seeking accreditation.
                                        </p>
                                        <hr>
                                        <div class="d-flex  ">
                                            <div>
                                                <img class="mr-2 border"
                                                    src=" {{ url('/public/assets/home/review-2.jpeg') }}" alt="Image"
                                                    style="width:30px; border-radius:50%;" />
                                            </div>
                                            <div class="">
                                                <small class="fw-700 fs-14 text-black" style="color:#6560E6 !important;">
                                                    Review for: Dr. Robert Johnson
                                                </small>
                                                <h6 class="fs-14 text-muted" style="Line height:10px;"> Course
                                                    Accreditation Consultant
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class=" card rounded-1 " style="height:350px;">
                                    <div class=" card-body">
                                        <p class="text-primary mt-2 fs-20">Client Name: Professor Emily Davis
                                        </p>
                                        <p class="fs-16 text-justify mobile-text" style="height:140px;">
                                            I had the pleasure of working with Dr. Johnson on a complex university research
                                            project, and his expertise was invaluable. His analytical skills and in-depth
                                            knowledge significantly enhanced our research efforts. I highly recommend his
                                            services to anyone seeking top-tier research and analysis support.
                                        </p>
                                        <div class="border-top mt-5"></div>
                                        <div class="d-flex  mt-3">
                                            <div>
                                                <img class="mr-2  border"
                                                    src=" {{ url('/public/assets/home/review-3.jpeg') }}" alt="Image"
                                                    style="width:30px; border-radius:50%;" />
                                            </div>
                                            <div>
                                                <small class="fw-700 fs-14 text-black"
                                                    style="  color:#6560E6 !important;"> Review for: Dr. Michael Johnson
                                                </small>
                                                <h6 class="fs-14 text-muted" style="Line height:10px;">Reasearch and
                                                    Analysis
                                                    Consultant</h6>
                                            </div>
                                        </div>
                                        </>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        @endif


        <!-- skills section  -->

        @if (get_setting('latest_project_show') == 'on')
            <div class="container-home ">
                <div class="content-title">
                    <h2 class="fw-700 fre-small-font text-success">Find skill by category</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list" style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1"> Course Accreditations</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">
                                <h6><a href="" class="fs-14" style="color:#5ABC76;">
                                        Instructional Designer</a></h6>
                                <h6> <a href="" class=" fs-14 " style="color:#5ABC76;">
                                        Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14 " style="color:#5ABC76;">Subject Matter Expert</a>
                                </h6>
                                <h6> <a href="" class="fs-14" style="color:#5ABC76;">Accreditation Specialist</a>
                                </h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Education Consultant</a>
                                </h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">
                                        Learning Designer</a></h6>
                                <h6> <a href="" class="fs-14 " style="color:#5ABC76;">
                                        Assessment Coordinator</a></h6>
                                <h6> <a href="" class="fs-14" style="color:#5ABC76;">
                                        Quality Assurance Analyst</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Content Writer </a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Researcher </a></h6>
                                <h6><a href="" class="fs-14" style="color:#5ABC76;">
                                        Project Manager</a></h6>
                                <h6><a href="" class="fs-14 " style="color:#5ABC76;">E-Learning Developer</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;"> Instructional
                                        Technologist</a></h6>
                                <h6> <a href="" class="fs-14" style="color:#5ABC76;">Educational Psychologist</a>
                                </h6>
                                <h6><a href="" class="fs-14 " style="color:#5ABC76;"> Assessment Specialist</a>
                                </h6>
                                <h6> <a href="" class="fs-14 " style="color:#5ABC76;">Multimedia Specialist</a>
                                </h6>
                                <h6> <a href="" class="fs-14 " style="color:#5ABC76;">Graphic Designer</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Data Analyst</a></h6>
                                <h6> <a href="" class="fs-14 " style="color:#5ABC76;">Evaluation and Assessment
                                        Coordinator</a>
                                </h6>
                                <h6> <a href="" class="fs-14" style="color:#5ABC76;">Online Learning
                                        Coordinator</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 px-0 mb-0 py-1"> Curriculum Development</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">
                                <h6> <a href="" class="fs-14  ">Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Subject Matter Expert (SME)</a></h6>
                                <h6><a href="" class="fs-14  ">Education Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Content Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Learning Experience Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Curriculum Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Technologist</a></h6>
                                <h6> <a href="" class="fs-14  ">Educational Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">E-Learning Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Assessment Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Learning Designer</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Project Manager</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Coordinator</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Materials Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Integration Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Assessment Analyst</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Learning Management Systems</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">
                                <h6> <a href="" class="fs-14  "> LMS Developer</a></h6>
                                <h6> <a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  "> UX/UI Designer</a></h6>
                                <h6><a href="" class="fs-14  "> Front-end Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Back-end Developer</a></h6>
                                <h6> <a href="" class="fs-14  "> Full-stack Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Software Engineer</a></h6>
                                <h6> <a href="" class="fs-14  "> System Administrator</a></h6>
                                <h6><a href="" class="fs-14  "> Database Administrator</a></h6>
                                <h6><a href="" class="fs-14  "> Project Manager</a></h6>
                                <h6><a href="" class="fs-14  "> Quality Assurance Analyst</a></h6>
                                <h6><a href="" class="fs-14  "> Content Developer </a></h6>
                                <h6><a href="" class="fs-14  "> Graphic Designer</a></h6>
                                <h6> <a href="" class="fs-14  "> Mobile App Developer</a></h6>
                                <h6><a href="" class="fs-14  "> Integration Specialist</a></h6>
                                <h6> <a href="" class="fs-14  "> Technical Writer</a></h6>
                                <h6> <a href="" class="fs-14  "> User Support Specialist</a></h6>
                                <h6> <a href="" class="fs-14  "> Data Analyst</a></h6>
                                <h6><a href="" class="fs-14  "> Training Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  "> LMS Administrator</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Writing and Editing</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2 ">
                                <h6><a href="" class="fs-14  ">Academic Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Content Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Copywriter</a></h6>
                                <h6><a href="" class="fs-14  ">Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Proofreader</a></h6>
                                <h6> <a href="" class="fs-14  ">Researcher</a></h6>
                                <h6> <a href="" class="fs-14  ">Subject Matter Expert</a></h6>
                                <h6> <a href="" class="fs-14  ">Curriculum Developer</a></h6>
                                <h6><a href="" class="fs-14  ">Instructional Designer</a></h6>
                                <h6><a href="" class="fs-14  ">Copy Editor</a></h6>
                                <h6><a href="" class="fs-14  ">Publishing Assistant</a></h6>
                                <h6> <a href="" class="fs-14  ">Editorial Assistant</a></h6>
                                <h6><a href="" class="fs-14  ">Technical Writer</a></h6>
                                <h6> <a href="" class="fs-14  ">Grant Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Manuscript Editor</a></h6>
                                <h6> <a href="" class="fs-14  ">Citation Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Academic Policy Writer</a></h6>
                                <h6><a href="" class="fs-14  ">Legal Writer</a></h6>
                                <h6>
                                    <a href="" class="fs-14  ">Language Editor</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Freelance Writer/Editor</a></h6>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row my-lg-3">
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Research and Analysis</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">
                                <h6> <a href="" class="fs-14  ">Confirmatory Factor Analysis(CFA)</a></h6>
                                <h6> <a href="" class="fs-14  ">Cross-Lagged Panel Models</a></h6>
                                <h6><a href="" class="fs-14  ">Demographic Methods</a></h6>
                                <h6> <a href="" class="fs-14  ">Discourse analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Dynamic Panel Data Modeling</a></h6>
                                <h6> <a href="" class="fs-14  ">Dynamic SEM (DSEM)</a></h6>
                                <h6><a href="" class="fs-14  ">Ecological Momentary Assessment(EMA)</a>
                                </h6>
                                <h6><a href="" class="fs-14  ">Empirical Dynamic Modeling(EDM)</a></h6>
                                <h6> <a href="" class="fs-14  ">Experience Sampling Methods(ESM)</a></h6>
                                <h6><a href="" class="fs-14  ">Intensive Longitudinal Data Analysis</a>
                                </h6>
                                <h6><a href="" class="fs-14  ">Longitudinal Analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Longitudinal SEM</a></h6>
                                <h6> <a href="" class="fs-14  ">Measurement Invariance Testing</a></h6>
                                <h6> <a href="" class="fs-14  ">Multilevel Modeling(MLM)</a></h6>
                                <h6> <a href="" class="fs-14  ">Multilevel Structural Equation
                                        Modeling(MSEM)</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Panel Data Modeling</a></h6>
                                <h6><a href="" class="fs-14  ">Path Analysis</a></h6>
                                <h6> <a href="" class="fs-14  ">Qualitative data analysis</a></h6>
                                <h6> <a href="" class="fs-14  ">Quantitative data analysis</a></h6>
                                <h6><a href="" class="fs-14  ">Structural Equation Modeling(SEM)</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Transcription and Translation</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">

                                <h6><a href="" class="fs-14  ">Academic Transcriber</a></h6>
                                <h6><a href="" class="fs-14  ">Academic Translator</a></h6>
                                <h6><a href="" class="fs-14  ">Language Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Transcriptionist</a></h6>
                                <h6><a href="" class="fs-14  ">Language Services Coordinator</a></h6>
                                <h6> <a href="" class="fs-14  ">Translation Project Manager</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Quality Assurance Specialist</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Linguistics Researcher</a></h6>
                                <h6> <a href="" class="fs-14  ">Bilingual Research Assistant</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Transcription Editor</a></h6>
                                <h6><a href="" class="fs-14  ">Multilingual Content Writer</a></h6>
                                <h6> <a href="" class="fs-14  ">Academic Proofreader</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Instructor</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Technology Specialist</a></h6>
                                <h6> <a href="" class="fs-14  ">Interpreting Services Coordinator</a></h6>
                                <h6><a href="" class="fs-14  ">Localization Specialist</a></h6>
                                <h6><a href="" class="fs-14  ">Language Data Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Academic Language Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Language Services Administrator</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Scholarship Applications
                            </h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2">
                                <h6> <a href="" class="fs-14  ">Academic Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Scholarship Application Advisor</a></h6>
                                <h6><a href="" class="fs-14  ">Research Grant Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Scholarship Specialist</a></h6>
                                <h6><a href="" class="fs-14  ">Grant Proposal Writer</a></h6>
                                <h6> <a href="" class="fs-14  ">Research Funding Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Scholarship Application Reviewer</a></h6>
                                <h6><a href="" class="fs-14  ">Research Project Manager</a></h6>
                                <h6><a href="" class="fs-14  ">Funding Strategy Consultant</a></h6>
                                <h6> <a href="" class="fs-14  ">Grant Development Coordinator</a></h6>
                                <h6><a href="" class="fs-14  ">Research Scholarship Coach</a></h6>
                                <h6> <a href="" class="fs-14  ">Scholarship Application Coordinator</a>
                                </h6>
                                <h6> <a href="" class="fs-14  ">Grant Writing Specialist</a></h6>
                                <h6><a href="" class="fs-14  ">Research Funding Analyst</a></h6>
                                <h6><a href="" class="fs-14  ">Scholarship Program Manager</a></h6>
                                <h6><a href="" class="fs-14  ">Research Grant Administrator</a></h6>
                                <h6><a href="" class="fs-14  ">Funding Opportunities Researcher</a></h6>
                                <h6> <a href="" class="fs-14  ">Scholarship Application Assessor</a></h6>
                                <h6><a href="" class="fs-14  ">Academic Writing Consultant</a></h6>
                                <h6><a href="" class="fs-14  ">Supervisors Communications Specialist</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-dark py-2 cat-list " style="">
                            <h6 class="fs-18 fw-700 mb-0 py-1">Mentoring and Tutoring</h6>
                        </div>
                        <div class="content">
                            <div class="px-3 py-2 fs-14">
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni Maths Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Uni Statistics Tutor</a>
                                </h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Uni Science Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni English Language
                                        Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni English Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Uni Biology Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni Chemistry Tutor</a>
                                </h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni Physics Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni Computer Science
                                        Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Uni Business Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School Maths Tutor</a>
                                </h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School Statistics
                                        Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School Science
                                        Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School English
                                        Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">High School Biology
                                        Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School Chemistry
                                        Tutor</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">High School Physics
                                        Tutor</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Academic Coach</a></h6>
                                <h6> <a href="" class="fs-14  " style="color:#5ABC76;">Career Coach</a></h6>
                                <h6><a href="" class="fs-14  " style="color:#5ABC76;">Peer Academic Advisor</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif





        <!--
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                              <h1>Column one</h1>
                                                              <div class="px-3 py-2">
                                                                <h6 class="fs-18">
                                                                  High School Chemistry Tutor</h6>
                                                                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                                                                <h6 class="fs-18 text-normal">Academic Coach</h6>
                                                                <h6 class="fs-18 text-normal">Career Coach</h6>
                                                                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="px-3 py-2">

                                                                <h6 class="fs-18">
                                                                  High School Chemistry Tutor</h6>
                                                                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                                                                <h6 class="fs-18 text-normal">Academic Coach</h6>
                                                                <h6 class="fs-18 text-normal">Career Coach</h6>
                                                                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="vertical-line"></div>
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                              <div class="px-3 py-2">

                                                                <h6 class="fs-18">
                                                                  High School Chemistry Tutor</h6>
                                                                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                                                                <h6 class="fs-18 text-normal">Academic Coach</h6>
                                                                <h6 class="fs-18 text-normal">Career Coach</h6>
                                                                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="px-3 py-2">

                                                                <h6 class="fs-18">
                                                                  High School Chemistry Tutor</h6>
                                                                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                                                                <h6 class="fs-18 text-normal">Academic Coach</h6>
                                                                <h6 class="fs-18 text-normal">Career Coach</h6>
                                                                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> -->



        <!-- Last section -->
        <!-- @if (get_setting('slider_section_show') == 'on')
    <section class=" " style="min-height:350px; background-color:#FBF7ED;">
                                                      <div class="container-main">
                                                        <div class="pb-5">
                                                          <div class="row ">
                                                            <div class="col-lg-6 col-sm-12 px-4  p-3" style="">
                                                              <div>
                                                                <button class="btn  text-white fs-14" style="background-color:#275846;">Start today</button>
                                                                <h2 class=" fw-700 fs-36 my-4"
                                                                  style="font-family:sans-serif; letter-spacing: -.032em; line-height: 1em;">
                                                                  Download
                                                                  the
                                                                  App
                                                                </h2>
                                                                <small class=" my-1 fs-18">To classes on the go with scholarship Australia app. Stream or download to
                                                                  the
                                                                  watch on the plane, the subway or wherever you learn best
                                                                </small>
                                                                <div class="mt-3">
                                                                  <a href="{{ route('register') }}?type=2" style="background-color:#275846;" class=" btn mb-3 ">
                                                                    <img class="" src=" {{ url('/public/assets/home/apple.png') }}" alt="Image" style="height:20px; " />
                                                                    <span>|</span>
                                                                    <span class="text-white"> Apple store</span>

                                                                  </a>
                                                                  <a href="{{ route('register') }}?type=2" style="background-color:#275846;" class="btn  mb-3">
                                                                    <img class="" src="{{ url('/public/assets/home/playstore.png') }}" alt="Image"
                                                                      style="height:20px; " />
                                                                    <span>|</span>
                                                                    <span class="text-white">Google play store</span>
                                                                  </a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-lg-6 col-sm-12 " style="">
                                                              <img src=" {{ url('/public/assets/findJob/home-banner.png') }}" alt="Image" class=" w-100" style=" " />
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                                    </section>>
    @endif -->

    @endsection
    @section('script')
        @if (
            (Session::has('new_user') && Session::get('new_user') == true) ||
                (auth()->check() && auth()->user()->user_type == null))
            <script>
                $('#show_new_user_modal').modal({
                    show: true
                });
            </script>

            <script type="text/javascript">
                function applyFilter() {
                    $('#consultant-filter-form').submit();
                }
            </script>
        @endif
    @endsection

</body>

</html>
