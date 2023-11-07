@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.project.partials._breadcrumb')
    @include('frontend.project.partials._main')
    @include('frontend.project.partials._require')
@endsection

@push('bottom_scripts')
    <script src="{{asset('assets/frontend/js/find-project.js')}}"></script>
@endpush
