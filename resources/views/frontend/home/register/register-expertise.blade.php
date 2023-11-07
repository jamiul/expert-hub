@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @include('frontend.home.register.partials._register-expertise')
@endsection
@push('bottom_scripts')
    <script src="{{asset('assets/frontend/js/register-expertise.js')}}"></script>
@endpush
