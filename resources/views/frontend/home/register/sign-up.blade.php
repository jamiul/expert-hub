@extends('frontend.layouts.front-layout');

@section('content')
    @include('frontend.home.register.partials._breadcrumb');
    @include('frontend.home.register.partials._register-form');
@endsection

@push('bottom_scripts')
@vite('resources/js/sign-up.js')
@endpush
