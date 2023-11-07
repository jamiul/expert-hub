@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.expert.partials._breadcrumb')
    @include('frontend.expert.partials._main')
    @include('frontend.expert.partials._slider')
@endsection

@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/expert.js') }}"></script>
@endpush
