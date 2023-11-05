@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.training.partials._breadcrumb')
    @include('frontend.training.partials._find-training')
    @include('frontend.training.partials._slider')
@endsection

@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/training.js') }}"></script>
@endpush
