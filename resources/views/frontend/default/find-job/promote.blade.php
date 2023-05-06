<!DOCTYPE html>
<html lang="en">

<body class="bg-white">
  @extends('frontend.default.layouts.app')

  @section('content')
  <div class="   mx-5 my-5 rounded-1" style="background-color:#50A907;">
    <div class="d-flex justify-content-between p-2">
      <div class="row justify-content-between px-4 text-white" style="width:40%;">
        <div>
          <h1 class="display-4" style="font-family:sans-serif; letter-spacing: -.032em;">Learn how to promote yourself
          </h1>
          <p class=" my-3 fs-18">Stand out from the competition and get more control over your chances of winning the
            work
            you want.
          </p>

          <button class="btn btn rounded-pill bg-white mt-3 lg-mb-5 fs-16 "><a class="text-dark px-1"
              href="{{route('home')}}">Find work</a>
          </button>
        </div>


      </div>
      <div class="" style="width:50%; ">
        <img src=" {{url('/public/assets/findJob/promote-1.jpg')}}" alt="Image" "
              class=" w-100 p-2 rounded-2" style=" height:450px;" />
      </div>
    </div>


  </div>
  <section id="about" class="about" style="margin-top:80px;">
    <div class="container ">
      <div class="d-flex justify-content-between">
        <div class="">
          <div class="" style=" width:60%;">
            <h1 style=" color:#50A907;"> Use Connects to give you the edge when you need it</h1>
            <h6>
              Spend Connects like points on Upwork to show potential clients that you’re serious about your business and
              invested in building a working relationship with them. Connects are an investment toward your freelance
              career. Win more work, increase your earning power and build longer-lasting relationships with clients who
              know you best.
            </h6>
            <button class=" btn btn rounded-pill mt-5 " style=" background-color:#50A907;"><span class="text-white"><a
                  class="text-white fs-16" href="{{route('sendProposal')}}">Learn
                  more</a> </span></button>
          </div>
        </div>
        <div>
          <img src="{{url('/public/assets/findJob/consultant-2.jpg')}}" alt="Image" "
              class=" w-100 h-100 img-fluid" />
        </div>


      </div>

    </div>
  </section>

  <!-- Suitable work -->

  <div class="jumbotron mb-5" style="margin-top:100px;">
    <div class="container">
      <h2 class="my-3" style="color:#50A907;">Explore ways to take more control and win more work</h2>
      <div class="row  ">

        <div class="col-lg-6 col-sm-12">
          <div class="card rounded-2 bg-white h-100">
            <div class="card-body">

              <div class="card-body rounded-2 " style="background-color:#91E6B3"><img class="mx-auto d-block "
                  src=" {{url('/public/assets/findJob/jobs-1.png')}}" alt="Image" style="width:120px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3 fs-30" style="color:#091F00;">Availability badge</h5>
              <p class="card-text fs-16">Let clients know you’re ready to work and available now with a bold, blue badge
                on
                your profile, and in search results. Help clients find you faster.</p>
              <p class="btn btn rounded-pill border border-secondary mt-2"><a class="text-dark"
                  href="{{route('badge')}}">Learn
                  more</a> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="card bg-white h-100 rounded-2">
            <div class="card-body">
              <div class="card-body  rounded-2" style="background-color:#91E6B3"><img class="mx-auto d-block"
                  src=" {{url('/public/assets/findJob/jobs-2.png')}}" alt="Image" style="width:120px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3 fs-30" style="color:#091F00;">Boost your proposals</h5>
              <p class="card-text fs-16">Increase your chances of getting the jobs you’re really interested in by
                bidding to
                boost your proposal. If your bid wins, you’ll land in the client’s top three slots with an
                eye-catching
                blue lightning bolt</p>
              <p class="btn btn rounded-pill border border-secondary mt-2"><a class="text-dark"
                  href="{{route('proposal')}}">Learn
                  more</a> </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Last section -->
  <div class="container p-2 rounded-2 my-5" style="background-color:#2E58C3;  margin-top:100px;">
    <div class=" d-flex justify-content-between p-2">

      <div class=" text-white" style="width:30%">
        <h2 class=" fs-38">See where you excel</h2>
        <h5 class="my-2 fs-16">By using My Stats, you can see where you stack up against the competition and where you
          can
          improve
          with
          the right tools and information.</h5>
        <p class="mt-2 border-rounded btn text-white rounded-pill p-2 px-3">
          Check out My stats
        </p>

      </div>
      <div class=" ">
        <img src="{{url('/public/assets/findJob/stats.png')}}" alt="Image" "
              class=" rounded-2 "/>
        </div>

      </div>



      @endsection
</body>

</html>