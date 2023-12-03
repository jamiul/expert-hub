@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
<section class="client-dashboard mx-auto my-5">
  <div class="container">
    <div class="row">
      <div class="all-project-area-password d-flex justify-content-between">
        <div class="all-project">
          <h2>Password & Security</h2>
        </div>

      </div>
    </div>


    <div class="row password-padding">
      <div class="password-area d-flex flex-row justify-content-between px-0">
        <div class="password-what d-flex flex-column">
            <h6 class="d-flex align-items-center" >Password <span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
            <p>Choose a strong, unique password that’s at least 8 characters long.</p>
        </div>

        <div class="change-option">
          <a href="#">Change</a>
        </div>

      </div>
    <!-- </div> 
    <div class="row"> -->
      
      <div class="password-area d-flex flex-row justify-content-between px-0">
        <div class="password-what d-flex flex-column">
            <h6 class="d-flex align-items-center">Two-step verification options <span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
            <p>Add an extra layer of security to block unauthorized access and protect your account.</p>
        </div>

          <div class="check-box-option">
            <ul>
              <li>
                <div class="switch-button switch-button-sm">
                  <input type="checkbox" name="item1" id="item1" />
                  <span><label for="item1"></label></span>
                </div>
              </li>
            </ul>
        </div>
      </div>


      <div class="password-area d-flex flex-row justify-content-between px-0">
        <div class="password-what d-flex flex-column">
            <h6 class="d-flex align-items-center">Text Message<span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
            <p>Receive a six digit code by text message to confirm it’s you.</p>
        </div>

          <div class="check-box-option">
            <ul>
              <li>
                <div class="switch-button switch-button-sm">
                  <input type="checkbox" name="item2" id="item2" />
                  <span><label for="item2"></label></span>
                </div>
              </li>
            </ul>
        </div>
      </div>

      <div class="password-area d-flex flex-row justify-content-between px-0">
        <div class="password-what d-flex flex-column">
            <h6>Mobile app prompt<span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
            <p>Receive a prompt from your mobile app to confirm it’s you.</p>
        </div>

          <div class="check-box-option">
            <ul>
              <li>
                <div class="switch-button switch-button-sm">
                  <input type="checkbox" name="item3" id="item3" />
                  <span><label for="item3"></label></span>
                </div>
              </li>
            </ul>
        </div>
      </div>

      <div class="password-area password-noborder d-flex flex-row justify-content-between px-0">
        <div class="password-what d-flex flex-column">
            <h6>Security Question <span class="what-icon"> <a><img src="{{ asset('assets/frontend/img/lastday/password-what.png') }}" alt=""></a> </span></h6>
            <p>Answer a question you choose to confirm it’s you.</p>
        </div>

        <div class="change-option">
          <a href="#">Update</a>
        </div>

      </div>

    </div>


  </div>
  <!-- edit draft area end Here -->
  </div>
</section>

@endsection
