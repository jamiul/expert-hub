@extends('frontend.layouts.front-layout')
@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @if (session('resent'))
        <div class="alert alert-success mt-2 mb-0" role="alert">
            {{ translate('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <div class="register verify-email">
        <div class="container">
            <div class="register-form">
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
                        <li><a href="#">Change email address</a></li>
                        <li><a href="#">I need help verifying my email address</a></li>
                    </ul>
                </div>
                <div class="creat-button">
                    <a href="{{ route('verification.resend') }}">Resend verification email</a>
                </div>
            </div>
        </div>
    </div>
@endsection
