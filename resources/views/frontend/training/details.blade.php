@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.training.partials._details-breadcrumb')
    @include('frontend.training.partials._details-main')
@endsection

@push('bottom_scripts')
@endpush