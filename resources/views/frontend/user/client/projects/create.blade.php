@extends('frontend.layouts.front-layout')

@push('top_styles')
    <link rel='stylesheet' href="{{ asset('assets/frontend/css/filepond.css') }}">
@endpush

@section('content')
    {{--@include('frontend.user.client.inc.sidebar')--}}
    @livewire('project.create')
@endsection

@push('bottom_scripts')
    <script src="{{ asset('assets/frontend/js/filepond.js') }}"></script>
@endpush
