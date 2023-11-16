@extends('frontend.layouts.front-layout')

@push('top_styles')
    <link rel='stylesheet' href="{{ asset('assets/frontend/css/image-uploader.min.css') }}">
    {{-- <link rel='stylesheet' href="{{ asset('assets/frontend/css/select2.min.css') }}"> --}}
@endpush

@section('content')
    {{--@include('frontend.user.client.inc.sidebar')--}}
    @livewire('project.create')
    {{-- @include('frontend.user.client.projects.partials._form') --}}
@endsection

@push('bottom_scripts')
    {{-- <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/image-uploader.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/js/script.js') }}"></script> --}}
@endpush
