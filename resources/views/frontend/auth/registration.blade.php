@extends('frontend.layouts.front-layout')
@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @livewire('registration')
@endsection
@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/sign-up.js') }}"></script>
@endpush