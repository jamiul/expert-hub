@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.project.partials._details-breadcrumb')
    @include('frontend.project.partials._details-main')
    @include('frontend.project.partials._similar-project')
@endsection

@push('bottom_scripts')
    {{-- if need any js then add here --}}
@endpush
