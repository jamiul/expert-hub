<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">

</head>
<style>

</style>

<body>
  @extends('frontend.default.layouts.app')
  @section('content')
  @if (get_setting('slider_section_show') == 'on')
  <section>
    <section class="hero-section " id="frontHomeTab">
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
                <div class="col-lg-7 col-sm-12 home-cacap-head">
                  <h2 class=" sm-mx-auto fw-700 fs-lg-40 fs-sm-36px" style="">
                    Hire the best consultations for any job, online</h2>
                  <p class="fs-lg-20 fs-sm-14 my-4 ">Millions of people use scholarships Australia to turn their ideas
                    into
                    reality.</p>
                  <div class="lg-my-3 my-sm-0 home-banner-button ">
                    <a href="{{route('register') }}?type=2"
                      class="btn text-white fw-700  fs-lg-18 fs-sm-12 py-lg-3 py-sm-1 px-lg-5 px-sm-1 mb-3"
                      style="background-color:#275846;">{{ translate('I want to Hire') }}</a>
                    <a href="{{route('register') }}?type=1"
                      class="btn text-white fw-700 ml-4 fs-lg-18 fs-sm-12 py-lg-3 py-sm-1 px-lg-5 px-sm-1 mb-3"
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
    <section class="img-slider bg-white">
      <div class=" align-items-center d-flex row">
        <div class="col-lg-2">
          <h2 class=" fw-700 fs-36 text-black ">
            Use by
          </h2>
        </div>
        <div class="col-lg-10">
          <div class="aiz-carousel gutters-10" data-autoplay='true' data-items="6" data-xl-items="6" data-lg-items="5"
            data-md-items="4" data-sm-items="3" data-xs-items="2" data-infinite='true'>
            <div class="caorusel-box d-flex ">

              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/victoria.png') }}" alt="Image"
                  style="width:100px;" />
              </div>

              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/sydney.png') }}" alt="Image"
                  style="width:100px;" />
              </div>
              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/adilade.png') }}" alt="Image"
                  style="width:150px;" />
              </div>
              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/national university.jpg') }}"
                  alt="Image" style="width:130px;" />
              </div>


              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/monas.jpg') }}" alt="Image"
                  style="width:160px;" />
              </div>
              <div class="col-2">
                <img class="img-fluid" src="{{ url('/public/assets/Top-universities/western sydney.jpg') }}" alt="Image"
                  style="width:130px;" />
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- explore services  -->

    @if (get_setting('how_it_works_show') == 'on')
    <section class=" border-top">
      <div class="container-home">
        <div class="">
          <div class="w-xl-50 w-lg-75 pb-3">
            <h2 class="fw-700 fs-36 text-black ">Need academic help?</h2>
            <h6 class="fs-18 fw-400">Most viewed and all time selling services</h6>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=" ">
                  <img class=" " src=" {{url('/public/assets/home/businessman.png')}}" alt="Image"
                    style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-18 fw-700"> Post a job (it’s free) </p>
                  <h6 class="fs-16 mt-3">
                    Its free and easy to post a job. Simply fill in a title descriptions and other additional
                    requirments</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class=""><img class=" " src=" {{url('/public/assets/home/service-2.png')}}" alt="Image"
                    style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-18 fw-700">Academic consultants connect with you</p>
                  <h6 class="fs-16 mt-3">
                    Here you can find most experience and skilful desire consultant, Who can help you project.
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="  ">
                <div class="">
                  <img class=" " src=" {{url('/public/assets/home/service-4.png')}}" alt="Image" style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-18 fw-700"> Collaborate easily </p>
                  <h6 class="fs-16 mt-3">
                    We have 24/7 online customer service so easily you can reach us.</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 ">
              <div class="">
                <div class="">
                  <img class=" " src=" {{url('/public/assets/home/service-3.png')}}" alt="Image" style="width:40px;" />
                </div>
                <div class="mt-3">
                  <p class="fs-18 fw-700"> Payment securely </p>
                  <p class="fs-16 mt-3">
                    You can make payment securely. We have integrity system where your money will be safe.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- Impressive new section  -->
    @if (get_setting('how_it_works_show') == 'on')
    <section class=" border-top">
      <div class="container-home">
        <div class="">
          <div class="w-xl-50 w-lg-75 pb-3">
            <h2 class="fw-700 fs-36 text-black">What makes it impressive?</h2>
            <h6 class="fs-18 fw-400">Most viewed and all time selling services</h6>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class=" ">
                <div class="d-flex ">
                  <img class=" " src=" {{url('/public/assets/home/businessman.png')}}" alt="Image"
                    style="width:33px;" />
                  <p class="fs-18 ml-3 fw-700 ml-lg-3">Accessible academic experts </p>
                </div>
                <h6 class="fs-16 mt-3">
                  Its free and easy to post a job. Simply fill in a title descriptions and other additional
                  requirments</h6>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="">
                <div class="d-flex">
                  <img class=" " src=" {{url('/public/assets/home/service-2.png')}}" alt="Image" style="width:40px;" />
                  <p class="fs-18 fw-700 ml-lg-3">Fast responses</p>
                </div>
                <h6 class="fs-16 mt-3">
                  Here you can find most experience and skilful desire consultant, Who can help you project.
                </h6>

              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="">
                <div class="d-flex">
                  <img class=" " src=" {{url('/public/assets/home/service-4.png')}}" alt="Image" style="width:40px;" />
                  <p class="fs-18 fw-700 ml-lg-3"> High-quality work</p>
                </div>
                <h6 class="fs-16 mt-3">
                  We have 24/7 online customer service so easily you can reach us.</h6>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 ">
              <div class="">
                <div class="d-flex">
                  <img class=" " src=" {{url('/public/assets/home/service-3.png')}}" alt="Image" style="width:35px;" />
                  <p class="fs-18 fw-700 ml-lg-3"> We're here to help you</p>
                </div>
                <p class="fs-16 mt-3">
                  You can make payment securely. We have integrity system where your money will be safe.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    <!-- Service Category -->
    @if (get_setting('featured_category_show') == 'on')
    <section class="bg-white border-top">
      <div class=" container-home">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 lh-1-8 pb-4">
            <h2 class="fw-700 fs-36">{{ get_setting('featured_category_title') }}</h2>
            <p class="fs-17 ">{{ get_setting('featured_category_subtitle') }}</p>
          </div>
          <div>
            <a href="{{ route('search') }}?category="
              class="btn bg-white text-black fs-17 d-lg-none  rounded-1">{{ translate('Browse More Categories') }}
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
                  <img class="" src=" {{ custom_asset($category->photo) }}" alt="Image" style="width:50px; 
                  " />
                </div>
                <a class="featured_category " href="{{ route('projects.category', $category->slug) }}">
                  <p class="fs-18 fw-600 my-3">{{ $category->name }}</p>
                </a>
                <small class="card-text fs-16 mt-2">Software engineer web / mobile developer & more

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

    <!-- Trending services  -->
    <!-- @if (get_setting('latest_project_show') == 'on')
    <section class="border-top" style="background-color:#FBF7ED;">
      <div class="container-home" style=" ">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 w-xl-50 lh-1-8 pb-4 ">
            <h2 class="fw-700 fs-36 text-black">Trending services</h2>
            <h6 class="fs-18 fw-400">Most viewed and all-time top-selling services</h6>
          </div>
          <div>
            <img class=" " src=" {{url('/public/assets/home/back.png')}}" alt="Image" style="width:20px;" />
            <img class=" " src=" {{url('/public/assets/home/next.png')}}" alt="Image" style="width:20px;" />
          </div>
        </div>


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

    </section>
    @endif -->


    <!-- Trending services new -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top" style="background-color:#FBF7ED;">
      <div class="container-home" style=" ">
        <div class="d-flex justify-content-between ">
          <div class="w-lg-75 w-xl-50 lh-1-8 pb-4 ">
            <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2>
            <p class="fs-17 text-secondary">{{ get_setting('service_section_subtitle') }}</p>
          </div>
          <div>
            <img class=" " src=" {{url('/public/assets/home/back.png')}}" alt="Image" style="width:20px;" />
            <img class=" " src=" {{url('/public/assets/home/next.png')}}" alt="Image" style="width:20px;" />
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
          <div class="col-lg-3 ">
            <div class="caorusel-box">
              <div class="card  rounded-1" style="height:400px">
                <div class="">
                  <div class="bg-secondary ">
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
                  <div class="p-2">
                    <div>
                      <p class="card-title mt-1 fs-18">Web & app design</p>
                      <p class="card-title mt-1 fs-18 fw-700">
                        {{ \Illuminate\Support\Str::limit($service->title, 45, $end = '...') }}</p>
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
        <div class="pt-2 text-center">
          <a href="{{ route('search') }}?keyword=&type=service" class="category-list fs-18 fw-400 "><span>All
              services</span></a>
          <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image"
            style="width:18px;" />
        </div>

    </section>
    @endif



    <!-- Latest job  -->
    @if (get_setting('latest_project_show') == 'on')
    <section class="">
      <div class=" container-home">
        <div class="d-flex justify-content-between">
          <div class="w-lg-75 w-xl-50 lh-1-8 pb-4">
            <h2 class="fw-700 fs-36 text-black ">Browse Academic Jobs by Category</h2>
            <h6 class=" fs-18 fw-400">Know your worth and find the jobs that quality your life</h6>
          </div>
          <div>
            <a class=" " href=" #">
              <small class="fs-18 fw-400 category-list">All categories</small>
              <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:18px;" />
            </a>
          </div>
        </div>
        <div class="">
          <div class="row">
            <div class="col-sm-6">
              <div class="card rounded ">
                <div class="card-body d-flex items-center justify-content-between">
                  <div>
                    <img class=" rounded-circle" src=" {{url('/public/assets/home/job-1.png')}}" alt="Image"
                      style="width:50px;  align-items:center;" />
                  </div>
                  <div>
                    <p class="fs-18 fw-400"> Writing and Editing </p>
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
                    <p class=" fs-18 fw-400">Research and Analysis</p>
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
                    <p class="fs-18 fw-400">Course curriculum Development</p>
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
                    <p class=" fs-18 fw-400">Course material development</p>
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
                    <p class=" fs-18 fw-400">Transcription and Translation</p>
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
                    <p class=" fs-18 fw-400">Scholarship Applications </p>
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
                    <p class=" fs-18 fw-400">Academic mentoring </p>
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
                    <p class=" fs-18 fw-400">Tutoring and Instruction</p>
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

    <!-- Join us -->

    @if (get_setting('latest_project_show') == 'on')
    <section class="border-top">
      <div class="container-home">
        <div class="row ">
          <div class="col-lg-6 col-sm-6">
            <img class="mr-2  img-fluid" src="{{url('/public/assets/home/001.png')}}" alt="Image"
              style="width:500px;" />
          </div>
          <div class=" col-lg-6 col-sm-12">
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
              <span><img class="px-1 " src="{{url('/public/assets/home/arrows.png')}}" alt="Image"
                  style="width:18px; " /></span>
            </button>
          </div>
        </div>
      </div>
    </section>
    @endif


    <!-- learn with scholarship australia -->
    @if (get_setting('latest_project_show') == 'on')
    <section class=" border-top border-bottom">
      <div class=" container-home">
        <div class="">
          <h2 class="fw-700 fs-36 text-black">People Love To Learn With Scholarships Australia</h2>
        </div>
        <div class="mt-4">
          <div class="row ">
            <div class="col-lg-4">
              <div class=" card rounded-1 " style="height:280px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great Work</p>
                  <p class=" mt-3 fs-18 ">"I am very satisfied with his work; so far, he has consistently
                    delivered his job on time. We will work together in the future."
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Academic advisor</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" ">
                <p class=" mt-2 fs-18 text-black fw-700">4.9/5</p>
                <p class=" mt-3 fs-18">"Clients rate professional on Scholarships Australia"
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class=" card rounded-1 " style="height:280px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great Work</p>
                  <p class=" mt-3 fs-18 ">"I am happy with his responsiveness throughout the entire project
                    duration; he was very experienced and provided quality work."
                  </p>
                  <hr>
                  <div class="d-flex  ">
                    <div>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                    </div>
                    <div>
                      <small class="fw-700 fs-14 text-black"> Mr. jack</small>
                      <h6 class="fs-14 text-muted" style="Line height:10px;"> Information technology expert</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" ">
                <p class=" mt-2 fs-18 text-black fw-700">95%</p>
                <p class=" mt-3 fs-18">95% customers are satisfied through to see their consultant
                </p>

              </div>
            </div>
            <div class="col-lg-4 ">
              <div class=" card rounded-1 " style="height:280px;">
                <div class=" card-body">
                  <p class="text-primary mt-2 fs-18">Great work</p>
                  <p class=" mt-3 fs-18 ">
                    " I am happy for my work and recommend him. He is a very potential and committed person."
                  </p>
                  <div class="border-top mt-5"></div>
                  <div class="d-flex  mt-3">
                    <div>
                      <img class="mr-2  " src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
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
              <div class="">
                <p class=" mt-2 fs-18 text-black fw-700">Award winner</p>
                <p class=" mt-3 fs-18">G2s best software awards
                </p>
              </div>
            </div>
          </div>
    </section>
    @endif

    <!-- Blog  -->
    <!-- @if (get_setting('latest_project_show') == 'on')
    <section class="">
      <div class="container-home">
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
              <div class="card  rounded-1" style="height:410px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-14">April 2, 2023 </small>
                      <h6 class="fw-700 fs-18 mt-1">How to write a proper academic writing?</h6>
                      <small class=" fs-16">A complete guide to write a proper academic writing</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:410px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-14">May 7, 2023 </small>
                      <p class="fw-700 fs-18  ">How can you prepare yourself for scholarships?</p>
                      <small class=" fs-16">There are few important steps you can follow for your preparations</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:410px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-16">September 01, 2022 </small>
                      <p class="fw-700 fs-18 ">The journey of international study</p>
                      <small class=" fs-16">The complete guide of study in international recognized universities
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card  rounded-1" style="height:410px;">
                <div class="">
                  <div class="bg-secondary ">
                    <img class="w-100" src=" {{url('/public/assets/home/Trend.png')}}" alt="Image" />
                  </div>
                  <div class="card-body">
                    <div>
                      <small class=" mt-3 fs-16">May 12, 2023 </small>
                      <p class="fw-700 fs-18 ">Start an online business and work from home</p>
                      <small class=" fs-16">A complete guide to starting a small business</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>
    @endif -->

    <!-- Blog 2 -->

    @if (get_setting('blog_section_show') == 'on')
    <section class="bg-white pb-7 text-white  -pt-3">
      <div class="container-main">
        <div class="d-flex justify-content-between mb-3">
          <div class="">
            <div class="section-title ">
              <h2 class="fw-700 fs-36 text-dark">{{ get_setting('blog_section_title') }}</h2>
              <p class="fs-17 text-dark">{{ get_setting('blog_section_subtitle') }}</p>
            </div>
          </div>
          <div class="mt-4 text-center">
            <a href="{{ route('blog') }}" class=""></a>
            <a class=" " href="{{ route('blog') }}">
              <small class="fs-18 fw-40 category-list">{{ translate('All blogs') }} </small>
              <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:15px;" />
            </a>
          </div>
        </div>

        <div class="row">

          @php
          $blogs = \App\Models\Blog::where('status', 1)->latest()
          ->limit(get_setting('max_blog_show_homepage'))
          ->get();
          @endphp
          @foreach ($blogs as $key => $blog)
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class=" gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
              data-arrows='true'>
              <div class="caorusel-box">
                <div class="card  rounded-1" style="height:410px;">
                  <div class="">
                    <div class=" ">
                      <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
                        <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->title }}" class="card-img-top "
                          height="212">
                      </a>
                    </div>
                    <div class="card-body">
                      <div>
                        <p class="mb-2 fs-14 text-dark">
                          {{ $blog->created_at ? date('d.m.Y',strtotime($blog->created_at)) : '' }}</p>
                        <!-- <h2 class="fs-18 fw-600 mb-1  ">
                          @if ($blog->category != null)
                          <p class=" mb-0 s-14 fw-700 blog-cat-name text-dark ">{{ $blog->category->category_name }}</p>
                          @endif
                        </h2> -->
                        <h2 class="fs-18 fw-600 mb-1 h-45px">
                          <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700"
                            title="{{ $blog->title }}">
                            {{ \Illuminate\Support\Str::limit($blog->title, 45, $end = '...') }}
                          </a>
                        </h2>
                        <h2 class="fs-18 mb-1 h-45px">
                          <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 "
                            title="{{ $blog->title }}">
                            {{ \Illuminate\Support\Str::limit($blog->short_description, 60, $end = '...') }}
                          </a>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </section>
    @endif


    <!-- skills -->
    <!-- @if (get_setting('latest_project_show') == 'on')
    <section class=" bg-white border-top">
      <div>
        <div class=" container-home ">
          <ul class=" nav mt-5 pb-4 ">
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

          <div class="">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col">
                <h6 class="fs-15">
                  Research writing</h6>
                <h6 class="fs-15">
                  Proofreading and editing</h6>
                <h6 class="fs-15">Data analysis and interpretation</h6>
                <h6 class="fs-15">Translation services</h6>
              </div>

              <div class="col">
                <h6 class="fs-15">
                  Research proposal writing</h6>
                <h6 class="fs-15">
                  Statistical analysis </h6>
                <h6 class="fs-15">
                  Curriculum development</h6>
              </div>
              <div class="col">
                <h6 class="fs-15">
                  <h6 class="fs-15">
                    Research proposal writing</h6>
                </h6>
                <h6 class="fs-15">
                  Scholarship applications</h6>
                <h6 class="fs-15">Academic mentoring </h6>
              </div>
              <div class="col">
                <h6 class="fs-15">
                  Copywriting</h6>
                <h6 class="fs-15">
                  Tutoring and Instruction</h6>
                <h6 class="fs-15">Transcribing audio or video recordings</h6>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    @endif -->

    @if (get_setting('latest_project_show') == 'on')
    <section class=" bg-white border-top">
      <div class="container-home">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
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
              aria-controls="contact" aria-selected="false">Top skills in Australia</h5>
          </li>
          <li class="nav-item" role="presentation">
            <h5 class="nav-link fs-22" id="contact-tab" data-toggle="tab" data-target="#contact" role="tab"
              aria-controls="contact" aria-selected="false">Project catalog</h5>
          </li>
        </ul>

        <div class="tab-content mt-5" id="myTabContent">
          <div class="tab-pane tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="">
              <div class=" row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4">
                <div class="col">
                  <h6 class="fs-15">
                    Research writing</h6>
                  <h6 class="fs-15">
                    Proofreading and editing</h6>
                  <h6 class="fs-15">Data analysis and interpretation</h6>
                  <h6 class="fs-15">Translation services</h6>
                </div>

                <div class="col">
                  <h6 class="fs-15">
                    Research proposal writing</h6>
                  <h6 class="fs-15">
                    Statistical analysis </h6>
                  <h6 class="fs-15">
                    Curriculum development</h6>
                </div>
                <div class="col">
                  <h6 class="fs-15">
                    <h6 class="fs-15">
                      Research proposal writing</h6>
                  </h6>
                  <h6 class="fs-15">
                    Scholarship applications</h6>
                  <h6 class="fs-15">Academic mentoring </h6>
                </div>
                <div class="col">
                  <h6 class="fs-15">
                    Copywriting</h6>
                  <h6 class="fs-15">
                    Tutoring and Instruction</h6>
                  <h6 class="fs-15">Transcribing audio or video recordings</h6>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>


    </section>

    @endif



    <!-- Last section -->
    @if (get_setting('slider_section_show') == 'on')
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
    @endif

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