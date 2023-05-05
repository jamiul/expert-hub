@extends('frontend.default.layouts.app')

@section('content')
@if (get_setting('slider_section_show') == 'on')
<section class="position-relative overflow-hidden  pb-5 d-flex flex-column justify-content-center"
  style="min-height: 300px;">
  <div class="container">
    <div class="">
      <div class="d-flex justify-content-around  align-items-center">
        <div class="row justify-content-between px-4  p-3" style="width:40%;">
          <div>
            <h2 class=" fw-400" style="font-family:sans-serif; letter-spacing: -.032em; line-height: 1em;">Do
              Hire the best consultations for any job, online
            </h2>
            <p class="fs-18 my-3">Millions of people use scholarships Australia to turn their ideas into reality.
            </p>
            <div>
              <a href="{{ route('register') }}?type=2"
                class="btn btn-primary fw-700 py-3 px-3 mb-3 rounded-1">{{ translate('I want to Hire') }}</a>
              <a href="{{ route('register') }}?type=1"
                class="btn btn-outline-primary py-3 px-3 ml-lg-3 mb-3 rounded-1">{{ translate('I want to Work') }}</a>
            </div>
          </div>


        </div>
        <div class=" " style="width:60%;">
          <img src=" {{url('/public/assets/findJob/home-banner.png')}}" alt="Image" "
              class=" w-100" style=" height:500px; " />
        </div>
      </div>
    </div>
  </div>
</section>
@endif


@if (get_setting('client_logo_show') == 'on')
<section class=" bg-white">
  <div class="container">
    <div class="text-center ">
      <p class="mb-3 fw-600">
        Trusted by the world best
      </p>
    </div>
    <div class="row align-items-center mb-4">
      <div class="aiz-carousel gutters-10" data-autoplay='true' data-items="6" data-xl-items="6" data-lg-items="5"
        data-md-items="4" data-sm-items="3" data-xs-items="2" data-infinite='true'>
        @if (get_setting('client_logos') != null)
        @foreach (explode(',', get_setting('client_logos')) as $key => $value)



        <div class=""><img class=" " src=" {{url('/public/assets/home/amazon-pay.png')}}" alt="Image"
            style="width:80px;" />
        </div>



        <div class="">

          <img class=" " src=" {{url('/public/assets/home/cisco.png')}}" alt="Image" style="width:60px;" />

        </div>
        <div class="">

          <img class=" " src=" {{url('/public/assets/home/amd.png')}}" alt="Image" style="width:60px;" />
        </div>





        <div class=""><img class=" " src=" {{url('/public/assets/home/logitech.png')}}" alt=s"Image"
            style="width:60px;" />
        </div>
        <div class="">
          <img class=" " src=" {{url('/public/assets/home/spotify.png')}}" alt="Image" style="width:60px;" />
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
<section class="pt-4 border-top">
  <div class="container">
    <div class="py-3 rounded-2 ">
      <div class="w-xl-50 w-lg-75 mx-auto my-5 text-center">


        <h4 class="fw-700 fs-32">Need something done?</h4>
        <small class="fs-12">Most viewed and all time selling services</small>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6">
          <div class="px-xl-10 px-md-3 mb-4 text-center  ">
            <div class=" ">
              <img class=" " src=" {{url('/public/assets/home/businessman.png')}}" alt="Image" style="width:50px;" />
            </div>
            <div class="mt-3">
              <h6> Post a job</h6>
              <p class="mt-3">
                Its free and easy to post a job. Simply fill in a title descriptions</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="px-xl-10 px-md-3 mb-4 text-center">
            <div class=""><img class=" " src=" {{url('/public/assets/home/web.png')}}" alt="Image"
                style="width:50px;" />
            </div>
            <div class="mt-3">
              <h6>Choose consultants </h6>
              <p class="mt-3">

                its free and easy to post a job. Simply fill in a title descriptions</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="px-xl-10 px-md-3 mb-4 text-center">
            <div class="">
              <img class=" " src=" {{url('/public/assets/home/helmet.png')}}" alt="Image" style="width:50px;" />
            </div>
            <div class="mt-3">
              <h6> Pay safely </h6>
              <p class="mt-3">

                its free and easy to post a job. Simply fill in a title descriptions</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="px-xl-10 px-md-3 mb-4 text-center">
            <div class="">
              <img class=" " src=" {{url('/public/assets/home/support.png')}}" alt="Image" style="width:50px;" />
            </div>
            <div class="mt-3">
              <h6> We're here to help you </h6>
              <p class="mt-3">

                its free and easy to post a job. Simply fill in a title descriptions </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif


<!-- category -->

@if (get_setting('latest_project_show') == 'on')
<section class=" bg-white pt-4   " style="margin-bottom:70px;">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="w-lg-75 w-xl-50 lh-1-8">
        <h5 class="fw-700 fs-32">Browse talent by category</h5>
        <small class="fs-13 ">Get some inspirations from 1800+ skills</small>
      </div>
      <div>
        <small class="fw-700 fs-13">All categories</small>
        <img class=" " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:30px;" />
      </div>
    </div>

    <div class="" style="margin-top:40px;">
      <div class="row ">
        <div class="col-lg-3">
          <div class=" card rounded-1 ">
            <div class=" card-body">

              <div class="">
                <img class="" src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px; 
                  " />
              </div>
              <p class=" fs-12">1853 skills</p>
              <p class="fs-16">Development and IT</p>
              <p class=" fs-16">Software engineer web / mobile developer & more</p>

            </div>
          </div>
        </div>
        <div class="col-lg-3" ">
          <div class=" card rounded-1">
          <div class=" card-body">
            <div class=""><img src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:50px;
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Design creative</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card  rounded-1">
          <div class="card-body">
            <div class=""><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px;
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Digital marketing </p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card  rounded-1">
          <div class=" card-body">
            <div class=""><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px;" />
            </div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Writings and translation</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>

          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card  rounded-1">
          <div class="card-body">
            <div class=""><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px;
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Music and audio</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card rounded-1">
          <div class="card-body">
            <div class=""><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px;
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Video and animation</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card  rounded-1">
          <div class="card-body">
            <div class=" "><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px; 
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Engineering & Architecture</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card  rounded-1">
          <div class="card-body">
            <div class=" "><img src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:50px;
                  " /></div>
            <p class="card-title mt-3 fs-12">1853 skills</p>
            <p class="card-title mt-3 fs-18">Finance & Accounting</p>
            <p class="card-text fs-16">Software engineer web / mobile developer & more</p>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif


<!-- Trending services  -->

@if (get_setting('latest_project_show') == 'on')
<section class=" jumbotron" style="background-color:#FBF7ED;">
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
      <div class="w-lg-75 w-xl-50 lh-1-8">
        <h5 class="fw-700 fs-32 ">Trending services</h5>
        <p class="fs-12">Most viewed and all-time top-selling services</p>
      </div>
      <div>


        <img class=" " src=" {{url('/public/assets/home/back.png')}}" alt="Image" style="width:20px;" />

        <img class=" " src=" {{url('/public/assets/home/next.png')}}" alt="Image" style="width:20px;" />
      </div>
    </div>

    <div class="mt-4">
      <div class="row ">

        <div class="col-lg-3 ">
          <div class="card  rounded-1" style="height:370px">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <p class="card-title mt-3 fs-12">Web app design&</p>
                  <p class="card-title mt-3 fs-16 fw-700">I will design modern website in figma or adobe xd</p>
                  <span>
                    <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                  </span>
                  <span> 4896</span>
                  <span> reviews</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div>
                    <span>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:12px;
                  " />
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
          <div class="card  rounded-1" style="height:370px">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <p class="card-title mt-3 fs-12">Art & illustrations</p>
                  <p class="card-title mt-1 fs-16 fw-700">I will create modern flat design illustrations</p>
                  <span>
                    <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                  </span>
                  <span> 4896</span>
                  <span> reviews</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div>
                    <span>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:12px;
                  " />
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
          <div class="card  rounded-1" style="height:370px">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <p class="card-title mt-1 fs-12">Design & creative</p>
                  <p class="card-title mt-1 fs-16 fw-700">I will design fully responsive website website with HTML, CSS,
                    boootstrap..
                  </p>
                  <span>
                    <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                  </span>
                  <span> 4896 reviews</span>

                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div>
                    <span>
                      <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:12px;
                  " />
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
          <div class="card  rounded-1" style="height:370px">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <p class="card-title mt-3 fs-12">Web & app design </p>
                  <p class="card-title mt-1 fs-16 fw-700">I will do mobile and web development</p>
                  <span>
                    <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:12px; 
                  " />
                  </span>
                  <span> 4896</span>
                  <span> reviews</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div>
                    <span>
                      <img src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:15px;
                  " />
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
        <a href="#"><span>All services</span></a>
        <img class=" " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:30px;" />

      </div>
    </div>
</section>
@endif

<!-- Latest job  -->

@if (get_setting('latest_project_show') == 'on')
<section class="">
  <div class=" container" style="margin-top:50px;">
    <div class="d-flex justify-content-between mb-4">
      <div class="w-lg-75 w-xl-50 lh-1-8">
        <h5 class="fw-700 fs-32">Our Latest Jobs</h5>
        <small class="fs-13 ">Know your worth and find the jobs that quality your life</small>
      </div>
      <div>
        <small class="fw-700 fs-13">All categories</small>
        <img class=" " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:30px;" />
      </div>
    </div>
    <div class="my-2">
      <div class="row">
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
              </div>



            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="card rounded ">
            <div class="card-body d-flex items-center justify-content-between">
              <div>
                <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:70px;  align-items:center;" />
              </div>
              <div>
                <p class=" fs-16 fw-700">Website Resigner Required for Directory heamT</p>
                <p class="text-primary">
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
                  style="width:20px;  align-items:center;" />
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
<section class="jumbotron " style="margin-top:80px;">
  <div class=" container">
    <div class="">
      <div class="w-lg-75 w-xl-50 lh-1-8">
        <h5 class="fw-700 fs-30">People love to learn with scholarships Australia </h5>
      </div>
    </div>

    <div class="mt-5">
      <div class="row ">
        <div class="col-lg-4">
          <div class=" card rounded-1 ">
            <div class=" card-body">
              <p class="text-primary mt-2 fs-12">Great work</p>
              <p class=" mt-3 fs-16">"I found the course material to be highly engaging and the instructors to
                be helpful communicative"
              </p>
              <hr>
              <div class="d-flex  ">
                <div>
                  <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                </div>
                <div>
                  <small class="fw-700"> Curtney Henry</small>
                  <p style="Line height:10px;"> Web designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class=" card rounded-1 ">
            <div class=" card-body">
              <p class="text-primary mt-2 fs-12">Great work</p>
              <p class=" mt-3 fs-16">"I found the course material to be highly engaging and the instructors to
                be helpful communicative"
              </p>
              <hr>
              <div class="d-flex  ">
                <div>
                  <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                </div>
                <div>
                  <small class="fw-700"> Curtney Henry</small>
                  <p style="Line height:10px;"> Web designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class=" card rounded-1 ">
            <div class=" card-body">
              <p class="text-primary mt-2 fs-12">Great work</p>
              <p class=" mt-3 fs-16">"I found the course material to be highly engaging and the instructors to
                be helpful communicative"
              </p>
              <hr>
              <div class="d-flex  ">
                <div>
                  <img class="mr-2" src=" {{url('/public/assets/home/worldwide.png')}}" alt="Image" style="width:30px;
                  " />
                </div>
                <div>
                  <small class="fw-700"> Curtney Henry</small>
                  <p style="Line height:10px;"> Web designer</p>
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
              <p class="text-primary mt-2 fs-12">4.9/5</p>
              <p class=" mt-3 fs-16">Clients rate professional scholarships austrralia"
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="">
            <div class=" ">
              <p class="text-primary mt-2 fs-12">95%</p>
              <p class=" mt-3 fs-16">95% customers are satisfied through to see their consultant
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="  ">
            <div class="">
              <p class="text-primary mt-2 fs-12">Award winner</p>
              <p class=" mt-3 fs-16">G2s best software awards
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
</section>

@endif
@if (get_setting('latest_project_show') == 'on')
<section class="">
  <div class=" container mt-5 ">
    <div class="row g-5 d-fle justify-content-around mt-4">
      <div>
        <img class="mr-2" src="{{url('/public/assets/findJob/home-banner.png')}}" alt="Image" style="height:300px;" />
      </div>
      <div class="col-lg-5 col-sm-12 ">
        <h3>Join world best marketplace for consultant</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ad cumque doloribus odio amet aperiam
          voluptatum doloremque, sint ratione sit beatae ullam quisquam maiores similique consequatur deleniti nisi
          assumenda? Error?</p>
        <div class="">
          <div class="d-flex ">
            <div>
              <img class="mr-2" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
            </div>
            <div>
              <p class="fs-16 "> Find work that hits your financial
                goals
                faster
                with
                ambitious startups
                and well-known brands.</p>
            </div>
            <div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
            <p class="h6 m-2">

              Build a predictable pipeline of projects, big and small, through strong
              connections.
            </p>



          </div>
          <div class="d-flex align-items-center mb-2">
            <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
            <p class="h6 m-2 "> Search for jobs or have
              clients
              come to you. The
              opportunities
              are endless.</p>
          </div>
        </div>
        <button type="button" class=" rounded-1 mt-3 text-white p-2 btn fs-16 px-4"
          style=" background-color:#337204;">Find talent</button>
      </div>


    </div>

  </div>

</section>
@endif



<!-- Blog  -->
@if (get_setting('latest_project_show') == 'on')
<section class="">
  <div class="container" style="margin-top:70px;">
    <div class="d-flex justify-content-between mb-4">
      <div class="w-lg-75 w-xl-50 lh-1-8">
        <h5 class="fw-700 fs-32">Our Blog</h5>
        <small class="fs-13 ">See how you can up your career status</small>
      </div>
      <div>
        <small class="fw-700 fs-13">All categories</small>
        <img class=" " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:30px;" />
      </div>
    </div>

    <div class="mt-4">
      <div class="row ">

        <div class="col-lg-3 ">
          <div class="card  rounded-1" style="height:320px;">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <small class=" mt-3 fs-12">December 2, 2023 </small>
                  <p class="fw-700 fs-16">Start an online business and work from home</p>
                  <small class=" fs-12">A complete guide to starting a small business</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1" style="height:320px;">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <small class=" mt-3 fs-12">December 2, 2023 </small>
                  <p class="fw-700 fs-16">Start an online business and work from home</p>
                  <small class=" fs-12">A complete guide to starting a small business</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1" style="height:320px;">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <small class=" mt-3 fs-12">December 2, 2023 </small>
                  <p class="fw-700 fs-16">Start an online business and work from home</p>
                  <small class=" fs-12">A complete guide to starting a small business</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 ">
          <div class="card  rounded-1" style="height:320px;">
            <div class="">
              <div class="bg-secondary "><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; height:140px; 
                  " /></div>
              <div class="card-body">
                <div>
                  <small class=" mt-3 fs-12">December 2, 2023 </small>
                  <p class="fw-700 fs-16">Start an online business and work from home</p>
                  <small class=" fs-12">A complete guide to starting a small business</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</section>
@endif

@if (get_setting('latest_project_show') == 'on')
<section class=" bg-white">
  <div class="container ">
    <ul class="nav my-5">
      <li class="nav-item">
        <a class="nav-link active  fw-700" aria-current="page" href="#">
          <h6 class="fs-28" style="color:black; font-weight:700;">Top skills</h6>
        </a>
      </li>
      <li class=" nav-item">
        <a class="nav-link text-muted fs-28" href="#">
          <h6 class="fs-28"> Trending skills </h6>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted" href="#">
          <h6 class="fs-28">Top skills in Australia</h6>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
          <h6 class="fs-28 text-muted">Project
            catalog</h6>

        </a>
      </li>
    </ul>

    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">
        <div class="col">

          <p class="skills">
            Book Designer</p>
          <p class="skills">
            Branding Freelancer</p>
          <p class="skills">Blockchain Developer</p>
          <p class="skills">
            Bot Developer</p>
          <p class="skills">Business Process Modeling Specialist</p>
          <p class="skills">Bahasa Indonesia Freelancer</p>
        </div>
        <div class="col">
          <p class="skills">
            Book Designer</p>
          <p class="skills">
            Branding Freelancer</p>
          <p class="skills">Blockchain Developer</p>
          <p class="skills">
            Bot Developer</p>
          <p class="skills">Business Process Modeling Specialist</p>
          <p class="skills">Bahasa Indonesia Freelancer</p>
        </div>
        <div class="col">
          <p class="skills">
            Book Designer</p>
          <p class="skills">
            Branding Freelancer</p>
          <p class="skills">Blockchain Developer</p>
          <p class="skills">
            Bot Developer</p>
          <p class="skills">Business Process Modeling Specialist</p>
          <p class="skills">Bahasa Indonesia Freelancer</p>
        </div>
        <div class="col">
          <p class="skills">
            Book Designer</p>
          <p class="skills">
            Branding Freelancer</p>
          <p class="skills">Blockchain Developer</p>
          <p class="skills">
            Bot Developer</p>
          <p class="skills">Business Process Modeling Specialist</p>
          <p class="skills">Bahasa Indonesia Freelancer</p>
        </div>
        <div class="col">
          <p class="skills">
            Book Designer</p>
          <p class="skills">
            Branding Freelancer</p>
          <p class="skills">Blockchain Developer</p>
          <p class="skills">
            Bot Developer</p>
          <p class="skills">Business Process Modeling Specialist</p>
          <p class="skills">Bahasa Indonesia Freelancer</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endif



@if (get_setting('slider_section_show') == 'on')
<section class="position-relative jumbotron overflow-hidden d-flex flex-column justify-content-center"
  style="min-height:300px; background-color:#FBF7ED;">

  <div class="container">
    <div class="">
      <div class="d-flex justify-content-between  align-items-center">
        <div class="row justify-content-between px-4  p-3" style="width:40%;">
          <div>
            <button class="btn rounded-2 bg-white">Start today</button>
            <h5 class=" fw-700 fs-32 my-4" style="font-family:sans-serif; letter-spacing: -.032em; line-height: 1em;">
              Download
              the
              App
            </h5>
            <small class=" my-3">To classes on the go with scholarship Australia app. Stream or download to the
              watch on the plane, the subway or wherever you learn best
            </small>
            <div class="mt-3">
              <a href="{{ route('register') }}?type=2" style="background-color:#204B3F;" class="btn  mb-3 rounded-1">
                <img class="" src="{{url('/public/assets/home/apple.png')}}" alt="Image" style="height:20px;" />
                <span>|</span>
                <span class="text-white">Download on the <br> apple store</span>

              </a>


              <a href="{{ route('register') }}?type=2" style="background-color:#204B3F;" class="btn  mb-3 rounded-1">
                <img class="" src="{{url('/public/assets/home/playstore.png')}}" alt="Image" style="height:20px;" />
                <span>|</span>
                <span class="text-white">Go to on google <br> play store</span>

              </a>


            </div>
          </div>


        </div>
        <div class=" " style="width:50%;">
          <img src=" {{url('/public/assets/findJob/home-banner.png')}}" alt="Image" "
              class=" w-100" style=" height:370px;" />
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
        <h2 class="fw-700 fs-40 text-white">{{ get_setting('featured_category_title') }}</h2>
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

<!-- @if (get_setting('service_section_show') == 'on')
<section class="pt-8 pb-2 bg-white">
  <div class="container">
    <div class="row mb-5">
      <div class="col-xl-6 col-md-8 mx-auto">
        <div class="text-center">
          <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2>
          <p class="fs-17 text-secondary">{{ get_setting('service_section_subtitle') }}</p>
        </div>
      </div>
    </div>
    @php
    $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
    ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
    ->pluck('user_id');

    $services = \App\Models\Service::inRandomOrder()
    ->whereIn('user_id', $user_ids)
    ->take(get_setting('max_service_show_homepage'))
    ->get();
    @endphp
    <div class="row">
      <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
        data-arrows='true'>
        @foreach ($services as $service)
        <div class="caorusel-box">
          <div class="card bg-transparent rounded-2 border-gray-light hov-box overflow-hidden">
            <a href="{{ route('service.show', $service->slug) }}">
              @if($service->image != null)
              <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212">
              @else
              <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top"
                alt="{{ translate('Service Image') }}" height="212">
              @endif
            </a>
            <div class="card-body hov-box-body">
              <div class="d-flex mb-2">
                <span class="mr-2">
                  @if ($service->user->photo != null)
                  <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35"
                    width="35" class="rounded-circle">
                  @else
                  <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                    alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                  @endif
                </span>
                <span class="d-flex flex-column justify-content-center">
                  <a href="{{ route('freelancer.details', $service->user->user_name) }}"
                    class="text-secondary fs-14"><span class="font-weight-bold">{{ $service->user->name }}</span></a>
                </span>
              </div>

              <a href="{{ route('service.show', $service->slug) }}" class="text-dark" title="{{ $service->title }}">
                <h5 class="card-title fs-16 fw-700 h-40px">
                  {{ \Illuminate\Support\Str::limit($service->title, 45, $end = '...') }}</h5>
              </a>
              <div class="text-warning">
                <span class="rating rating-lg rating-mr-1">
                  {{ renderStarRating(getAverageRating($service->user->id)) }}
                </span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
    <div class="pt-5 text-center">
      <a href="{{ route('search') }}?keyword=&type=service"
        class="btn btn-primary rounded-1">{{ translate('Explore More Services') }}</a>
    </div>
  </div>
</section>
@endif -->

<!-- 
@if (get_setting('cta_section_show') == 'on')
<section class="cta_section py-8 bg-white">
  <div class="container">
    <div class="bg-white">
      <div class="row mx-0 sm-no-gutters rounded-2 overflow-hidden">
        <div class="col-lg-6 px-0">
          <img
            src="{{ get_setting('cta_section_banner') ? custom_asset(get_setting('cta_section_banner')) : my_asset('assets/placeholder.jpg') }}"
            alt="" class="w-100 h-100">
        </div>
        <div class="col-lg-6 px-0">
          <div class="bg-primary py-6 px-4 h-100">
            <nav class="nav mb-3">
              <a class="nav-link text-white opacity-50 active" href="#nav-client"
                data-toggle="tab">{{ translate('Client') }}</a>
              <a class="nav-link text-white opacity-50" href="#nav-freelancer"
                data-toggle="tab">{{ translate('Freelancer') }}</a>
            </nav>
            <div class="tab-content">
              <div class="tab-pane fade show active " id="nav-client">
                <div class="lh-1-8 mx-auto mb-5">
                  <h2 class="fw-700 fs-40 text-white">{{ get_setting('cta_section_title_client') }}</h2>
                  <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_client') !!}</p>
                </div>
                <div>
                  <div><a href="{{ route('login') }}"
                      class="text-white hov-text-light">{{ translate('Already a Client') }},
                      <strong>{{ translate('Login to Get Started') }} <i
                          class="las la-long-arrow-alt-right"></i></strong></a></div>
                  <a href="{{ route('register') }}?type=2"
                    class="btn bg-white text-primary hov-text-soft-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                </div>
              </div>
              <div class="tab-pane fade " id="nav-freelancer">
                <div class="lh-1-8 mx-auto mb-5">
                  <h2 class="fw-700 fs-40 text-white">{{ get_setting('cta_section_title_freelancer') }}</h2>
                  <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_freelancer') !!}</p>
                </div>
                <div>
                  <div><a href="{{ route('login') }}"
                      class="text-white hov-text-light">{{ translate('Already a Freelancer') }},
                      <strong>{{ translate('Login to Get Started') }} <i
                          class="las la-long-arrow-alt-right"></i></strong></a></div>
                  <a href="{{ route('register') }}?type=1"
                    class="btn bg-white text-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif -->

<!-- @if (get_setting('blog_section_show') == 'on')
<section class="bg-white pt-4 pb-7 text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
        <div class="section-title mb-5 text-center">
          <h2 class="fw-700 fs-40 text-dark">{{ get_setting('blog_section_title') }}</h2>
          <p class="fs-17 text-secondary">{{ get_setting('blog_section_subtitle') }}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
        data-arrows='true'>
        @php
        $blogs = \App\Models\Blog::where('status', 1)->latest()
        ->limit(get_setting('max_blog_show_homepage'))
        ->get();
        @endphp
        @foreach ($blogs as $key => $blog)
        <div class="caorusel-box">
          <div class="card text-dark mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
            <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
              <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->title }}" class="card-img-top" height="212">
            </a>
            <div class="p-4">
              <h2 class="fs-18 fw-600 mb-1 h-45px">
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
@endif
@endsection -->



<!-- 
@section('modal')
@if ((Session::has('new_user') && Session::get('new_user') == true) || (auth()->check() && auth()->user()->user_type ==
null))
<div class="modal fade" id="show_new_user_modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ translate('Choose your account Type') }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="show_modal_body">
        <form action="{{ route('user.account.type') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="user_type">{{ translate('User Type') }}</label>
            <select name="user_type" id="user_type" class="form-control aiz-selectpicker">
              <option value="client">{{ translate('Client') }}</option>
              <option value="freelancer">{{ translate('Freelancer') }}</option>
            </select>
          </div>

          <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">{{ translate('Proceed') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@endsection -->

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