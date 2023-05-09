<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
  .jumbotron {
    height: 100%;
    width: 100%;
  }

  .container {
    width: 1025px;
  }

  .jumbotron .container {
    max-width: 100%;
  }
</style>


<body class="bg-white">
  @extends('frontend.default.layouts.app')

  @section('content')
  <div class="   mx-5 my-5 rounded-1" style="background-color:#50A907; ">
    <div class="d-flex justify-content-between p-2">
      <div class="row justify-content-between px-4 text-white p-3" style="width:32%;">
        <div>
          <h1 class="display-4 fw-400" style="font-family:sans-serif; letter-spacing: -.032em; line-height: 1em;">Do the
            work you love,
            your
            way
          </h1>
          <p class="fs-18 my-3">Build rewarding relationships in the world’s Work Marketplace. Your home for the work
            you
            want.
          </p>

          <button class="btn btn rounded-pill bg-white mt-3 lg-mb-5 fs-16 "><a class="text-dark px-1" href="{{route('home')}}">Sign
              Up</a>
          </button>
        </div>

        <h6 class="border-top " style="margin-top:80px;"> Used by</h6>
        <div ">
          <img src=" {{url('/public/assets/findJob/companies.png')}}" alt="Image" />
      </div>
    </div>
    <div class=" rounded-1" style="width:50%; ">
      <img src=" {{url('/public/assets/findJob/waystoEarn.png')}}" alt="Image" "
              class=" w-100 p-2" style=" height:500px; " />
    </div>
  </div>


  </div>


  <div class="  container">

    <!-- navbar -->

    <div class="container">
      <h2 class="my-5 fs-25 fw-600">Explore the different ways to earn</h2>
      <ul class="nav nav-tabs mt-3 " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22 active text-decoration-underline" id="home-tab" data-toggle="tab" data-target="#home" role="tab" aria-controls="home" aria-selected="true">Talent Marketplace™</h5>
        </li>
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22" id="profile-tab" data-toggle="tab" data-target="#profile" role="tab" aria-controls="profile" aria-selected="false">Project Catalog™</h5>
        </li>
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22" id="contact-tab" data-toggle="tab" data-target="#contact" role="tab" aria-controls="contact" aria-selected="false">Talent Scout™</h5>
        </li>
      </ul>
    </div>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row  container mx-5 my-5">
          <div class=" col-sm-4 ">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-1.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center fs-16">1. Create a project
                </h5>
                <p class="text-center "> Create a unique project that showcases your expertise.</p>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container mb-5">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-2.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">2. Project is reviewed</h5>
                <p class="text-center">We'll let you know if you need to make any changes before it's visible to
                  clients.
                </p>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-3.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">3. Get an order</h5>
                <p class="text-center">Your timeline starts once the client provides the info you need.</p>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-4.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">4. Get contract</h5>
                <p class="text-center">If the client likes your proposal they’ll send you a contract to begin
                  working.</p>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-5.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">5. Complete the work</h5>
                <p class="text-center">Check steps off as you finish and work with your client if you have
                  questions.</p>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-6.png')}}" alt="Image" style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">6. Get paid securely</h5>
                <p class="text-center">Once the client approves your work, you'll get paid and they can leave you
                  feedback.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>




      <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row  container mx-5 my-5">
            <div class=" col-sm-4 ">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-1.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">1. Create a project
                  </h5>
                  <p class="text-center"> Create a unique project that showcases your expertise.</p>

                </div>
              </div>
            </div>
            <div class="col-sm-4 container mb-5">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-2.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">2. Project is reviewed</h5>
                  <p class="text-center">We'll let you know if you need to make any changes before it's visible to
                    clients.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-3.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">3. Get an order</h5>
                  <p class="text-center">Your timeline starts once the client provides the info you need.</p>

                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-4.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">4. Complete the work</h5>
                  <p class="text-center">If the client likes your proposal they’ll send you a contract to begin
                    working.</p>

                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-5.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">5. Get paid securely</h5>
                  <p class="text-center">Check steps off as you finish and work with your client if you have
                    questions.</p>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row  container mx-5 my-5">
            <div class=" col-sm-4 ">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-1.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">1. Apply for Talent Scout™
                  </h5>
                  <p class="text-center"> Create a profile with relevant portfolio links to see if you qualify.</p>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container mb-5">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-2.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">2. Application is reviewed</h5>
                  <p class="text-center">If we think you’re a fit we’ll move you into our Talent Scout interview
                    process.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-3.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">3. Complete Assessments</h5>
                  <p class="text-center">Complete a series of coding tests and an interview with a specialized
                    recruiter.</p>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-4.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">4. Recruiters find clients</h5>
                  <p class="text-center">Our specialized recruiters start matching you to fulfilling work!</p>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-5.png')}}" alt="Image" style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">5. Connect with client</h5>
                  <p class="text-center">Develop lasting relationships with leaders who respect your time and
                    expertise.
                  </p>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>













    <!-- section-2 -->

    <div class=" container mt-5 ">

      <h2 class="my-3 fs-25 fw-600">Our award-winning platform</h2>
      <div class="row g-5 mt-4 mb-5">
        <div class="col-lg-5 col-sm-12 ">
          <div class="">
            <div class="d-flex ">
              <div>
                <img class="mr-2" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
              </div>
              <div>
                <p class="fs-16 "><span class="fw-700"> Take control. </span> Find work that hits your financial goals
                  faster
                  with
                  ambitious startups
                  and well-known brands.</p>
              </div>
              <div>
              </div>
            </div>
            <div class="d-flex align-items-center my-2">
              <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
              <p class="h6 m-2">
                <span class="fw-700 mt-2">Create lasting relationships.</span>
                Build a predictable pipeline of projects, big and small, through strong
                connections.
              </p>



            </div>
            <div class="d-flex align-items-center mb-2">
              <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
              <p class="h6 m-2 "> <span class="fw-700">Work and earn your way.</span> Search for jobs or have clients
                come to you. The
                opportunities
                are endless.</p>
            </div>
            <div class="d-flex align-items-center ">
              <img class="" src=" {{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
              <p class="h6 m-2 "><span class="fw-700">Connect & engage.</span> Learn, share information, and build
                your
                community
                with
                like-minded
                professionals.</p>
            </div>


          </div>
          <button type="button" class=" rounded-pill mt-3 text-white p-2 btn fs-16 px-4" style=" background-color:#337204;">Create
            your
            profile</button>
        </div>

        <div class="col-lg-1"></div>
        <div class=" col-lg-5 col-sm-12 ">
          <div class="">
            <div class=" row">
              <div class="col-lg-6 ">
                <div class=" border-top border-success text-lg ">
                  <div class="d-flex align-items-center g-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image" style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>

                  <p class="h5 mb-2">Rating of clients by professionals</p>

                </div>
                <div class=" border-top border-success text-lg ">
                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image" style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>
                  <p class="h5 mb-2">#1 freelance platform</p>
                </div>

              </div>
              <div class="col-lg-6 ">
                <div class=" border-top border-success text-lg ">
                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image" style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>

                  <p class="h5 mb-2">signed contracts every week</p>

                </div>
                <div class=" border-top border-success text-lg ">

                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image" style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>

                  <p class="h5 mb-2">Consultant earned on scholarships Australia in 2023</p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container marketing  " style="margin-top:100px;">
      <h2 class="fs-25 fw-600 fw-sans-serif muted">Like-minded professionals</h2>

      <div id="demo" class="rounded-1 carousel slide jumbotron my-4" data-ride="carousel">


        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>


        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex">
              <div class="col-md-5 ">
                <img src="{{url('/public/assets/findJob/consultant-1.jpg')}}" alt="Image" "
              class=" h-100 img-fluid rounded-1" />
              </div>
              <div class="col-md-7 d-flex align-items-center justify-content-center ">

                <div>
                  <h4 class="fs-26" style="color: #001e00;
">Kolya T.</h4>
                  <h6 class="fs-26" style="color: #001e00;">Owner of Wordpress Lab Agency, USA. Certified Wordpress
                    expert who built his own
                    agency
                    on
                    Upwork.
                    </>
                    <div class=" d-flex mr-5">
                      <button type=" button" class="btn  rounded-pill border border-1 mt-3" style="background-color:white;">$55/hr</button>
                      <div class="d-flex align-items-center ml-5">
                        <img class="text-center text-success mx-1" src="{{url('/public/assets/findJob/emblem.png')}}" alt="Image" style="width:15px;
                    " />
                        <p class="m-0">TOP RATED PLUS</p>

                      </div>
                    </div>

                    <h6 class="lead my-3">"Scholarships Australia is more than a platform. It is a lifestyle. It has
                      helped
                      me
                      grow my agency
                      by
                      three digits and generates more leads than any other channel."</h6>
                </div>
              </div>

            </div>

          </div>
          <div class=" carousel-item">
            <div class="d-flex">
              <div class="col-md-5 ">
                <img src="{{url('/public/assets/findJob/consultant-2.jpg')}}" alt="Image" "
              class=" h-100 img-fluid rounded-1" />
              </div>
              <div class=" col-md-7 d-flex align-items-center justify-content-center ">

                <div>
                  <h5 class="fs-26" style="color: #001e00;">Ambika M.</h5>
                  <h6 class="fs-26" style="color: #001e00;">Market Researcher, USA. Masters Degree and expert on Market
                    Research Online Communities.
                  </h6>
                  <div class=" d-flex mr-5">
                    <button type=" button" class="btn  rounded-pill border border-1 mt-3" style="background-color:white;">$60/hr</button>
                    <div class="d-flex align-items-center ml-5">
                      <img class="text-center text-success mx-1" src="{{url('/public/assets/findJob/emblem.png')}}" alt="Image" style="width:15px;
                    " />
                      <p class="m-0">TOP RATED PLUS</p>

                    </div>
                  </div>

                  <h6 class="lead my-3">"I turned to Upwork as a way to gain more control of my career. I love being
                    able to choose everything from who I work with to how I spend my day."</h6>
                </div>
              </div>

            </div>
          </div>
          <div class=" carousel-item">
            <div class="d-flex">
              <div class="col-md-5 ">
                <img src="{{url('/public/assets/findJob/consultant-2.jpg')}}" alt="Image" "
              class=" h-100 img-fluid rounded-1" />
              </div>
              <div class="col-md-7 d-flex align-items-center justify-content-center ">

                <div>
                  <h5 class="fs-26" style="color: #001e00;">Alexander N.</h5>
                  <h6 class="fs-26" style="color: #001e00;">Expert Software Engineer, Cyprus. Over $1M earned on Upwork
                    to date.
                  </h6>
                  <div class=" d-flex mr-5">
                    <button type=" button" class="btn  rounded-pill border border-1 mt-3" style="background-color:white;">$50/hr</button>
                    <div class="d-flex align-items-center ml-5">
                      <img class="text-center text-success mx-1 " src="{{url('/public/assets/findJob/emblem.png')}}" alt="Image" style="width:15px;
                    " />
                      <p class="m-0">TOP RATED PLUS</p>

                    </div>
                  </div>

                  <h6 class="lead my-3">"The success I've achieved simply would not have been possible without
                    Upwork."
                  </h6>
                </div>
              </div>

            </div>
          </div>

        </div>


        <!-- Left and right controls -->
        <a class=" carousel-control-prev " style="margin-right:100px;" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon rounded-circle" style="background-color:#337204; width:20px;"></span>
        </a>
        <a class="carousel-control-next" style="margin-left:100px;" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon rounded-circle " style="background-color:#337204;  "></span>
        </a>

      </div>



    </div>


    <!-- Suitable work -->

    <div class="container" style="margin-top:100px;">
      <h2 class="my-3 fs-38 fw-500" style="font-family:sans-serif;">The work you want, all in one place</h2>
      <div class="row ">

        <div class="col-sm-4">
          <div class=" card rounded-1 bg-light" style="height:320px;">
            <div class=" card-body">

              <div class="card-body  " style="background-color:#91E6B3;"><img class="mx-auto d-block rounded-2" src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <p class="card-title mt-3 fs-18">Create your free profile</p>
              <p class="card-text fs-16">Highlight your skills and experience, show your portfolio, and set your ideal
                pay
                rate.</p>

            </div>
          </div>
        </div>
        <div class="col-sm-4" ">
          <div class=" card bg-light rounded-1" style="height:320px;">
          <div class=" card-body">
            <div class="card-body  " style="background-color:#91E6B3;"><img class="mx-auto rounded-2 d-block" src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
            <h5 class="card-title mt-3 fs-18">Work the way you want</h5>
            <p class="card-text fs-16">Apply for jobs, create easy-to-buy projects, or access exclusive
              opportunities
              that
              come to you.</p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="card bg-light rounded-1" style="height:320px;">
          <div class="card-body">
            <div class="card-body " style="background-color:#91E6B3;"><img class="mx-auto rounded-1 d-block" src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
            <h5 class="card-title mt-3 fs-18">Get paid securely</h5>
            <p class="card-text fs-16">From contract to payment, we help you work safely and get paid securely.</p>

          </div>
        </div>
      </div>
    </div>

    <p class="mt-3 fs-16">Want to know more?
      <span class="fs-16 fw-700" style="color:#534D9D;">
        Here’s how it works
        <img class="" src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:12px; " />


      </span>
    </p>
  </div>


  <!-- Category types   -->

  <div class=" container" style="margin-top:100px;">
    <h3 class="mt-3 fs-38">Work that’s waiting for you</h3>
    <div class="my-4">
      <div class="row">
        <div class="col-sm-6">
          <div class="card rounded bg-light">
            <div class="card-body d-flex items-center">
              <div>
                <img class="" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image" style="width:70px;  align-items:center;" />
              </div>
              <div>
                <h5 class="card-title">Development & IT </h5>
                <h6 class="card-text">

                  20K+ jobs posted weekly</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-light">

            <div class="card-body d-flex">
              <img class="" src=" {{url('/public/assets/findJob/02.png')}}" alt="Image" style="width:80px; align-items:center; " />
              <div>
                <h5 class="card-title">Sales Icon
                  Sales & Marketing
                </h5>
                <h6 class="card-text">10K+ jobs posted weekly</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-light">
            <div class="card-body d-flex">
              <img class="" src=" {{url('/public/assets/findJob/03.png')}}" alt="Image" style="width:80px; align-items:center; " />
              <div>
                <h5 class="card-title">Writing Icon
                  Writing & Translation
                </h5>
                <h6 class="card-text">10K+ jobs posted weeklySpecial title treatment</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-light">
            <div class="card-body d-flex">
              <img class="" src=" {{url('/public/assets/findJob/05.png')}}" alt="Image" style="width:80px; align-items:center; " />
              <div>
                <h5 class="card-title">Customer Service Icon
                  Admin & Customer Support
                </h5>
                <h6 class="card-text"> 5K+ jobs posted weekly</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-light">
            <div class="card-body d-flex">
              <img class="" src=" {{url('/public/assets/findJob/04.png')}}" alt="Image" style="width:80px; align-items:center; " />
              <div>
                <h5 class="card-title">Customer Service Icon
                  Admin & Customer Support
                </h5>
                <h6 class="card-text"> 5K+ jobs posted weekly</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-light">
            <div class="card-body d-flex">
              <img class="" src=" {{url('/public/assets/findJob/06.png')}}" alt="Image" style="width:80px; align-items:center;" />
              <div>
                <h5 class="card-title"> Finance & Accounting
                </h5>
                <h6 class="card-text">2K+ jobs posted weekly
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class=" text-primary" style="text-decoration:underline;"><span class="fs-16" style="color:#534D9D;">Browse
          more</span>
        <img class="" src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:12px; " />
      </p>
      <button type="button" class=" rounded-pill mt-3 text-white p-2 btn fs-16 px-4" style=" background-color:#337204;">Create
        your
        profile</button>

    </div>


  </div>

  <!-- support  -->
  <div class="row container mx-2" style=" margin-top:100px;">

    <div class="row">
      <div class="col-sm-4 container">
        <div class="">
          <div class="d-flex align-items-center mb-2 g-2">

            <h2>Our support</h2>

          </div>
        </div>
      </div>
      <div class="col-sm-8 ">
        <div class="container ">
          <div class="row">
            <div class="col-lg-6">

              <div class=" border-bottom border-secondary">
                <h5 class="m-0 h4 mb-2">Client reviews
                </h5>
              </div>

              <p class="h6 my-2 ">Read client details and feedback from professionals like
                you.</p>


              <div class="  text-lg mt-5">

                <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                  <h5 class="text-center m-0 h4 mb-2 ">Protected payments</h5>
                </div>

                <h6 class="h6 my-2">Get paid the way you want, secure and fully protected.</h6>

              </div>
              <div class="text-lg mt-5">

                <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                  <h5 class="text-center m-0 h4 mb-2 ">Answers to questions</h5>
                </div>

                <p class="h6 my-2">Everything you need in our help center, resources, and community.</p>

              </div>

            </div>
            <div class="col-lg-6">
              <div class="  text-lg">

                <div class="d-flex align-items-center gap-5 border-bottom border-secondary">

                  <h5 class="text-center m-0 h4 mb-2  ">Trusted jobs</h5>
                </div>

                <p class="h6 my-2">We use various tools to detect and reduce fraud with a dedicated team
                  24/7.</p>

              </div>
              <div class="  text-lg mt-5">

                <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                  <h5 class="text-center m-0 h4 mb-2 ">Help with disputes
                  </h5>
                </div>

                <p class="h6 my-2">We’ll step in and help you resolve a tricky situation.</p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>



  </div>


  <!-- Last section -->
  <div class="container  rounded-1" style="background-color:#2E58C3; margin-top:100px; ">
    <div class=" d-flex p-2">
      <div class=" bg-light  rounded-1">
        <img src="{{url('/public/assets/findJob/image-7.png')}}" alt="Image" "
              class=" w-full" />
      </div>
      <div>
        <h3 class=" ml-5 text-white fs-30">Ready to start</h3>
      </div>

    </div>
    <div>
      <p class="d-flex   justify-content-end ">
        <span class="border-rounded btn text-white rounded-pill my-2 px-4">Create your profile</span>
      </p>
    </div>

  </div>












  @endsection
</body>

</html>