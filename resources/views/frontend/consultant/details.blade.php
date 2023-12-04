@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.consultant.partials._details-breadcrumb')
    @include('frontend.consultant.partials._details-main')
@endsection

@push('bottom_scripts')
    @vite('resources/js/consultant-details.js')
@endpush
