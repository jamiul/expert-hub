@extends('frontend.layouts.app')

@section('content')
    @include('frontend.about-us.partials._banner')
    @include('frontend.about-us.partials._info')
    <section class="page-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 18px" class="section-title-wrapper mx-auto text-center">
                        <h2 class="section-title">EXPERTS</h2>
                        <p class="section-title-lead">Meet Our Top Experts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @livewire('experts.slider')
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="" style="width: 195px" class="btn btn-md btn-outline-primary border-2">View All</a>
                </div>
            </div>
        </div>

    </section>

    @include('frontend.about-us.partials._mission')
    @include('frontend.about-us.partials._eduexhub')

    <section class="page-section team-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">AVAILABILITY & SECURITY</h2>
                        <p class="section-title-lead">We’re There Every Step of The Way</p>
                        <p class="section-title-summary">
                            Our platform provides a seamless journey from project posting to completion, ensuring you
                            find the perfect match for your needs. With our escrow payment system, your funds are held
                            securely until you're satisfied with the project's outcome.
                        </p>
                         <a href="{{ route('find.experts') }}" class="btn btn-primary btn-md">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <livewire:about.team/>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.about-us.partials._story')
@endsection

@push('bottom_scripts')
    @vite('resources/js/about-us.js')
@endpush
