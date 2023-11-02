@extends('frontend.layouts.front-layout');

@section('content')
    @include('frontend.home.register.partials._breadcrumb');
    @include('frontend.home.register.partials._user-option');

@endsection
@push('bottom_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
@endpush
