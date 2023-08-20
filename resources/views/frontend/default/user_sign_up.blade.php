@extends('frontend.default.layouts.app')

@section('content')
@php
$type = Request::get('type') && Request::get('type') == 2 ? 'client' : 'freelancer';
@endphp
<div class="py-4 py-lg-5">
  <div class="container">
    <div class="row">
      <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
        <div class="card rounded-2 border-gray-light">
          <div class="card-body">

            <div class="mb-5 text-center">
              <h1 class="h3 text-primary mb-0">{{ translate('Join with us') }}</h1>
              <p>{{ translate('Fill out the form to get started') }}.</p>
            </div>
            @if (empty($code) && $code == '')
              @include('frontend/default/register/create')
            @else
              @include('frontend/default/register/email_registration')
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
@if(get_setting('google_recaptcha_activation_checkbox') == 1)
<script src="https://www.google.com/recaptcha/api.js" async defer>
$(document).ready(function() {
  $("#reg-form").on("submit", function(evt) {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      //reCaptcha not verified
      alert("please verify you are humann!");
      evt.preventDefault();
      return false;
    }
    //captcha verified
    //do the rest of your validations here
    $("#reg-form").submit();
  });
});
</script>
@endif
@endsection