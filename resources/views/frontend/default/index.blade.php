<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">

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
              <source class=" opacity-100" src=" {{url('/public/assets/home/01.mp4')}}" type="video/mp4" />
            </video>
            <div class="carousel-caption carousel-caption-background">
            </div>
            <div class="carousel-caption">
              <div class="row">
                <div class="col-lg-7 col-sm-12 home-cacap-head">
                  <h2 class=" sm-mx-auto fw-700 fs-40 fs-sm-36px" style="">
                    Hire the best consultations for any job, online</h2>
                  <p class="fs-20 fs-sm-14 my-4 ">Millions of people use scholarships Australia to turn their ideas
                    into
                    reality.</p>
                  <div class="lg-my-3 my-sm-0 home-banner-button ">
                    <a href="{{route('register') }}?type=2" class="btn text-white fw-700  fs-20 fs-sm-12 mr-2 mb-3"
                      style="background-color:#1d4335;">{{ translate('I want to Hire') }}</a>
                    <a href="{{route('register') }}?type=1" class="btn text-white fw-700  fs-20 fs-sm-12  mb-3"
                      style="background-color:#1d4335;">{{ translate('I want to Work') }}</a>
                  </div>
                </div>
                <div class="col-lg-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!--  Used by -->
    <section class="">
      <div class=" home-slider">
        <div class="row ">
          <div class="col-6">
            <div class="row ">
              <div class="col-lg-4 col-sm-12">
                <h4 class="trusted heading-title fw-700" style="font-size:19px; color:#5ABC76;"> Used by </h4>
              </div>
              <div class="col-lg-4 col-sm-12">
                <img class=" " src="{{my_asset('Microsoft.svg')}}" alt="">
              </div>
              <div class="col-lg-4 col-sm-12">
                <img class=" " src="{{my_asset('Airbnb.svg')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-6 ">
            <div class="row">
              <div class="col-lg-4 col-sm-12">
                <img class=" " src="{{my_asset('automatic.svg')}}" alt="">
              </div>
              <div class="col-lg-4 col-sm-12">
                <img class=" " src="{{my_asset('Bissell.svg')}}" alt="">
              </div>
              <div class="col-lg-4 col-sm-12">
                <img class=" " src="{{my_asset('NASDAQ.svg')}}" alt="">
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- explore services -->
    @if (get_setting('how_it_works_show') == 'on')
    <section class="border-top pb-2 " style="background-color:#275846;">
      <div class="container-home">
        <div class="">
          <div class=" content-title  text-center mb-4">
            <h2 class="fw-700 fs-36 text-white mb-0">Need academic help?</h2>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=" h-136px align-items-center">
                  <img class=" mb-4 mx-auto d-block border border-white  p-3"
                    src=" {{url('/public/assets/home/post.png')}}" alt="Image" style="width:70px; border-radius:50%;" />
                  <div class="need-help-home-content"></div>
                  <p class="fs-24 fw-700 mb-lg-2 consultant-category text-center text-white"> Post a job

                  </p>
                </div>

                <h6 class="fs-18 mt-4 text-white text-center">
                  Thousands of degrees, subjects and short courses from leading Australian unis in one place.
                </h6>
              </div>

            </div>
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=" h-136px align-items-center">
                  <img class=" mb-4 mx-auto d-block border border-white  p-3"
                    src=" {{url('/public/assets/home/quiz.png')}}" alt="Image" style="width:70px; border-radius:50%;" />
                  <div class="need-help-home-content"></div>
                  <p class="fs-24 fw-700 mb-lg-2 consultant-category text-center text-white"> Receive proposal
                  </p>
                </div>
                <h6 class="fs-18 mt-4 text-white text-center">
                  Guidance to find your best option, based on what's important to you.
                </h6>
              </div>

            </div>
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=" h-136px align-items-center">
                  <img class=" mb-4 mx-auto d-block border border-white  p-3"
                    src=" {{url('/public/assets/home/enroll.png')}}" alt="Image"
                    style="width:70px; border-radius:50%;" />
                  <div class="need-help-home-content"></div>
                  <p class="fs-24 fw-700 mb-lg-2 consultant-category text-center text-white"> Make Selection

                  </p>
                </div>
                <h6 class="fs-18 mt-4 text-white text-center">
                  Simplified online enrolment to give you easy access to uni study.
                </h6>
              </div>

            </div>
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=" h-136px align-items-center">
                  <img class=" mb-4 mx-auto d-block border border-white  p-3"
                    src=" {{url('/public/assets/home/check.png')}}" alt="Image"
                    style="width:70px; border-radius:50%;" />

                  <p class="fs-24 fw-700 mb-lg-2 consultant-category text-center text-white"> Payment Securely
                  </p>
                </div>
                <h6 class="fs-18 mt-4 text-white text-center">
                  Get started on your study journey today.
                </h6>
              </div>

            </div>

          </div>
          <div class=" mt-3 text-center">
            <h5 class="btn rounded-1 text-white border">
              <a href="{{url('projects/create') }}" class="text-white fs-16">Let's get started</a>
            </h5>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- Consultant Service Category -->
    @if (get_setting('featured_category_show') == 'on')
    <form id=" consultant-filter-form" action="" method="GET">
      <section class="bg-white border-top">
        <div class=" container-home">
          <div class="d-flex justify-content-between  ">
            <div class="w-lg-75 lh-1-8 content-title">
              <!-- <h2 class="fw-700 fs-36 heading-title">{{ get_setting('featured_category_title') }}</h2> -->
              <h2 class="fw-700 fre-small-font ">Hire academic consultants by category</h2>
              <!-- <p class="fs-17 ">{{ get_setting('featured_category_subtitle') }}</p> -->
            </div>
            <div>

              <h5 class="btn rounded-1  border ">
                <a href="{{ route('search') }}?category="
                  class="fs-16 text-dark ">{{ translate('Browse More Categories') }}
                  <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image"
                    style="width:20px;" />
                </a>
              </h5>
            </div>
          </div>
          <div class="row gutters-10">

            @if (get_setting('featured_category_list') != null)
            @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
            @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
            <div class="col-lg-3 mb-3">
              <!-- <input type="hidden" name="type" value="service">
              <input type="hidden" name="category_id" value="$category->id"> -->
              <a href="{{ route('freelancer.category', $category->slug)}}" class="text-dark ">
                <div class=" card" style="height:350px;">
                  <div class="">
                    <div class="">
                      <img class="w-100 h-150px" src=" {{ custom_asset($category->photo) }}" alt="Image" />
                    </div>
                    <div class="" style=" padding:20px;">
                      <a class=" featured_category text-dark" onclick="applyFilter()"
                        href="{{ route('freelancer.category', $category->slug)}}">
                        <p class="fs-22 fw-600 " style="height:45px; line-height:23px;">{{ $category->name }}
                        </p>
                        <p class="fs-18 " style=" line-height:23px;">{{ $category->description }}</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endif
            @endforeach
            @endif
          </div>
          {{-- <div class="row gutters-10 mt-5">
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_left_banner')) }}"
          class="img-fluid">
        </div>
        <div class="col-lg-6">
          <img src="{{ custom_asset(get_setting('featured_category_right_banner')) }}" class="img-fluid">
        </div>
        </div> --}}

        </div>
        </div>
      </section>

    </form>
    @endif


    <!-- Find academic jobs by category-->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top" style="background-color:#FBF7ED; ">
      <div class="container-home" style=" ">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
            <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
            <h2 class="fw-700 fre-small-font">Find academic jobs by category</h2>
            <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
          </div>
          <div>
            <div class="pt-2 text-center">
              <h5 class="btn rounded-1 border ">
                <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark ">
                  <span>All
                    Jobs</span>
                </a>
                <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image"
                  style="width:18px;" />
                </a>
              </h5>
            </div>
          </div>
        </div>
        <div class="row ">
          @php
          $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
          ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
          ->pluck('user_id');

          $services = \App\Models\ProjectCategory::inRandomOrder()
          ->get();
          @endphp

          @foreach ($services as $category)
          <div class="col-lg-3 mb-lg-3 mb-xl-3 mb-md-3">
            <div class="caorusel-box">
              <a href="{{ route('projects.category', $category->slug)}}" class="text-dark fw-700">
                <div class="card rounded-1 fre-job-catagory find-job">
                  <div class="position-relative">
                    <img class="img-fluid w-100 rounded-1 opacity-75 " style="height:280px;"
                      src=" {{ custom_asset($category->photo) }}" alt="Image">
                  </div>
                  <!-- <div class="fre-job-catagory rounded-1"></div> -->
                  <div class="position-absolute  ">
                    <p class="card-title  fw-700 p-1 fre-job-catagory fs-19"
                      style=" background-color:white; margin-top:244px; ">
                      {{$category->name}} </p>

                  </div>
                </div>
              </a>
            </div>
          </div>
          @endforeach

        </div>
    </section>
    @endif

    <!-- Join us -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top bg-white">
      <div class="container-home">
        <div class="row ">
          <div class="col-lg-6 col-lg-6">
            <img class="mr-2  img-fluid" src="{{url('/public/assets/home/001.png')}}" alt="Image"
              style="width:500px;" />
          </div>
          <div class=" col-lg-6 col-sm-12">
            <h2 class="fw-700 mb-3 heading-title fre-small-font">What makes FreelancerEdu impressive</h2>
            <div class="">
              <div class=" d-flex ">
                <div>
                  <img class=" mr-2" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                    style="width:15px;" />
                </div>
                <div>
                  <h6 class="fs-16 "><span class="fw-700 heading-title">Accessible academic experts:</span> Find work
                    that hits your
                    financial
                    goals
                    faster
                    with
                    ambitious startups
                    and well-known brands.</h6>
                </div>
                <div>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                <h6 class="fs-16 m-2"><span class="fw-700 heading-title">Fast responses:</span>

                  Build a predictable pipeline of projects, big and small, through strong
                  connections.
                </h6>



              </div>
              <div class="d-flex align-items-center mb-2">
                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                <h6 class="fs-16 m-2 "> <span class="fw-700 heading-title">High-quality work:</span>
                  Search for jobs or have
                  clients
                  come to you. The
                  opportunities
                  are endless.</h6>
              </div>
              <div class="d-flex align-items-center mb-2">
                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                <h6 class="fs-16 m-2 "><span class="fw-700 heading-title">We're here to help you:</span>
                  Search for jobs or have
                  clients
                  come to you. The
                  opportunities
                  are endless.</h6>
              </div>
            </div>
            <button type="button" class="btn mt-3 p-2 fs-16 px-4 text-white" style="background-color:#275846;">
              <span><a href="{{ url('/search?keyword=&type=freelancer')}}" class="text-white"> Find talent</a></span>
              <span><img class=" px-1 " src=" {{url('/public/assets/home/arrow.png')}}" alt="Image"
                  style="width:18px; " />
              </span>
            </button>
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
            <h2 class="fw-700 fre-small-font"> Find scholarship by category</h2>

          </div>
          <div>
            <h5 class="pt-2 text-center btn rounded-1 border">
              <a href="" class="fs-16 text-dark  "><span>All Scholarships
                </span></a>
              <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image"
                style="width:18px;" />
            </h5>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=15&type=scholarships') }} " class="text-dark">
                <div class="card rounded-1 " style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/social-science.jpg')}}"
                        class="card-img-top" alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>
                        <p class="card-title  fs-19 fs-700">Social Sciences</p>
                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 8</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=8&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/university.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700">Business and Economics</p>


                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 5</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=10&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/medical.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700">Health and Medicine</p>


                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 12</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=11&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/humnaties.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700"> Law</p>

                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 10</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=9&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/education.jpeg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700">Education</p>


                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 12</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=7&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/arts.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700">Arts and Humanities</p>


                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 20</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=14&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/engeneering.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>

                        <p class="card-title  fs-19 fs-700"> Science and Engineering</p>


                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 15</span>
                          <span class="fs-18"> Available</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="caorusel-box">
              <a href="{{url('scholarshipSearch?fieldStudy_id=12&type=scholarships') }}" class="text-dark">
                <div class="card rounded-1" style="height:330px">
                  <div class="">
                    <div class=" ">
                      <img src=" {{url('/public/assets/home/Find-scholarship/IT.jpg')}}" class="card-img-top"
                        alt="service_image" height="212">
                    </div>
                    <div class="card-body">
                      <div>
                        <p class="card-title  fs-19 fs-700">Mathematics and Statistics
                        </p>
                        <div class="mt-2">
                          <span>
                            <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                              style="width:14px;" />
                          </span>
                          <span class="fs-18"> 10</span>
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

    </section>
    @endif
    <!-- Trending services -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top bg-white" style=" padding-bottom:10px;">
      <div class="container-home" style=" ">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
            <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
            <h2 class="fw-700 fre-small-font">Featured trending services</h2>
            <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
          </div>
          <div>
            <h5 class="pt-2 text-center btn rounded-1 border">
              <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark  "><span>All
                  services</span></a>
              <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image"
                style="width:18px;" />
            </h5>
          </div>
        </div>
        <div class="row ">
          @php
          $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
          ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
          ->pluck('user_id');

          $services = \App\Models\Service::inRandomOrder()
          ->whereIn('user_id', $user_ids)
          ->take(get_setting('max_service_show_homepage'))
          ->get();
          @endphp
          @foreach ($services as $service)
          <div class="col-lg-3">
            <div class="caorusel-box">
              <div class="card rounded-1" style="height:450px">
                <div class="">
                  <div class=" ">
                    <a href="{{ route('service.show', $service->slug) }}">
                      @if($service->image != null)
                      <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image"
                        height="212">
                      @else
                      <img src="{{ my_asset('assets/frontend/default/img/placeholder-blog.jpg') }}" class="card-img-top"
                        alt="{{ translate('Service Image') }}" height="212">
                      @endif
                    </a>
                  </div>
                  <div class="card-body">
                    <div>
                      @if($service->category != null)
                      <p class="card-title  fs-18">{{$service->category->name}}</p>
                      @endif
                      <p class="card-title mt-1 fs-18 fw-700">
                        {{ \Illuminate\Support\Str::limit($service->title, 40, $end = '...') }}</p>
                      <div class="mt-2">
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                            style="width:12px;" />
                        </span>
                        <span> 4896</span>
                        <span> reviews</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="border border-top mt-1"></div>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                      <div class="d-flex">
                        <span class="pr-2">
                          @if ($service->user->photo != null)
                          <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}"
                            height="35" width="35" class="rounded-circle">
                          @else
                          <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                            alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                          @endif
                        </span>
                        <span class="d-flex flex-column justify-content-center">
                          <a href="{{ route('freelancer.details', $service->user->user_name) }}"
                            class="text-secondary fs-12"><span class=" ">{{ $service->user->name }}</span></a>
                        </span>
                      </div>
                      <div>
                        <span> starting at $990</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

    </section>
    @endif

    <!-- learn with scholarship australia -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-bottom" style="background-color:#FBF7ED;">
      <div class=" container-home">
        <div class="content-title">
          <h2 class="fw-700 fre-small-font">Hear what recent FreelancerEdu clients have to say</h2>
        </div>
        <div class="">
          <div class="row ">
            <div class="col-lg-4">
              <div class=" card rounded-1 " style="height:300px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great Work</p>
                  <p class=" mt-3 fs-18 " style="height:120px;">"I am very satisfied with his work; so far, he has
                    consistently
                    delivered his job on time. We will work together in the future."
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2 border " src=" {{url('/public/assets/home/review-1.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Academic advisor</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class=" card rounded-1 " style="height:300px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Good Job</p>
                  <p class=" mt-3 fs-18 " style="height:120px;">"I am happy with his responsiveness throughout the
                    entire
                    project
                    duration; he was very experienced and provided quality work."
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2 border" src=" {{url('/public/assets/home/review-2.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                    </div>
                    <div class="">
                      <small class="fw-700 fs-14 text-black"> Mr. jack</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Information technology expert</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ">
              <div class=" card rounded-1 " style="height:300px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Fantastic</p>
                  <p class=" fs-18 " style="height:88px;">
                    " I am happy for my work and recommend him. He is a very potential and committed person."
                  </p>
                  <div class="border-top mt-5"></div>
                  <div class="d-flex  mt-3">
                    <div>
                      <img class="mr-2  border" src=" {{url('/public/assets/home/review-3.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Mitchel Joe </small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;">Thesis writing helper</h6>
                    </div>
                  </div>
                  </>
                </div>
              </div>
            </div>
          </div>
    </section>
    @endif

    @if (get_setting('latest_project_show') == 'on')
    <section class=" bg-white">
      <div class="container-home mt-5">
        <ul class="nav nav-tabs mt-3 " id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <h5 class="nav-link fs-22 active text-decoration-underline" id="home-tab" data-toggle="tab"
              data-target="#home" role="tab" aria-controls="home" aria-selected="true">Top skills</h5>
          </li>
          <li class="nav-item" role="presentation">
            <h5 class="nav-link fs-22" id="profile-tab" data-toggle="tab" data-target="#profile" role="tab"
              aria-controls="profile" aria-selected="false">Trending skills</h5>
          </li>
          <li class="nav-item" role="presentation">
            <h5 class="nav-link fs-22" id="contact-tab" data-toggle="tab" data-target="#contact" role="tab"
              aria-controls="contact" aria-selected="false">Top skills in Australia
            </h5>
          </li>
          <li class="nav-item" role="presentation">
            <h5 class="nav-link fs-22" id="project-tab" data-toggle="tab" data-target="#project" role="tab"
              aria-controls="project" aria-selected="false">Project catalog
            </h5>
          </li>
        </ul>
      </div>
      <div class="tab-content container-home" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row ">
            <div class="col-lg-3  ">
              <div class=" skills">
                <h6 class="fs-18">
                  Research writing</h6>
                <h6 class="fs-18">
                  Proofreading and editing</h6>
                <h6 class="fs-18">Data analysis and interpretation</h6>
                <h6 class="fs-18">Translation services</h6>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class=" skills">
                <h6 class="fs-18">
                  Research proposal writing</h6>
                <h6 class="fs-18">
                  Statistical analysis </h6>
                <h6 class="fs-18">
                  Curriculum development</h6>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class=" skills">
                <h6 class="fs-18">
                  Research proposal writing</h6>
                <h6 class="fs-18">
                  Scholarship applications</h6>
                <h6 class="fs-18">Academic mentoring </h6>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class=" skills">
                <h6 class="fs-18">
                  Copywriting</h6>
                <h6 class="fs-18">
                  Tutoring and Instruction</h6>
                <h6 class="fs-18">Transcribing audio or video recordings</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class=" row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4">
            <p>Trending skills</p>
          </div>
        </div>
        <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class=" row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4">
            <p>
              Top skills in Australia </p>
          </div>
        </div>
        <div class="tab-pane" id="project" role="tabpanel" aria-labelledby="project-tab">
          <div class=" row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4">
            <p>Project catalog</p>
          </div>
        </div>
      </div>
    </section>
    @endif



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
                    <img class="" src=" {{url('/public/assets/home/apple.png')}}" alt="Image" style="height:20px; " />
                    <span>|</span>
                    <span class="text-white"> Apple store</span>

                  </a>
                  <a href="{{ route('register') }}?type=2" style="background-color:#275846;" class="btn  mb-3">
                    <img class="" src="{{url('/public/assets/home/playstore.png')}}" alt="Image"
                      style="height:20px; " />
                    <span>|</span>
                    <span class="text-white">Google play store</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 " style="">
              <img src=" {{url('/public/assets/findJob/home-banner.png')}}" alt="Image" class=" w-100" style=" " />
            </div>
          </div>
        </div>
      </div>

    </section>>
    @endif -->

    @endsection
    @section('script')
    @if ((Session::has('new_user') && Session::get('new_user') == true) || (auth()->check() &&
    auth()->user()->user_type ==
    null))
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

    <!-- <script>
    $('#carouselExample').on('slide.bs.carousel', function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 7;
      var totalItems = $('.carousel-item').length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
          } else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
          }
        }
      }
    });
    </script> -->

    @endif
    @endsection

</body>

</html>