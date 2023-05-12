<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('assets/frontend/default/css/home.css')}}">

</head>
<style>

</style>

<body>
  @extends('frontend.default.layouts.app')
  @section('content')
  @if (get_setting('slider_section_show') == 'on')
  <section>
    <section class="hero-section" id="frontHomeTab">

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="">
          <div class="carousel-item active">
            <video style="min-width:100%; min-height:100%" playsinline autoplay muted loop>
              <source class="h-100 opacity-100" src=" {{url('/public/assets/home/01.mp4')}}" type="video/mp4" />
            </video>
            <div class="carousel-caption carousel-caption-background">
            </div>
            <div class="carousel-caption">
              <div class="row">
                <div class="col-lg-7 col-sm-12">
                  <h2 class=" sm-mx-auto fw-700 " style="font-size:42px;">
                    Hire the best consultations for any job, online</h2>
                  <p class="fs-20 my-4 ">Millions of people use scholarships Australia to turn their ideas into
                    reality.</p>
                  <div class="my-3">
                    <a href="{{route('register') }}?type=2" class="btn text-white fw-700 fs-18 py-3 px-5 mb-3"
                      style="background-color:#275846;">{{ translate('I want to Hire') }}</a>
                    <a href="{{route('register') }}?type=1" class="btn text-white fw-700 ml-4 fs-18 py-3 px-5 mb-3"
                      style="background-color:#275846;">{{ translate('I want to Work') }}</a>

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

    <!-- main carousel  -->
    @if (get_setting('client_logo_show') == 'on')
    <section class=" bg-white container">
      <div class=" align-items-center d-flex row">
        <div class="col-lg-2">
          <h2 class="mb-3 fw-700 fs-36 text-black ">
            Used By:
          </h2>
        </div>
        <div class="col-lg-10  mb-4">
          <div class="aiz-carousel gutters-10" data-autoplay='true' data-items="6" data-xl-items="6" data-lg-items="5"
            data-md-items="4" data-sm-items="3" data-xs-items="2" data-infinite='true'>
            @if (get_setting('client_logos') != null)
            @foreach (explode(',', get_setting('client_logos')) as $key => $value)
            <div class="">
              <img class=" " src=" {{url('/public/assets/Top-universities/victoria.png')}}" alt="Image"
                style="width:100px;" />
            </div>

            <div class="">

              <img class=" " src=" {{url('/public/assets/Top-universities/melbourn-removebg-preview.png')}}" alt="Image"
                style="width:100px;" />

            </div>
            <div class="">

              <img class=" " src=" {{url('/public/assets/Top-universities/sydney.png')}}" alt="Image"
                style="width:100px;" />
            </div>

            <div class="">
              <img class=" " src=" {{url('/public/assets/Top-universities/adilade.png')}}" alt="Image"
                style="width:150px;" />
            </div>

            <div class="">
              <img class=" " src=" {{url('/public/assets/Top-universities/national university.jpg')}}" alt="Image"
                style="width:120px;" />
            </div>
            <div class="">
              <img class=" " src=" {{url('/public/assets/Top-universities/monas.jpg')}}" alt="Image"
                style="width:120px;" />
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </section>
    @endif


    <!-- explore services  -->

    @if (get_setting('how_it_works_show') == 'on')
    <section class=" border-top">
      <div class="container">
        <div class="py-3 rounded-2 ">
          <div class="w-xl-50 w-lg-75  my-5 ">
            <h2 class="fw-700 fs-36 text-black">Need something done?</h2>
            <h6 class="fs-18 fw-400">Most viewed and all time selling services</h6>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6">
              <div class="px-xl-10 px-md-3 mb-4 text-center  ">
                <div class=" ">
                  <img class=" " src=" {{url('/public/assets/home/businessman.png')}}" alt="Image"
                    style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-22 fw-700"> Post a job</p>
                  <h6 class="fs-16 mt-3">
                    Its free and easy to post a job. Simply fill in a title descriptions</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="px-xl-10 px-md-3 mb-4 text-center">
                <div class=""><img class=" " src=" {{url('/public/assets/home/service-2.png')}}" alt="Image"
                    style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-22 fw-700">Choose consultants </p>
                  <h6 class="fs-16 mt-3">

                    Its free and easy to post a job. Simply fill in a title descriptions</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 ">
              <div class="px-xl-10 px-md-3 mb-4 text-center">
                <div class="">
                  <img class=" " src=" {{url('/public/assets/home/service-3.png')}}" alt="Image" style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-22 fw-700"> Pay safely </p>
                  <p class="fs-16 mt-3">

                    Its free and easy to post a job. Simply fill in a title descriptions</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="px-xl-10 px-md-3 mb-4 text-center">
                <div class="">
                  <img class=" " src=" {{url('/public/assets/home/service-4.png')}}" alt="Image" style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-22 fw-700"> We're here to help you </p>
                  <h6 class="fs-16 mt-3">

                    its free and easy to post a job. Simply fill in a title descriptions </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- Service Category -->

    @if (get_setting('featured_category_show') == 'on')
    <section class="bg-white pb-4 border-top" style="margin-bottom:60px;  margin-top:50px; ">
      <div class=" container">
        <div class="d-flex justify-content-between mb-5 " style="margin-top:60px;">
          <div class="w-lg-75 w-xl-50 lh-1-8">
            <h2 class="fw-700 fs-36 ">{{ get_setting('featured_category_title') }}</h2>
            <p class="fs-17 ">{{ get_setting('featured_category_subtitle') }}</p>
          </div>
          <div>
            <a href="{{ route('search') }}?category="
              class="btn bg-white text-black fs-17 rounded-1">{{ translate('Browse More Categories') }}
              <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:20px;" />
            </a>
          </div>
        </div>
        <div class="row gutters-10">
          @if (get_setting('featured_category_list') != null)
          @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
          @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
          <div class="col-lg-3">
            <div class=" card  category">
              <div class=" card-body">
                <div class="">
                  <img class="" src=" {{url('/public/assets/home/img-1.png')}}" alt="Image" style="width:50px; 
                  " />
                </div>
                <p class="card-title fs-18 mt-3">1853 skills</p>
                <a class="featured_category " href="{{ route('projects.category', $category->slug) }}">
                  <p class="fs-16 fw-600 mb-0">{{ $category->name }}</p>
                </a>
                <small class="card-text fs-14 mt-2">Software engineer web / mobile developer & more

                </small>
              </div>
            </div>
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
    @endif

    <!-- category -->
    @if (get_setting('latest_project_show') == 'on')
    <!-- <section class=" bg-white border-top" style="margin-bottom:70px;  margin-top:50px;">
    <div class="container " style="margin-top:70px;">
      <div class="d-flex justify-content-between">
        <div class="w-lg-75 w-xl-50 lh-1-8">
          <h4 class="fw-700 fs-30 text-black">Browse talent by category</h4>
          <h6 class="fs-18 fw-400">Get some inspirations from 1800+ skills</h6>
        </div>
        <div>
          <a class=" " href="#">
            <small class="fs-18 fw-400 category-list">All categories</small>
            <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:18px;" />
          </a>
        </div>
      </div>
      <div class="" style="margin-top:30px;">
        <div class="row  ">
          <div class="col-lg-3">
            <div class=" card rounded-1 category">
              <div class=" card-body">
                <div class="">
                  <img class="" src=" {{url('/public/assets/home/img-1.png')}}" alt="Image" style="width:50px; 
                  " />
                </div>
                <p class="card-title fs-18 mt-3">1853 skills</p>
                <p class=" card-title fs-18  category-title">Development and IT</p>
                <small class="card-text fs-14 mt-2">Software engineer web / mobile developer & more

                </small>
              </div>
            </div>
          </div>

          <div class="col-lg-3" ">
            <div class=" card rounded-1 category">
            <div class=" card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-2.png')}}" alt="Image" style="width:40px;
                  " /></div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Design creative</p>
              <small class="card-text fs-14 mt-2">Software engineer web / mobile developer & more</small>


            </div>
          </div>
        </div>

        <div class="col-lg-3 ">
          <div class="card  rounded-1 category">
            <div class="card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-3.png')}}" alt="Image" style="width:50px;
                  " /></div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Digital marketing </p>
              <small class="card-text fs-14 mt-2">Software engineer web / mobile developer & more</small>


            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1 category">
            <div class=" card-body">
              <div class="">
                <img src=" {{url('/public/assets/home/img-4.png')}}" alt="Image" style="width:40px;" />
              </div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Writings and translation</p>
              <small class="card-text fs-14 mt-2">Software engineer web / mobile developer & more</small>

            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1 category">
            <div class="card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-5.png')}}" alt="Image" style="width:40px;" />
              </div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Music and audio</p>
              <small class="card-text fs-15 mt-2">Software engineer web / mobile developer & more</small>


            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card rounded-1 category">
            <div class="card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-6.png')}}" alt="Image" style="width:40px;" />
              </div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Video and animation</p>
              <p class="card-text fs-15 mt-2">Software engineer web / mobile developer & more</p>


            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1 category">
            <div class="card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-7.png')}}" alt="Image" style="width:40px;" />
              </div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Engineering & Architecture</p>
              <small class="card-text fs-15 mt-2">Software engineer web / mobile developer & more</small>


            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1 category">
            <div class="card-body">
              <div class=""><img src=" {{url('/public/assets/home/img-8.png')}}" alt="Image" style="width:40px;" />
              </div>
              <p class="card-title fs-18 mt-3">1853 skills</p>
              <p class=" card-title fs-18  category-title">Finance & Accounting</p>
              <small class="card-text fs-15 mt-2">Software engineer web / mobile developer & more</small>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    @endif


    <!-- Trending services  -->
    @if (get_setting('latest_project_show') == 'on')
    <section class=" jumbotron border-top" style="background-color:#FBF7ED;">
      <div class="container pb-2 " style=" ">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 w-xl-50 lh-1-8">
            <h2 class="fw-700 fs-36 text-black">Trending services</h2>
            <h6 class="fs-18 fw-400">Most viewed and all-time top-selling services</h6>
          </div>
          <div>
            <img class=" " src=" {{url('/public/assets/home/back.png')}}" alt="Image" style="width:20px;" />
            <img class=" " src=" {{url('/public/assets/home/next.png')}}" alt="Image" style="width:20px;" />
          </div>
        </div>

        <div class="mt-5">
          <div class="row ">

            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:430px">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="p-2" style=" height:110px;">
                    <div>
                      <p class="card-title mt-1 fs-18">Web & app design</p>
                      <p class="card-title mt-1 fs-18 fw-700">I will design modern website in figma or adobe xd</p>
                      <div class="mt-2">
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                        </span>
                        <span> 4896</span>
                        <span> reviews</span>
                      </div>
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="border border-top mt-5"></div>
                    <div class="d-flex justify-content-between mt-1">
                      <div>
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image"
                            style="width:12px;" />
                        </span>
                        <span> World runo</span>
                      </div>
                      <div>
                        <span> starting at $990</span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:430px">
                <div class="">
                  <div class="bg-secondary "><img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}"
                      alt="Image" /></div>
                  <div class="p-2" style="height:110px;">
                    <div>
                      <p class="card-title mt-1 fs-18">Art & illustrations</p>
                      <a href="#" class="card-title  mt-1 fs-18 fw-700"><u>I will create modern flat design
                          illustrations</u>
                      </a>
                      <div class="mt-2">
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                        </span>
                        <span> 4896</span>
                        <span> reviews</span>
                      </div>
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="border border-top mt-5"></div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image"
                            style="width:12px; " />
                        </span>
                        <span> World runo</span>
                      </div>
                      <div>
                        <span> starting at $990</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class=" col-lg-3 ">
              <div class=" card rounded-1" style="height:430px">
                <div class="">
                  <div class="bg-secondary "><img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}"
                      alt="Image" /></div>
                  <div class="p-2" style="height:150px;">
                    <div>
                      <p class="card-title mt-1 fs-18">Design & creative</p>
                      <p class="card-title mt-1 fs-18 fw-700">I will design fully responsive website website with
                        HTML,
                        CSS,
                        boootstrap..
                      </p>
                      <span>
                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                      </span>
                      <span> 4896 reviews</span>

                    </div>
                  </div>
                  <div class="p-2">
                    <div class="border border-top mt-1"></div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <span>
                          <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image"
                            style="width:12px; " />
                        </span>
                        <span> Brono</span>
                      </div>
                      <div>
                        <span> starting at $990</span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:430px">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="p-2" style="height:110px;">
                    <div>
                      <p class="card-title mt-1 fs-18">Web & app design </p>
                      <p class="card-title mt-1 fs-18 w-100 fw-700">I will do mobile and web development</p>
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
                  <div class="p-2">
                    <div class="border border-top mt-5"></div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <span class="mr-2">
                          <img src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:12px;" />
                        </span>
                        <span> World runo</span>
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
          <div class="pt-2 text-center">
            <a href="#" class="category-list fs-18 fw-400 "><span>All services</span></a>
            <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image"
              style="width:18px;" />

          </div>
        </div>
    </section>
    @endif

    <!-- Latest job  -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="">
      <div class=" container" style="margin-top:40px;">
        <div class="d-flex justify-content-between mb-5">
          <div class="w-lg-75 w-xl-50 lh-1-8">
            <h2 class="fw-700 fs-36 text-black ">Our Latest Jobs</h2>
            <h6 class=" fs-18 fw-400">Know your worth and find the jobs that quality your life</h6>
          </div>
          <div>
            <a class=" " href=" #">
              <small class=" fs-18 fw-400 category-list">All categories</small>
              <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:18px;" />
            </a>
          </div>
        </div>
        <div class="mt-3">
          <div class="row">
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-1.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class="fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <h6 class="text-primary fs-16">
                      Mailchimp
                    </h6>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>
                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-2.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>
                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-3.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class="fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>

                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-4.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>

                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-5.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>

                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-6.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>

                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-7.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>

                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-8.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class=" fs-18 fw-400">Website Resigner Required for Directory heamT</p>
                    <p class="text-primary fs-16">
                      Mailchimp
                    </p>
                    <div class="">
                      <span>$125k hourly</span>
                      <span>|</span>
                      <span>1.5 days</span>
                      <span>|</span>
                      <span>Expensive</span>
                      <span>|</span>
                      <span>Remote</span>
                    </div>
                  </div>
                  <div>
                    <img class="ml-2" src=" {{url('/public/assets/home/favorites.png')}}" alt="Image"
                      style="width:15px;  align-items:center;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- learn with scholarship australia -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="jumbotron border-top border-bottom" style="margin-top:80px;  ">
      <div class=" container pb-3">
        <div class="">
          <h2 class="fw-700 fs-36 text-black">People Love To Learn With Scholarships Australia</h2>
        </div>

        <div class=" mt-5">
          <div class="row ">
            <div class="col-lg-4">
              <div class=" card rounded-1 ">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great Work</p>
                  <p class=" mt-3 fs-18 text-justify">"I found the course material to be highly engaging and the
                    instructors to
                    be helpful communicative"
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Web designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class=" card rounded-1 ">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great Work</p>
                  <p class=" mt-3 fs-18 text-justify">"I found the course material to be highly engaging and the
                    instructors to
                    be helpful communicative"
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Web designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class=" card rounded-1 ">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-14">Great work</p>
                  <p class=" mt-3 fs-18 text-justify">"I found the course material to be highly engaging and the
                    instructors
                    to
                    be helpful communicative"
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2  " src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Web designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row ">
            <div class="col-lg-4">
              <div class=" ">
                <div class=" ">
                  <p class=" mt-2 fs-18 text-black fw-700">4.9/5</p>
                  <p class=" mt-3 fs-18">"Clients rate professional on Scholarships Australia"
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="">
                <div class=" ">
                  <p class=" mt-2 fs-18 text-black fw-700">95%</p>
                  <p class=" mt-3 fs-18">95% customers are satisfied through to see their consultant
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="  ">
                <div class="">
                  <p class=" mt-2 fs-18 text-black fw-700">Award winner</p>
                  <p class=" mt-3 fs-18">G2s best software awards
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>
    @endif


    <!-- Join us -->

    @if (get_setting('latest_project_show') == 'on')
    <section class="">
      <div class=" container mt-3 mb-5" style="padding-top:35px; padding-bottom:35px;">
        <div class="row g-5 d-fle justify-content-around ">
          <div class="">
            <img class="mr-2" src="{{url('/public/assets/home/001.png')}}" alt="Image" style="width:500px;" />
          </div>
          <div class=" col-lg-5 col-sm-12 ">
            <h4 class="fs-24 fw-700">Join world best marketplace for consultant</h4>
            <h6 class="fs-18 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ad cumque doloribus
              odio
              amet
              aperiam
              voluptatum doloremq ue, sint ratione sit beatae </h6>
            <div class="">
              <div class=" d-flex ">
                <div>
                  <img class=" mr-2" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                    style="width:15px;" />
                </div>
                <div>
                  <h6 class="fs-16 "> Find work that hits your financial
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
                <h6 class="fs-16 m-2">

                  Build a predictable pipeline of projects, big and small, through strong
                  connections.
                </h6>



              </div>
              <div class="d-flex align-items-center mb-2">
                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                <h6 class="fs-16 m-2 "> Search for jobs or have
                  clients
                  come to you. The
                  opportunities
                  are endless.</h6>
              </div>
            </div>
            <button type="button" class="btn mt-3 text-white p-2 btn fs-16 px-4" style="background-color:#275846; ">
              <span>Find talent</span>
              <span><img class="px-1" src="{{url('/public/assets/home/arrows.png')}}" alt="Image"
                  style="width:18px; " /></span>
            </button>
          </div>


        </div>

      </div>

    </section>
    @endif

    <!-- Blog  -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top ">
      <div class="container" style="padding-top:65px; padding-bottom:65px;">
        <div class="d-flex justify-content-between mb-5">
          <div class="w-lg-75 w-xl-50 lh-1-8">
            <h2 class="fw-700 fs-36 text-black">Our Blog</h2>
            <small class="fs-18 fw-400">See how you can up your career status</small>
          </div>
          <div>
            <a class=" " href="#">
              <small class="fs-18 fw-40 category-list">All categories</small>
              <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:15px;" />
            </a>
          </div>
        </div>

        <div class="mt-4">
          <div class="row ">
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:380px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-14">December 2, 2023 </small>
                      <h6 class="fw-700 fs-18 text-justify mt-1">Start an online business and work from home</h6>
                      <small class=" fs-16">A complete guide to starting a small business</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:380px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-14">December 2, 2023 </small>
                      <p class="fw-700 fs-18 text-justify ">Start an online business and work from home</p>
                      <small class=" fs-16">A complete guide to starting a small business</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:380px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-16">December 2, 2023 </small>
                      <p class="fw-700 fs-18 text-justify">Start an online business and work from home</p>
                      <small class=" fs-16">A complete guide to starting a small business</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:380px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-16">December 2, 2023 </small>
                      <p class="fw-700 fs-18 text-justify">Start an online business and work from home</p>
                      <small class=" fs-16">A complete guide to starting a small business</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>
    @endif

    <!-- skills -->

    @if (get_setting('latest_project_show') == 'on')
    <section class=" bg-white border-top" style="  padding-top:20px; ">
      <div class=" container " style="  padding-bottom:80px; ">
        <ul class=" nav my-5">
          <li class="nav-item">
            <a class="nav-link active  fw-700" aria-current="page" href="#">
              <h5 class="fs-28" style="color:black; font-weight:700;">Top skills</h5>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link text-muted fs-28" href="#">
              <h5 class="fs-28"> Trending skills </h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">
              <h5 class="fs-28">Top skills in Australia</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
              <h5 class="fs-28 text-muted">Project
                catalog</h5>

            </a>
          </li>
        </ul>

        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">
            <div class="col">

              <h6 class="fs-15">
                Book Designer</h6>
              <h6 class="fs-15">
                Branding Freelancer</h6>
              <h6 class="fs-15">Blockchain Developer</h6>
              <h6 class="fs-15">
                Bot Developer</h6>
              <h6 class="fs-15">Business Process Modeling Specialist</h6>
              <h6 class="fs-15">Bahasa Indonesia Freelancer</h6>
            </div>
            <div class="col">
              <h6 class="fs-15">
                Book Designer</h6>
              <h6 class="fs-15">
                Branding Freelancer</h6>
              <h6 class="fs-15">Blockchain Developer</h6>
              <h6 class="fs-15">
                Bot Developer</h6>
              <h6 class="fs-15">Business Process Modeling Specialist</h6>
              <h6 class="fs-15">Bahasa Indonesia Freelancer</h6>
            </div>
            <div class="col">
              <h6 class="fs-15">
                Book Designer</h6>
              <h6 class="fs-15">
                Branding Freelancer</h6>
              <h6 class="fs-15">Blockchain Developer</h6>
              <h6 class="fs-15">
                Bot Developer</h6>
              <h6 class="fs-15">Business Process Modeling Specialist</h6>
              <h6 class="fs-15">Bahasa Indonesia Freelancer</h6>
            </div>
            <div class="col">
              <h6 class="fs-15">
                Book Designer</h6>
              <h6 class="fs-15">
                Branding Freelancer</h6>
              <h6 class="fs-15">Blockchain Developer</h6>
              <h6 class="fs-15">
                Bot Developer</h6>
              <h6 class="fs-15">Business Process Modeling Specialist</h6>
              <h6 class="fs-15">Bahasa Indonesia Freelancer</h6>
            </div>
            <div class="col">
              <h6 class="fs-15">
                Book Designer</h6>
              <h6 class="fs-15">
                Branding Freelancer</h6>
              <h6 class="fs-15">Blockchain Developer</h6>
              <h6 class="fs-15">
                Bot Developer</h6>
              <h6 class="fs-15">Business Process Modeling Specialist</h6>
              <h6 class="fs-15">Bahasa Indonesia Freelancer</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- Last section -->

    @if (get_setting('slider_section_show') == 'on')
    <section class="position-relative jumbotron overflow-hidden d-flex flex-column justify-content-center "
      style="min-height:300px; background-color:#FBF7ED;">
      <div class="container pt-3">
        <div class="">
          <div class="d-flex justify-content-between  align-items-center">
            <div class="row justify-content-between px-4  p-3" style="width:40%;">
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
            <div class=" " style="width:50%;">
              <img src=" {{url('/public/assets/findJob/home-banner.png')}}" alt="Image" "
              class=" w-100" style=" height:430px;" />
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif



    <!-- @if (get_setting('featured_category_show') == 'on')
<section class="bg-white pt-5 pb-4">
  <div class="container">
    <div class="bg-primary py-7 px-6 rounded-2">
      <div class="lh-1-8 mx-auto mb-5">
        <h2 class="fw-700 fs-30 text-white">{{ get_setting('featured_category_title') }}</h2>
        <p class="fs-17 text-white">{{ get_setting('featured_category_subtitle') }}</p>
      </div>
      <div class="row gutters-10">
        @if (get_setting('featured_category_list') != null)
        @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
        @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a class="featured_category d-block card bg-transparent py-5 px-2 text-center text-inherit shadow-none rounded-2 bg-transparent"
            href="{{ route('projects.category', $category->slug) }}" style="height: 176px;border: 1px solid #ced2d9;">
            <img src="{{ custom_asset($category->photo) }}" class="mw-100 h-50px mb-2">
            <p class="fs-16 fw-600 text-white mb-0">{{ $category->name }}</p>
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
  <div class="mt-5">
    <a href="{{ route('search') }}?category="
      class="btn bg-white text-primary rounded-1">{{ translate('Browse More Categories') }}</a>
  </div>
  </div>
  </div>
</section>
@endif -->



    <!-- @if (get_setting('blog_section_show') !== 'on')
    <section class="bg-white pt-4 pb-7 text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
            <div class="section-title mb-5 text-center">
              <h2 class="fw-700 fs-30 text-dark">{{ get_setting('blog_section_title') }}</h2>
              <p class="fs-17 text-secondary">{{ get_setting('blog_section_subtitle') }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2"
            data-sm-items="1" data-arrows='true'>
            @php
            $blogs = \App\Models\Blog::where('status', 1)->latest()
            ->limit(get_setting('max_blog_show_homepage'))
            ->get();
            @endphp
            @foreach ($blogs as $key => $blog)
            <div class="caorusel-box">
              <div class="card text-dark mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
                  <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->title }}" class="card-img-top"
                    height="212">
                </a>
                <div class="p-4">
                  <h2 class="fs-16 fw-600 mb-1 h-45px">
                    <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700"
                      title="{{ $blog->title }}">
                      {{ \Illuminate\Support\Str::limit($blog->title, 45, $end = '...') }}
                    </a>
                  </h2>
                  @if ($blog->category != null)
                  <p class="mt-3 mb-0 text-primary fs-14 fw-700">{{ $blog->category->category_name }}</p>
                  @endif
                  <p class="mb-4 fs-14 text-secondary opacity-70">
                    {{ $blog->created_at ? date('d.m.Y',strtotime($blog->created_at)) : '' }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="mt-4 text-center">
          <a href="{{ route('blog') }}" class="btn btn-primary rounded-1">{{ translate('View More') }}</a>
        </div>
      </div>
    </section>
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
    @endif
    @endsection

</body>

</html>