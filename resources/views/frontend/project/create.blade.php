@extends('frontend.layouts.front-layout')

@push('top_styles')
    @vite('resources/css/filepond.css')
@endpush

@section('content')
    {{--@include('frontend.user.client.inc.sidebar')--}}
    @livewire('project.create')
@endsection

@push('bottom_scripts')
    @vite('resources/js/filepond.js')
@endpush
