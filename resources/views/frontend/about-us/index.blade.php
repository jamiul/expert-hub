@extends('frontend.layouts.app')

@section('content')
    @include('frontend.about-us.partials._banner')
    @include('frontend.about-us.partials._info')
    @livewire('experts.slider')
    @include('frontend.about-us.partials._mission')
    @include('frontend.about-us.partials._eduexhub')
    @include('frontend.about-us.partials._team')
    @include('frontend.about-us.partials._story')
@endsection

@push('bottom_scripts')
    @vite('resources/js/about-us.js')
@endpush
