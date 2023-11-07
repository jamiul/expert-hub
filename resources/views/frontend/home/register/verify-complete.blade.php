@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @include('frontend.home.register.partials._verify-complete')


@endsection
@push('bottom_scripts')
    {{-- if need any js then add here --}}
@endpush
