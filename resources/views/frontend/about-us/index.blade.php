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
    @include('frontend.about-us.partials._team')
    @include('frontend.about-us.partials._story')
@endsection

@push('bottom_scripts')
    @vite('resources/js/about-us.js')
@endpush
