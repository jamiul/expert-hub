@extends('frontend.layouts.auth')
@section('content')
    {{-- @if (session('resent'))
        <div class="alert alert-success mt-2 mb-0" role="alert">
            A fresh verification link has been sent to your email address.
        </div>
    @endif --}}
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="registration-card verify-email">
                    <div class="verify-img">
                        <img src="{{ asset('assets/frontend/img/verify-img.png') }}">
                    </div>
                    <div class="verify-text">
                        <h3>Verify your email address</h3>
                        <p>We just sent an email to your email address. Please check your email inbox and click the link
                            provided to verify your email address.</p>
                    </div>
                    <div class="verify-link">
                        <ul>
                            <li><a class="link-button" href="#">Change email address</a></li>
                            <li><a class="link-button" href="#">I need help verifying my email address</a></li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <a class="button button-primary" href="{{ route('verification.resend') }}">Resend verification email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection