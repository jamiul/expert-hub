@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.project.partials._breadcrumb')
    @include('frontend.project.partials._main')
    @include('frontend.project.partials._require')
@endsection

@push('bottom_scripts')
@vite('resources/js/find-project.js')
@endpush
