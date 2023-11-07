@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.consultant.partials._details-breadcrumb')
    @include('frontend.consultant.partials._details-main')
@endsection

@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/consultant-details.js') }}"></script>
@endpush
