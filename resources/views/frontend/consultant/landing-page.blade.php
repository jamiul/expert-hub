@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.consultant.partials._breadcrumb')
    @include('frontend.consultant.partials._main')
    @include('frontend.consultant.partials._team')
@endsection

@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/consultant.js') }}"></script>
@endpush
