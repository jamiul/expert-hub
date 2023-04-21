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
  <img src="{{url('/public/assets/banner-1.png')}}" alt="Image" style="width:100%; height:80vh;" class="img-fluid" />


  <div class="jumbotron mx-0 container-fluid">
    <h2 class="mx-5 container">Explore the different ways to earn</h2>

    <nav class="navbar  navbar-expand-lg mx-5 text-center border-b border-success">

      <div class="d-flex justify-content-around">
        <ul class="navbar-nav  mx-5">
          <li class="nav-item active">
            <h5> <a class="nav-link text-muted" href="#">Talent Marketplace™ ></a></h5>
          </li>
          <li class="nav-item">

            <h5><a class="nav-link text-muted" href="#">Project Catalog™</a></h5>
          </li>
          <li class="nav-item">
            <h5> <a class="nav-link text-muted" href="#">Talent Scout™</a></h5>
          </li>

        </ul>
      </div>
    </nav>

    <!-- explore part  -->
    <div class="row jumbotron container mx-5">
      <div class=" col-sm-4 ">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-1.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">1. Create a project
            </h5>
            <p class="text-center"> Create a unique project that showcases your expertise.</p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 container-fluid mb-5">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-2.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">2. Project is reviewed</h5>
            <p class="text-center">We'll let you know if you need to make any changes before it's visible to clients.
            </p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 container-fluid">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-3.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">3. Get an order</h5>
            <p class="text-center">Your timeline starts once the client provides the info you need.</p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 container-fluid">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-4.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">4. Get contract</h5>
            <p class="text-center">If the client likes your proposal they’ll send you a contract to begin working.</p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 container-fluid">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-5.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">5. Complete the work</h5>
            <p class="text-center">Check steps off as you finish and work with your client if you have questions.</p>

          </div>
        </div>
      </div>
      <div class="col-sm-4 container-fluid">
        <div class="">
          <div class="">
            <div class="d-flex justify-items-center">
              <img class="mx-auto d-block" src=" {{url('/public/assets/findJob/image-6.png')}}" alt="Image"
                style="width:80px; align-items:center;" />
            </div>
            <h5 class="text-center">6. Get paid securely</h5>
            <p class="text-center">Once the client approves your work, you'll get paid and they can leave you feedback.
            </p>

          </div>
        </div>
      </div>
    </div>


    <!-- section-2 -->

    <div class="row jumbotron container  mx-5">

      <h2 class="my-3">Our award-winning platform</h2>
      <div class="row">
        <div class="col-sm-6 container-fluid">
          <div class="">
            <div class="d-flex align-items-center justify-content-center mb-2 g-2">
              <img class="text-center text-success" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                style="width:15px;" />
              <h6 class="text-center  m-0">

                Take control. Find work that hits your financial goals faster with ambitious startups and well-known
                brands.</h6>

            </div>
            <div class="d-flex align-items-center mb-2">
              <img class="text-center" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                style="width:15px;" />
              <p class="text-center m-0">

                Create lasting relationships. Build a predictable pipeline of projects, big and small, through strong
                connections.</p>


              </p>
            </div>
            <div class="d-flex align-items-center mb-2">
              <img class="text-center" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                style="width:15px;" />
              <p class="text-center m-0 ">Work and earn your way. Search for jobs or have clients come to you. The
                opportunities are endless.</p>
            </div>
            <div class="d-flex align-items-center ">
              <img class="text-center" src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                style="width:15px;" />
              <p class="text-center m-0 ">Connect & engage. Learn, share information, and build your community with
                like-minded professionals.</p>
            </div>


          </div>
          <button type="button" class="btn btn-primary mt-3">Create your profile</button>
        </div>

        <div class="col-sm-6 ">
          <div class="container ">
            <div class="row">
              <div class="col-lg-6">
                <div class=" border-top border-success text-lg ">

                  <div class="d-flex align-items-center gap-5 mt-2">
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
              <div class="col-lg-6">
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



    <main role="main" class="mt-5">

      <div class="container marketing mx-5">
        <h2 class="mx-2 my-3">Like-minded professionals</h2>
        <div class="row featurette  container-fluid">


          <div class="col-md-5 ">
            <img src="{{url('/public/assets/findJob/consultant-1.jpg')}}" alt="Image" "
              class=" w- h-100 img-fluid" />
          </div>
          <div class="col-md-7 d-flex align-items-center justify-content-center ">

            <div>
              <h4>Kolya T.</h4>
              <h5>Owner of Wordpress Lab Agency, USA. Certified Wordpress expert who built his own agency on Upwork.
              </h5>
              <div class="d-flex mr-5">
                <button type=" button" class="btn btn-light border border-1 mt-3">$50/hr</button>
                <div class="d-flex align-items-center ml-5">
                  <img class="text-center text-success " src="{{url('/public/assets/findJob/check.png')}}" alt="Image"
                    style="width:15px;
                    " />
                  <p class="m-0">TOP RATED PLUS</p>

                </div>
              </div>

              <p class="lead my-3">"Scholarships Australia is more than a platform. It is a lifestyle. It has helped me
                grow my agency
                by
                three digits and generates more leads than any other channel."</p>
            </div>
          </div>

        </div>




      </div><!-- /.container -->

    </main>
    <!-- Suitable work -->

    <div class="jumbotron container  mx-3">
      <h2>The work you want, all in one place</h2>
      <div class="row ">

        <div class="col-sm-4">
          <div class="card rounded bg-secondary">
            <div class="card-body">

              <div class="card-body bg-primary "><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title">Create your free profile</h5>
              <p class="card-text">Highlight your skills and experience, show your portfolio, and set your ideal pay
                rate.</p>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-secondary">
            <div class="card-body">
              <div class="card-body bg-primary "><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title">Work the way you want</h5>
              <p class="card-text">Apply for jobs, create easy-to-buy projects, or access exclusive opportunities
                that
                come to you.</p>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-secondary">
            <div class="card-body">
              <div class="card-body bg-primary "><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title">Get paid securely</h5>
              <p class="card-text">From contract to payment, we help you work safely and get paid securely.</p>

            </div>
          </div>
        </div>
      </div>

      <h5>Want to know more?
        <span class="text-info">Here’s how it works
          Right Arrow</span>
        </>
    </div>


    <!-- Category types   -->

    <div class="jumbotron container  mx-3">
      <h3 class="my-3">Work that’s waiting for you</h3>
      <div class="">
        <div class="row">
          <div class="col-sm-6">
            <div class="card rounded bg-secondary">
              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/01.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title">Development & IT </h5>
                  <p class="card-text">

                    20K+ jobs posted weekly</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-secondary">

              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/02.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title">Sales Icon
                    Sales & Marketing
                  </h5>
                  <p class="card-text">10K+ jobs posted weekly</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-secondary">
              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/03.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title">Writing Icon
                    Writing & Translation
                  </h5>
                  <p class="card-text">10K+ jobs posted weeklySpecial title treatment</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-secondary">
              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/05.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title">Customer Service Icon
                    Admin & Customer Support
                  </h5>
                  <p class="card-text"> 5K+ jobs posted weekly</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-secondary">
              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/04.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title">Customer Service Icon
                    Admin & Customer Support
                  </h5>
                  <p class="card-text"> 5K+ jobs posted weekly</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-secondary">
              <div class="card-body d-flex">
                <img class="" src=" {{url('/public/assets/findJob/06.png')}}" alt="Image"
                  style="width:80px; align-items:center;" />
                <div>
                  <h5 class="card-title"> Finance & Accounting
                  </h5>
                  <p class="card-text">2K+ jobs posted weekly
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type=" button" class="btn btn-success mt-3 mx-auto d-block">Create your profile</button>

    </div>

    <!-- support  -->
    <div class="row jumbotron container  mx-5">

      <div class="row">
        <div class="col-sm-4 container-fluid">
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
                  <h5 class="m-0 h4 ">Client reviews
                  </h5>
                </div>

                <h6 class="h5 mb-2 ">Read client details and feedback from professionals like
                  you.</h6>


                <div class="  text-lg mt-5">

                  <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                    <h5 class="text-center m-0 h4  ">Protected payments</h5>
                  </div>

                  <h6 class="h5 mb-2">Get paid the way you want, secure and fully protected.</h6>

                </div>
                <div class="text-lg mt-5">

                  <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                    <h5 class="text-center m-0 h4 ">Answers to questions</h5>
                  </div>

                  <h6 class="h5 mb-2">Everything you need in our help center, resources, and community.</h6>

                </div>

              </div>
              <div class="col-lg-6">

                <div class=" border-bottom border-secondary">
                  <h5 class="m-0 h4 ">Client reviews
                  </h5>
                </div>

                <h6 class="h5 mb-2 ">Read client details and feedback from professionals like
                  you.</h6>


                <div class="  text-lg mt-5">

                  <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                    <h5 class="text-center m-0 h4  ">Trusted jobs</h5>
                  </div>

                  <h6 class="h5 mb-2">We use various tools to detect and reduce fraud with a dedicated team 24/7.</h6>

                </div>
                <div class="  text-lg mt-5">

                  <div class="d-flex align-items-center gap-5 mt-2 border-bottom border-secondary">

                    <h5 class="text-center m-0 h4 ">Help with disputes
                    </h5>
                  </div>

                  <h6 class="h5 mb-2">We’ll step in and help you resolve a tricky situation.</h6>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>



    </div>














    @endsection
</body>

</html>