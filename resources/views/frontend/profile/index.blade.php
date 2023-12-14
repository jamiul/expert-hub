@extends('frontend.layouts.front-layout')
@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    <div class="register-profile">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="expert-left">
              <h3>Hi, Michael. Let's set up your Edu Expert profile</h3>
              <ul>
                <li>
                  <a href="#">
                    <div class="expert-left-img">

                      <img src="{{ asset('assets/frontend/img/register2.png') }}">
                    </div>
                    <p>Create your consultant profile by answering a few question</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="expert-left-img">
                      <img src="{{ asset('assets/frontend/img/register2.png') }}">
                    </div>
                    <p>Browse current academic projects or list academic services for clients </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="expert-left-img">
                      <img src="{{ asset('assets/frontend/img/register2.png') }}">
                    </div>
                    <p>Get paid securely - our team is here to help</p>
                  </a>
                </li>
              </ul>
              <div class="profile-edit-latter">
                <p>Create your profile takes a few minutes and you have the option to edit it later</p>
              </div>
              <div class="profile-button">
                <a href="{{ route('profile.create') }}">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="expert-sidebar">
              <h4>Example profile</h4>
              <div class="expert-right">
                <div class="consultant-left-block">
                  <img src="{{ asset('assets/frontend/img/Mask-img.jpg') }}">
                  <h3>Michael Kassiou</h3>
                  <p>Curriculum  Specialist  | Public Health</p>
                </div>
                <div class="consultant-left-sydney">
                  <ul>
                    <li><img src="{{ asset('assets/frontend/img/map-icon.png') }}">Sydney, Australia</li>
                    <li><img src="{{ asset('assets/frontend/img/time-icon.png') }}">10.15am AEST</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
