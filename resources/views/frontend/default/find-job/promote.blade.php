<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body class="bg-white">
  @extends('frontend.default.layouts.app')

  @section('content')
  <div class="   mx-5 my-5" style="background-color:#50A907;">
    <div class="d-flex justify-content-between p-5">
      <div class="w-50 text-white">
        <h1 class="">Learn how to promote yourself</>
          <h5 class="my-3">Stand out from the competition and get more control over your chances of winning the work you
            want.
          </h5>
          <button class="btn btn rounded-pill bg-white mt-3">Find work</button>
      </div>
      <div class=" rounded">
        <img src="{{url('/public/assets/findJob/promote.jpg')}}" alt="Image" "
              class=" w-100" style=" height:300px;" />
      </div>
    </div>


  </div>

  <section id="about" class="about">
    <div class="container mt-5">
      <div class="d-flex justify-content-between">
        <div class="">
          <div class="w-75">
            <h1 class="" style="color:#50A907;">Use Connects to give you the edge when you need it</h1>
            <h6>
              Spend Connects like points on Upwork to show potential clients that you’re serious about your business and
              invested in building a working relationship with them. Connects are an investment toward your freelance
              career. Win more work, increase your earning power and build longer-lasting relationships with clients who
              know you best.
            </h6>
            <button class="btn btn rounded-pill mt-5" style="background-color:#50A907;"><span class="text-white">Learn
                more</span></button>
          </div>
        </div>

        <div>
          <img src="{{url('/public/assets/findJob/consultant-2.jpg')}}" alt="Image" "
              class=" w-100 h-100 pb-5 img-fluid" />
        </div>


      </div>

    </div>
  </section>

  <!-- Suitable work -->

  <div class="jumbotron mb-5">
    <div class="container">
      <h2 class="my-3">Explore ways to take more control and win more work</h2>
      <div class="row ">

        <div class="col-lg-6 col-sm-12">
          <div class="card rounded bg-light h-100">
            <div class="card-body">

              <div class="card-body  " style="background-color:#91E6B3"><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3">Availability badge</h5>
              <p class="card-text">Let clients know you’re ready to work and available now with a bold, blue badge on
                your profile, and in search results. Help clients find you faster.</p>
              <button class="btn btn rounded-pill border border-secondary">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="card bg-light h-100">
            <div class="card-body">
              <div class="card-body " style="background-color:#91E6B3"><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:80px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3">Boost your proposals</h5>
              <p class="card-text">Increase your chances of getting the jobs you’re really interested in by bidding to
                boost your proposal. If your bid wins, you’ll land in the client’s top three slots with an
                eye-catching
                blue lightning bolt</p>
              <button class="btn btn rounded-pill border border-secondary">Learn more</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Last section -->
  <div class="container p-5 rounded my-5" style="background-color:#2E58C3;">
    <div class="d-flex justify-content-between p-2">

      <div class="w-50 text-white">
        <h1 class="">See where you excel</h1>
        <h5 class="my-2">By using My Stats, you can see where you stack up against the competition and where you can
          improve
          with
          the right tools and information.</h5>
        <button class=" border-rounded  rounded-pill my-2 p-2">
          <h6>Checkout My stats</h6>
        </button>
      </div>
      <div class=" rounded">
        <img src="{{url('/public/assets/findJob/stats.png')}}" alt="Image" "
              class=" "/>
        </div>

      </div>



      @endsection
</body>

</html>