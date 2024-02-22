@extends('frontend.layouts.auth')
@section('content')
    {{-- @if (session('resent'))
        <div class="alert alert-success mt-2 mb-0" role="alert">
            A fresh verification link has been sent to your email address.
        </div>
    @endif --}}
    <section class="page-section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="email-verification-notice-wrapper">
                        <div class="card">
                            <div class="card-body p-40">
                                <div class="verify-img">
                                    <img src="{{ asset('assets/frontend/img/verify-img.png') }}">
                                </div>
                                <div class="verify-text">
                                    <h3 class="h4">Verify your email address</h3>
                                    <p>Thank you for registering with ExpertGate! To ensure the security of your account
                                        and enable full access to our platform, we kindly request you to verify your
                                        email address.</p>
                                </div>
                                <div class="email-verification-help-menu">
                                    <ul>
                                        <li><a href="#">Change email address</a></li>
                                        <li><a href="#">I need help verifying my email address</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-40">
                                    <a class="btn btn-outline-primary btn-md border-2 w-100" href="{{ route('verification.resend') }}">Resend
                                        verification email</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
