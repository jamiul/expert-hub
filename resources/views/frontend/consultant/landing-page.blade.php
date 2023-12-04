@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.consultant.partials._breadcrumb')
    @include('frontend.consultant.partials._main')
    @include('frontend.consultant.partials._team')
@endsection

@push('bottom_scripts')
@vite('resources/js/consultant.js')
@endpush
