@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.scholarship.partials._breadcrumb')
    @include('frontend.scholarship.partials._scholarship-database')
    @include('frontend.scholarship.partials._instructor')
@endsection


@push('bottom_scripts')
    <script src="{{asset('assets/frontend/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/frontend/js/scholarship-database.js')}}"></script>
@endpush
