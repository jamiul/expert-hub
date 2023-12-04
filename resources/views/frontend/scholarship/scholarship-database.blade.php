@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.scholarship.partials._breadcrumb')
    @include('frontend.scholarship.partials._scholarship-database')
    @include('frontend.scholarship.partials._instructor')
@endsection


@push('bottom_scripts')
@vite('resources/js/owl.carousel.js')
@vite('resources/js/scholarship-database.js')
@endpush
