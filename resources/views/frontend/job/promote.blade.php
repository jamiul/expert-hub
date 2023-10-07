<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('/assets/frontend/default/css/home.css')}}">

</head>

<body class="bg-white">
  @extends('frontend.layouts.app')
  @section('content')

  <!-- review banner -->
  <div class="mx-3 rounded-1  my-2 " style="background: #F2F7F2;">
    <div class="row py-2">
      <div class="col-lg-6 mt-4 px-5 review-banner-main">
        <h3 class=" text-success fre-review-banner-title">Learn how to promote yourself</h3>
        <h6 class="fre-review-banner-text">Stand out from the competition and get more control over your chances of
          winning
          the work you want.
        </h6>
        <button class="  text-white fs-16 btn btn-primary  px-3 py-2">Find work</button>
      </div>
      <div class="col-lg-6  py-2 px-5">
        <img src=" {{asset('/assets/findJob/promote-1.jpg')}}" alt="Image" class=" image-fluid w-100 p-2 rounded-2"
          style=" height:350px;" />
      </div>
    </div>
  </div>

  <!--review second section -->

  <div class=" mt-5 container">
    <div class="row pt-5">
      <div class="col-lg-5 pr-lg-30px ">
        <img src="{{asset('/assets/home/service/mentoring.jpeg')}}" alt=""
          class="rounded-1 h-75 w-lg-100 img-fluid" />
      </div>
      <div class="col-lg-7 pb-sm-3" style="height:300px;">
        <div class="">
          <h1 class=" text-dark fs-30px"> Use Connects to give you the edge when you need it
          </h1>
          <h5 class="text-justify text-dark mt-3">
            Spend Connects like points on EduExHub to show potential clients that you’re serious about your business and
            invested in building a working relationship with them. Connects are an investment toward your expert
            career. Win more work, increase your earning power and build longer-lasting relationships with clients who
            know you best.
          </h5>
        </div>
      </div>

    </div>
  </div>

  <!-- review Suitable work -->

  <div class="jumbotron " style="">
    <div class="container">
      <h1 class="text-dark fs-30px mb-4">Explore ways to take more control and win more work</h1>
      <div class=" row  pb-3">
        <div class=" col-lg-6 col-sm-12">
          <div class="card rounded-2 bg-white h-100">
            <div class="card-body">

              <div class="card-body rounded-2 " style="background-color:#91E6B3"><img class="mx-auto d-block "
                  src=" {{asset('/assets/findJob/jobs-1.png')}}" alt="Image" style="width:120px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3 fs-30" style="color:#091F00;">Availability badge</h5>
              <p class="card-text fs-16">Let clients know you’re ready to work and available now with a bold, blue badge
                on
                your profile, and in search results. Help clients find you faster.</p>
              <p class="btn btn  mt-2" style="background-color:#275846;"><a class="text-white"
                  href="{{route('badge')}}">Learn
                  more</a> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="card bg-white h-100 rounded-2">
            <div class="card-body">
              <div class="card-body  rounded-2" style="background-color:#91E6B3"><img class="mx-auto d-block"
                  src=" {{asset('/assets/findJob/jobs-2.png')}}" alt="Image" style="width:120px; align-items:center;
                  " /></div>
              <h5 class="card-title mt-3 fs-30" style="color:#091F00;">Boost your proposals</h5>
              <p class="card-text fs-16">Increase your chances of getting the jobs you’re really interested in by
                bidding to
                boost your proposal. If your bid wins, you’ll land in the client’s top three slots with an
                eye-catching
                blue lightning bolt</p>
              <p class="btn btn  mt-2 " style="background-color:#275846;"><a class="button-color text-white"
                  href="{{route('proposal')}}">Learn
                  more</a> </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Last section -->
  <div class="container p-2 px-2 rounded-2" style="background-color:#055846;  margin-bottom:100px; margin-top:100px;">
    <div class="row  mx-2  py-3 ">
      <div class="col-lg-7 col-sm-12 lg-position-relative  text-white">
        <h1 class="fw-700 text-white fs-30px">See where you excel</h1>
        <h5 class="my-2 fs-16">By using My Stats, you can see where you stack up against the competition and where you
          can
          improve
          with
          the right tools and information.</h5>
        <p class="mt-lg-2 pb-sm-3  btn text-white border  p-2 px-3">
          Check out My stats
        </p>
      </div>
      <div class=" col-lg-4  ml-lg-5 col-sm-12">
        <img class="img-fluid rounded-1" src="{{asset('powerful-relationship.jpg')}}" alt="">
      </div>
    </div>
  </div>
  @endsection
</body>

</html>
