@extends('frontend.layouts.front-layout');

@section('content')
    @include('frontend.home.register.partials._breadcrumb');
    @include('frontend.home.register.partials._user-option');
@endsection
@push('bottom_scripts')
    {{-- if need any js then add here --}}
@endpush
