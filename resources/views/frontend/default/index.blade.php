<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/card.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                                    <source class=" opacity-100" src=" {{ asset('assets/home/01.mp4') }}"
                                        type="video/mp4" />
                                </video>
                                <div class="carousel-caption carousel-caption-background">
                                </div>
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-lg-10 col-sm-12 home-cacap-head">
                                            <h2 class=" sm-mx-auto fw-700 fs-40 fs-sm-36px" style="">
                                               Find a top academic expert for your project </h2>
                                            <p class="fs-20 fs-sm-14 mt-4 mb-5 ">EduExHub is an exclusive platform featuring top academic experts across diverse fields. Whether it's a personal or institutional project or media interviews, our pool of top academic experts is here to assist.</p>
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
                                <img class=" " src="{{asset('Microsoft.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{asset('Airbnb.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{asset('automatic.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{asset('Bissell.svg') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{asset('NASDAQ.svg') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section> --}}

        <!-- explore services -->
       <!-- explore services -->
       @if (get_setting('how_it_works_show') == 'on')
       <div class="border-top pb-2 " style="background-color:#275846;">
           <div class="mt-5 pb-2">
               <div class="">
                   <div class=" content-title  text-center pb-5 pt-3">
                       <h2 class="fw-700 fs-36 text-white mb-3 site-font">Navigating top Academic Expert Made Easy</h2>
                       <p class="fw-700 fs-20 text-white mb-3 main-content site-font">We are the largest, globally
                           connected network of top academic talent, and we're prepared to tackle your most critical
                           projects.</p>

                   </div>
                   <div class="row need-help-section">
                       <div class="col-xl-3 col-md-6">
                           <div class=" ">
                               <div class=" h-136px align-items-center">
                                   <div class="d-flex">
                                       <img class=" mb-2 mx-auto d-block   p-3"
                                           src=" {{ asset('assets/home/post.png') }}" alt="Image"
                                           style="width:55px; border-radius:50%; border:1px solid #fff" />
                                       <div class="need-help-section-bar"></div>
                                   </div>
                                   <p
                                       class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white site-font">
                                       Post your academic projects


                                   </p>
                               </div>

                               <h6 class="fs-18 mt-3  text-white text-center site-font">
                                   Whether it is a personal or institutional project, or media interviews, our pool of
                                   top academic experts are here to assist.

                               </h6>
                           </div>

                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class=" ">
                               <div class=" h-136px align-items-center">
                                   <!-- <div class="d-flex">
                                                                                           <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{ asset('assets/home/quiz1.png') }}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
                                                                                           <div class="need-help-progress-bar"></div>
                                                                                       </div> -->
                                   <div class="d-flex">
                                       <img class="mb-2 mx-auto d-block text-black p-3"
                                           src="{{ asset('assets/home/quiz.png') }}" alt="Image"
                                           style="width:55px; border-radius:50%; border:1px solid #fff;" />
                                       <div class="need-help-section-bar">
                                       </div>
                                   </div>
                                   <p
                                       class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white site-font">
                                       Receive project EOI

                                   </p>
                               </div>
                               <h6 class="fs-18 mt-3  text-white text-center site-font">
                                   Review expressions of interest from our network of academic experts who are
                                   interested in working on your project.

                               </h6>
                           </div>

                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class=" ">
                               <div class=" h-136px align-items-center">
                                   <div class="d-flex">
                                       <img class=" mb-2 mx-auto d-block
                                p-3"
                                           src=" {{ asset('assets/home/enroll.png') }}" alt="Image"
                                           style="width:55px; border-radius:50%; border:1px solid #fff" />
                                       <div class="need-help-section-bar"></div>
                                   </div>
                                   <p
                                       class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white site-font">
                                       Select the best match for you

                                   </p>
                               </div>
                               <h6 class="fs-18 mt-3  text-white text-center site-font">
                                   Schedule meetings with the interested academic experts to determine which expert
                                   aligns best with your project requirements.

                               </h6>
                           </div>

                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class=" ">
                               <div class=" h-136px align-items-center">
                                   <img class=" mb-2 mx-auto d-block p-3"
                                       src=" {{ asset('assets/home/check.png') }}" alt="Image"
                                       style="width:55px; border-radius:50%; border:1px solid #fff" />
                                   <p
                                       class="fs-22 mt-3 fw-700 mb-lg-2 consultant-category text-center text-white site-font">
                                       Book meetings
                                   </p>
                               </div>
                               <h6 class="fs-18 mt-3 text-white text-center site-font">
                                   Make an informed decision to choose the academic expert who best matches your
                                   project needs and objectives.
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
                                <h2 class="fw-700 fre-small-font text-success">Browse academic consultants by category.</h2>
                                <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                            </div>
                            <div>
                                <a href="search?keyword=&type=freelancer"
                                    class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                    <span>All
                                        Consultants</span>
                                    <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                                        alt="Image" style="width:18px;" />
                                </a>
                            </div>
                        </div>

                        <div class="row gutters-10">
                            @if (get_setting('featured_category_list') != null)

                                @foreach ($consultant_categories as $category)
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
                                <img class=" " src=" {{ asset('assets/home/arrow-right.png') }}"
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
                                <h2 class="fw-700 fre-small-font text-success">Explore academic projects by category</h2>
                                <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                            </div>
                            <div>
                                <a href="{{ route('search') }}?category="
                                    class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                    <span>All
                                        Projects</span>
                                    <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                                        alt="Image" style="width:18px;" />
                                </a>
                            </div>
                        </div>
                        <div class="row gutters-10">

                            @foreach ($services as $category)
                                <div class="col-lg-3">
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

                                    </a>
                                </div>
                            @endforeach

                        </div>

                        <a href="{{ route('search') }}?category="
                            class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category fre-button-show">
                            <span>All
                                Projects</span>
                            <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                                alt="Image" style="width:18px;" />
                        </a>
                        <!-- <h5 class="mx-3 fre-button-show">
                                                                                            <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark ">
                                                                                                <span>All
                                                                                                    Jobs</span>
                                                                                            </a>
                                                                                            <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}" alt="Image" style="width:18px;" />
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
                        <h1 class="fw-700 fre-small-font text-success mb-2"> What sets EduExHub apart?
                        </h1>
                        {{-- <p class="fs-16 fw-700 text-black">ConsultantEdu is your premium platform for connecting with top-tier academic experts, serving a diverse clientele that includes esteemed higher education institutions, prominent media outlets, and individuals seeking expert guidance for their academic pursuits. Discover what makes us stand out:</p> --}}
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item mr-2">
                                    <a class="  fs-20 p-1   btn  btn-outline-primary px-4" id="for-consultants"
                                        data-toggle="tab" href="#consultant" role="tab" aria-controls="consultant"
                                        aria-selected="true">For Clients </a>
                                </li>

                                <li class="nav-item">
                                    <a class=" fs-20 p-1 btn  btn-outline-primary px-4 " id="for-client"
                                        data-toggle="tab" href="#client" role="tab" aria-controls="client"
                                        aria-selected="false">
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
                                            src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-leave">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        A Wealth of Expertise</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                       EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.
                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            Our platform is home to a vast pool of professionals, ensuring
                                                            that users can readily access highly qualified experts with
                                                            specialized knowledge tailored to their unique requirements.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-leave">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-leave">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-contest">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Global Accessibility</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        With our platform's global reach, users can tap into the expertise
                                                        of top academic professionals from around the world.

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            This international perspective proves invaluable when seeking
                                                            insights on global or cross-cultural educational challenges and
                                                            opportunities.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-contest">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-contest">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-freelancing">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Comprehensive Support</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                       EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            program design, policy formulation, scholarship advice, or
                                                            managing complete educational projects, our platform provides
                                                            in-house experts to assist them at every step.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-freelancing">Show less
                                                            <img class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-Intuitive">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Intuitive User Experience</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Our user-friendly interface and streamlined process cater to users
                                                        with varying levels of technical proficiency. Posting academic
                                                        projects has never been easier,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            ensuring that users can swiftly identify the ideal expert for
                                                            their needs while saving valuable time.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-Intuitive">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-Intuitive">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

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
                                                        Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-aliored">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-aliored">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-secure">
                                                    <h4 class="text-success make-impressive-title ml-1 text-success">
                                                        Secure Transactions</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until


                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in
                                                            every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-secure">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-secure">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <p class="frequently-qsn-details text-justify">
                                                ChooseEduExHub as your trusted partner in the pursuit of academic excellence. Explore our platform, post your projects, and connect with top academic experts dedicated to helping you achieve your educational and professional aspirations. Together, we'll make a remarkable difference in the world of academia and beyond.
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
                                            src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 py-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-leave">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        A Wealth of Expertise</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                       EduExHub takes pride in its extensive and diverse network of distinguished academic experts spanning various fields and disciplines.
                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            Our platform is home to a vast pool of professionals, ensuring
                                                            that users can readily access highly qualified experts with
                                                            specialized knowledge tailored to their unique requirements.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-leave">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-leave">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-contest">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Global Accessibility</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        With our platform's global reach, users can tap into the expertise
                                                        of top academic professionals from around the world.

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            This international perspective proves invaluable when seeking
                                                            insights on global or cross-cultural educational challenges and
                                                            opportunities.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-contest">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-contest">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-freelancing">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Comprehensive Support</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                       EduExHub offers an array of comprehensive services designed to meet a wide spectrum of needs. Whether users are embarking on course accreditations, curriculum development,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            program design, policy formulation, scholarship advice, or
                                                            managing complete educational projects, our platform provides
                                                            in-house experts to assist them at every step.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-freelancing">Show less
                                                            <img class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-Intuitive">

                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Intuitive User Experience</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Our user-friendly interface and streamlined process cater to users
                                                        with varying levels of technical proficiency. Posting academic
                                                        projects has never been easier,

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            ensuring that users can swiftly identify the ideal expert for
                                                            their needs while saving valuable time.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-Intuitive">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-Intuitive">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

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
                                                        Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until

                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-aliored">Show less <img
                                                                class="w-15px h-15px arrow-icon " src="{{asset('upload.png') }}"
                                                                alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-aliored">Read more <img
                                                            class="w-15px h-15px arrow-icon " src="{{asset('down-chevron.png') }}"
                                                            alt=""> </label>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row mt-1">
                                            <div class="col-1">
                                                <img src="{{ asset('tick.png') }}" alt="" height="22">
                                            </div>
                                            <div class="col-11 pl-0">
                                                <div class=" border-bottom">
                                                    <input type="checkbox" id="fre-secure">
                                                    <h4 class="make-impressive-title ml-1 text-success">
                                                        Secure Transactions</h4>
                                                    <p class="frequently-qsn-details text-justify">
                                                        Security is paramount atEduExHub. To guarantee peace of mind for both users and experts, we hold payments in escrow until


                                                    </p>
                                                    <div class="fre-content text-justify">
                                                        <p>
                                                            project completion, ensuring that satisfaction is paramount in
                                                            every collaboration.
                                                        </p>
                                                        <label class="fre-expand-icon" for="fre-secure">Show less <img
                                                                class="w-15px h-15px arrow-icon "
                                                                src="{{ asset('upload.png') }}" alt=""></label>
                                                    </div>
                                                    <label class="fre-expand-icon" for="fre-secure">Read more <img
                                                            class="w-15px h-15px arrow-icon "
                                                            src="{{ asset('down-chevron.png') }}" alt="">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <p class="frequently-qsn-details text-justify">
                                                ChooseEduExHub as your trusted partner in the pursuit of academic excellence. Explore our platform, post your projects, and connect with top academic experts dedicated to helping you achieve your educational and professional aspirations. Together, we'll make a remarkable difference in the world of academia and beyond.
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
                            <a href="{{ route('scholarship-search') }}?keyword=&type=scholarships"
                                class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                <span>All Scholarships</span>
                                <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                                    alt="Image" style="width:18px;" />
                            </a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="caorusel-box">
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=15&type=scholarships') }} "
                                    class="text-dark">
                                    <div class="card rounded " style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/agriculture.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>
                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Agriculture</p>
                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=8&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/university.jpg') }}"
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
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=10&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/medical.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Health
                                                        and Medicine</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=11&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/humnaties.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;"> Law
                                                    </p>

                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=9&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/education.jpeg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Education</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=7&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/arts.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Arts
                                                        and Humanities</p>


                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=14&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/eng.jpg') }}"
                                                    class="card-img-top" alt="service_image" height="212">
                                            </div>
                                            <div class="p-3">
                                                <div>

                                                    <p class="card-title  fs-19 fs-700" style=" line-height:17px;">
                                                        Science and Engineering</p>

                                                    <div class="mt-2">
                                                        <span>
                                                            <img class="mr-2"
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                                <a href="{{ asset('scholarshipSearch?fieldStudy_id%5B%5D=12&type=scholarships') }}"
                                    class="text-dark">
                                    <div class="card rounded" style="height:330px">
                                        <div class="">
                                            <div class=" ">
                                                <img src=" {{ asset('assets/home/Find-scholarship/IT.jpg') }}"
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
                                                                src=" {{ asset('assets/home/star (2).png') }}"
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
                        <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                            alt="Image" style="width:18px;" />
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
                            <h2 class="fw-700 fre-small-font text-success">Explore academic training by category</h2>
                            <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                        </div>
                        <div>
                            <a href="{{ asset('/search?keyword=&type=seminar') }}"
                                class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                <span>All seminars</span>
                                <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                                    alt="Image" style="width:18px;" />
                            </a>
                        </div>
                    </div>

                    <div class="row">

                        @foreach ($seminars as $seminar)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card border-1" style="height:350px;">
                                    <img class="w-100 h-190px" src=" {{ custom_asset($seminar->attachment) }}"
                                        alt="Image" />
                                    <div class="p-3">
                                        <h5 class="card-title fs-20 mt-2 seminar-home-content"> {{ $seminar->title }}
                                        </h5>
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
                        <a href="{{ asset('/search?keyword=&type=seminar') }}" class="fs-16 text-dark  "><span>All
                                seminars</span></a>
                        <img class=" category-list " src=" {{ asset('assets/findJob/right.png') }}"
                            alt="Image" style="width:18px;" />
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
                  EduExHub</h2>
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
                                          src=" {{ asset('assets/home/review-1.jpeg') }}" alt="Image"
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
                                          src=" {{ asset('assets/home/review-2.jpeg') }}" alt="Image"
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
                                          src=" {{ asset('assets/home/review-3.jpeg') }}" alt="Image"
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
                    <h2 class="fw-700 fre-small-font text-success">
                        Discover our academic expert skillsets
                    </h2>
                </div>

                <div class="row">
                    @foreach ($skills as $key => $skill)
                        <div class="col-lg-3 com-md-3 col-sm-2">
                            <a class="text-dark d-flex justify-content-start align-items-center site-font mb-1"
                                data-toggle="collapse" href="#skill_{{ $skill->id }}" role="button"
                                aria-expanded="false" aria-controls="skill_{{ $skill->id }}">
                                <label id="icon_{{ $skill->id }}"
                                    style="border-radius: 50%;height: 18px; width: 17px;align-items:center;margin: 0 5px 0 0;background: #95DF00; color: white;display: flex;justify-content: center;align-content: center; font-size:9px"
                                    class="fas fa-plus"></label>
                                <p class="mb-0 fs-15 fw-700 text-dark ">{{ $skill->name }}</p>
                            </a>
                            <div class="collapse" id="skill_{{ $skill->id }}">
                                @foreach ($skill->childrens as $subSkill)
                                    <div class=" w-200px child-skill-project-filtering">
                                        <div class="mb-1 ">
                                            <input type="checkbox" name="childSkill_id[]" id="{{ $subSkill->id }}"
                                                value="{{ $subSkill->id }}" class=" d-none" onchange="applyFilter()">
                                            <label class="c-pointer site-font fs-12 text-dark ml-3 fw-500 mb-0"
                                                for="{{ $subSkill->id }}">
                                                {{ $subSkill->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

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
        <script>
            $(document).ready(function() {
                $('.collapse').on('show.bs.collapse hide.bs.collapse', function() {
                    var parentSkillId = $(this).attr('id').replace('skill_', '');
                    var icon = $('#icon_' + parentSkillId);
                    icon.toggleClass('fa-plus fa-minus');
                });

                $('.collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
                    var parentSkillId = $(this).attr('id').replace('skill_', '');
                    var isCollapsed = !$(this).hasClass('show');
                    // Update the isCollapsed state for the parent skill in your data
                    // This could be done through an AJAX call or other means depending on your setup
                });
            });
        </script>
    @endsection

</body>

</html>
