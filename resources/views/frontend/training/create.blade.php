@extends('frontend.layouts.app')

@push('top_styles')
@vite('resources/default/css/expert-profile.css')
@endpush

@section('content')

@livewire('training.create')

@endsection