@extends('frontend.default.layouts.app')

@section('content')
<section class="py-4 py-lg-5">
  <div class="container">
    <div>
      <h1 class="" style="color:#50A907;">Find the best freelance jobs</h1>
      <p>Browse jobs posted on Upwork, or jump right in and create a free profile to find the work that you love to do.
      </p>
      <button class="btn btn rounded-pill" style="background-color:#50A907; color:white;">Find work </button>
    </div>


    <div class="row">
      <div class="col-lg-4">
        <h6 class="text-left mb-3 fs-14 fw-700">
          Type of work
          <span class="bg-white pr-3"></span>
        </h6>
        <div class="aiz-radio-list">
          <label class="aiz-radio">
            <input type="radio" name="rating" value="">
            Any type of work
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="4+">

            Development & IT
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="3-4">

            Design & Creative
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="2-3">

            Finance & Accounting
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="1-2">
            Admin & Customer Support
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="0-1">

            Engineering & Architecture
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="0-1">

            Legal
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="0-1">

            Sales & Marketing
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="0-1">
            Writing & Translation
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>
          <label class="aiz-radio">
            <input type="radio" name="rating" value="0-1">
            applyFilter
            <span class="aiz-rounded-check"></span>
            <span class="float-right text-secondary fs-12"></span>
          </label>

        </div>
      </div>
      <div class="col-lg-8">
        <div class="input-group">
          <input id="search-input" type="search" class="form-control" placeholder="Search anything...">
          <button id="search-button" type="button" class="btn btn-primary">
            <img src="{{url('/public/assets/findJob/search.png')}}" alt="Image" "
              class=" "/>
          </button>
        </div>
      <div class=" row">

            <div class=" col-lg-4 ">
              A
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
            <div class=" col-lg-4">
              B
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
            <div class=" col-lg-4">
              C
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
            <div class=" col-lg-4">
              D
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
            <div class=" col-lg-4">
              E
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
            <div class=" col-lg-4">
              F
              <p>
                Design & Creative</p>
              <p>
                Development & IT</p>
              <p>Any type of work</p>
              <p>
                Development & IT</p>
            </div>
        </div>



      </div>

    </div>
  </div>
  </div>




  </div>

</section>

@endsection