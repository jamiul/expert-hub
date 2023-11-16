@extends('frontend.layouts.front-layout')

@push('top_styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
@endpush

@section('content')
    {{--@include('frontend.user.client.inc.sidebar')--}}
    @livewire('project.create')
@endsection

@push('bottom_scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
@endpush
