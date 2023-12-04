@extends('frontend.layouts.register-dashboard-layout')
@section('content')
<main class="main__layout d-flex">
        <div class="main__content__wrapper_register col">
            <div class="header__wrapper py-2 bg-white">
            @include('figma/admintopbarregister')
            </div>
        </div>
</main>
<div class="register-timeline">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="timeline-left">
              <ul>
                <li>
                  <h4>General Information</h4>
                  <p>Profile details</p>
                </li>
                <li>
                  <h4>Education</h4>
                  <p>Education details</p>
                </li>
                <li>
                  <h4>Field of Expertise</h4>
                  <p>Area of Expertise</p>
                </li>

                <li>
                  <h4>Consultation</h4>
                  <p>Type of consultation</p>
                </li>
                <li>
                  <h4>Biography</h4>
                  <p>Your Biography</p>
                </li>
                <li>
                  <h4>Profile Picture</h4>
                  <p>Add profile picture</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="timeline-right">
              <div class="timeline-text">
                <h2>Tell us about your expertise</h2>
                <p>This helps in finding the right project for you</p>
              </div>
              <div class="timeline-text2">
                <h2>What languages do you speak?</h2>
                <p>We will use this to help match you with clients who are fluent in their language</p>
              </div>
              <div class="timeline-input">
                <input type="text" placeholder="eg. English" name="fname">
              </div>
              <div class="timeline-button">
                <div class="timeline-btn">
                  <a href="#"><i class="fa fa-arrow-left"></i>Back</a>
                </div>
                <div class="timeline-btn2">
                  <a href="register-timeline-2.html">Next</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="container">
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">

            </div>
          </div>
        </div>



@endsection
