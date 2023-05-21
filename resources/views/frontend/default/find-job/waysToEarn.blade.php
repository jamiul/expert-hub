<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">

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
  <div class="mx-3 rounded-md my-2 " style="background: #F2F7F2;">
    <div class="row py-2">
      <div class="col-lg-6 mt-4 px-5 review-banner-main">
        <h3 class=" text-success fre-review-banner-title">Do the work you love, your way</h3>
        <h6 class="fre-review-banner-text">Build rewarding relationships in the world’s Work Marketplace. Your home for
          the
          work you want.
        </h6>
        <button class="  text-white fs-16 btn btn-primary  px-3 py-2">Sign up</button>
        <div class="border-bottom mt-5"></div>
        <h6 class="my-3 " style="">Trusted By</h6>
        <div class="col-12">
          <div class="row">

            <div class="mr-5">
              <img class=" " src="{{my_asset('Microsoft.svg')}}" alt="">
            </div>
            <div class="mr-5">
              <img class=" " src="{{my_asset('Airbnb.svg')}}" alt="">
            </div>
            <div class="mr-5">
              <img class="" src="{{my_asset('automatic.svg')}}" alt="">
            </div>
            <div class="mr-5">
              <img class=" " src="{{my_asset('Bissell.svg')}}" alt="">
            </div>
            <div class="">
              <img class=" " src="{{my_asset('NASDAQ.svg')}}" alt="">
            </div>

          </div>

        </div>
      </div>
      <div class="col-lg-6  py-2  px-5">
        <img src=" {{url('/public/assets/findJob/waystoEarn .png')}}" alt="Image" class=" w-100 rounded-2 h-75" />
      </div>
    </div>
  </div>



  <div class="  container">
    <!-- navbar -->
    <div class="container">
      <h2 class="my-5 fs-25 fw-600">Explore the different ways to earn</h2>
      <ul class="nav nav-tabs mt-3 " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22 active text-decoration-underline" id="home-tab" data-toggle="tab"
            data-target="#home" role="tab" aria-controls="home" aria-selected="true">Talent Marketplace™</h5>
        </li>
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22" id="profile-tab" data-toggle="tab" data-target="#profile" role="tab"
            aria-controls="profile" aria-selected="false">Project Catalog™</h5>
        </li>
        <li class="nav-item" role="presentation">
          <h5 class="nav-link fs-22" id="contact-tab" data-toggle="tab" data-target="#contact" role="tab"
            aria-controls="contact" aria-selected="false">Talent Scout™</h5>
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
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-1.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">1. Create a project
                </h5>
                <h6 class="text-center fs-16"> Create a unique project that showcases your expertise.</h6>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container mb-5">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-2.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">2. Project is reviewed</h5>
                <h6 class="text-center fs-16">We'll let you know if you need to make any changes before it's visible to
                  clients.
                </h6>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-3.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">3. Get an order</h5>
                <h6 class="text-center fs-16">Your timeline starts once the client provides the info you need.</h6>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-4.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">4. Get contract</h5>
                <h6 class="text-center fs-16">If the client likes your proposal they’ll send you a contract to begin
                  working.</h6>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-5.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">5. Complete the work</h5>
                <h6 class="text-center fs-16">Check steps off as you finish and work with your client if you have
                  questions.</h6>

              </div>
            </div>
          </div>
          <div class="col-sm-4 container">
            <div class="">
              <div class="">
                <div class="d-flex justify-items-center">
                  <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-6.png')}}" alt="Image"
                    style="width:80px; align-items:center;" />
                </div>
                <h5 class="text-center">6. Get paid securely</h5>
                <h6 class="text-center fs-16">Once the client approves your work, you'll get paid and they can leave you
                  feedback.
                </h6>
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
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-1.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">1. Create a project
                  </h5>
                  <h6 class="text-center fs-16"> Create a unique project that showcases your expertise.</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 container mb-5">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-2.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">2. Project is reviewed</h5>
                  <h6 class="text-center fs-16">We'll let you know if you need to make any changes before it's visible
                    to
                    clients.
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-3.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">3. Get an order</h5>
                  <h6 class="text-center fs-16">Your timeline starts once the client provides the info you need.</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-4.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">4. Complete the work</h5>
                  <h6 class="text-center fs-16">If the client likes your proposal they’ll send you a contract to begin
                    working.</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-4 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/catalog-5.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">5. Get paid securely</h5>
                  <h6 class="text-center fs-16">Check steps off as you finish and work with your client if you have
                    questions.</h6>

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
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-1.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">1. Apply for Talent Scout™
                  </h5>
                  <h6 class="text-center fs-16"> Create a profile with relevant portfolio links to see if you qualify.
                  </h6>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container mb-5">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-2.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">2. Application is reviewed</h5>
                  <h6 class="text-center fs-16">If we think you’re a fit we’ll move you into our Talent Scout interview
                    process.
                  </h6>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-3.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">3. Complete Assessments</h5>
                  <h6 class="text-center fs-16">Complete a series of coding tests and an interview with a specialized
                    recruiter.</h6>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-4.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">4. Recruiters find clients</h5>
                  <h6 class="text-center fs-16">Our specialized recruiters start matching you to fulfilling work!</h6>

                </div>
              </div>
            </div>
            <div class="col-sm-3 container">
              <div class="">
                <div class="">
                  <div class="d-flex justify-items-center">
                    <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/talent-5.png')}}" alt="Image"
                      style="width:80px; align-items:center;" />
                  </div>
                  <h5 class="text-center">5. Connect with client</h5>
                  <h6 class="text-center fs-16">Develop lasting relationships with leaders who respect your time and
                    expertise.
                  </h6>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- section-2 -->

    <div class=" container mt-5 ">
      <h2 class="mt-5 mb-3 fs-25 fw-600">Our award-winning platform</h2>
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
          <button type="button" class=" mt-3 text-white p-2 btn fs-16 px-4" style=" background-color:#275846;">Create
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
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image"
                      style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>

                  <p class="h5 mb-2">Rating of clients by professionals</p>

                </div>
                <div class=" border-top border-success text-lg ">
                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image"
                      style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>
                  <p class="h5 mb-2">#1 freelance platform</p>
                </div>

              </div>
              <div class="col-lg-6 ">
                <div class=" border-top border-success text-lg ">
                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image"
                      style="width:20px;" />
                    <p class="text-center m-0 h4 ">4.9/5</p>
                  </div>

                  <p class="h5 mb-2">signed contracts every week</p>

                </div>
                <div class=" border-top border-success text-lg ">

                  <div class="d-flex align-items-center gap-5 mt-2">
                    <img class="text-center h4" src="{{url('/public/assets/findJob/star.png')}}" alt="Image"
                      style="width:20px;" />
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




    <!-- Suitable work -->

    <div class="container" style="margin-top:100px;">
      <h2 class="mt-3 mb-5 fs-38 fw-700" style="font-family:sans-serif;">The work you want, all in one place</h2>
      <div class="row ">

        <div class="col-sm-4">
          <div class=" card rounded-1 bg-light" style="height:320px;">
            <div class=" card-body">

              <div class="card-body  " style="background-color:#91E6B3;"><img class="mx-auto d-block rounded-2"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <p class="card-title fw-600 text-dark mt-3 fs-20">Create your free profile</p>
              <p class="card-text fs-16">Highlight your skills and experience, show your portfolio, and set your ideal
                pay
                rate.</p>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class=" card bg-light rounded-1" style="height:320px;">
            <div class=" card-body">
              <div class="card-body  " style="background-color:#91E6B3;"><img class="mx-auto rounded-2 d-block"
                  src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title fw-600 text-dark mt-3 fs-20">Work the way you want</h5>
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
              <div class="card-body " style="background-color:#91E6B3;"><img class="mx-auto rounded-1 d-block"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title fw-600 text-dark mt-3 fs-20">Get paid securely</h5>
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
      <h3 class=" fw-700 mb-5 fs-38">Work that’s waiting for you</h3>
      <div class="my-4">
        <div class="row">
          <div class="col-sm-6">
            <div class="card rounded bg-light">
              <div class="card-body d-flex items-center">
                <div>
                  <img class="mr-2" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                    style="width:70px;  align-items:center;" />
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
                <img class="" src=" {{url('/public/assets/findJob/02.png')}}" alt="Image"
                  style="width:80px; align-items:center; " />
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
                <img class="" src=" {{url('/public/assets/findJob/03.png')}}" alt="Image"
                  style="width:80px; align-items:center; " />
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
                <img class="" src=" {{url('/public/assets/findJob/05.png')}}" alt="Image"
                  style="width:80px; align-items:center; " />
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
                <img class="" src=" {{url('/public/assets/findJob/04.png')}}" alt="Image"
                  style="width:80px; align-items:center; " />
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
                <img class="" src=" {{url('/public/assets/findJob/06.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
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
        <button type="button" class="mt-3 text-white p-2 btn fs-16 px-4" style=" background-color:#275846;">Create
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

              <h2 class="fw-700 text-dark fs-38">Our support</h2>

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
    <div class="container mb-5 rounded-1" style="background-color:#055846; margin-top:100px; padding-bottom:50px; ">
      <div class=" d-flex p-3">
        <div class=" bg-light  rounded-1">
          <img src="{{url('/public/assets/findJob/image-7.png')}}" alt="Image" class=" w-full" />
        </div>
        <div>
          <h3 class=" ml-5 text-white fs-38">Ready to start</h3>
        </div>

      </div>
      <div>
        <p class="d-flex   justify-content-end ">
          <span class="border btn text-white  my-2 px-4">Create your profile</span>
        </p>
      </div>

    </div>
    @endsection
</body>


</html>